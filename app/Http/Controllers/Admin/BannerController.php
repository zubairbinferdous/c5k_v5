<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ArticleCategory;
use Carbon\Carbon;
use App\Article;
use Session;
use Image;
use File;
use Auth;
use DB;
use App\Banner; // Import the Banner model
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $banners = Banner::orderBy('id', 'desc')->get();
        $rows = Article::where('review_status', '2')->orderBy('updated_at', 'desc')->get();
        $categories = ArticleCategory::where('status', '1')->get();

        $title = 'Approve Article';

        $route_name = 'approve';
        return view('admin.home.banner', compact('rows', 'categories', 'title', 'route_name','banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the input fields, with 'banner' and all headings being required
        $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure it's an image
           
        ], [
            'banner.required' => 'Banner field is required',
           
        ]);
    
        // Handle the banner image upload
        if ($image = $request->file('banner')) {
            // Define the path where the image will be stored
            $destinationPath = 'public/backend/banner/';
            // Create a unique image name with current timestamp
            $bannerName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // Move the image to the destination path
            $image->move($destinationPath, $bannerName);
        }
    
        // Create a new banner entry
        $banner = new Banner();
        $banner->banner = $bannerName; // Save the banner image name
     
    
        // Save the banner section into the database
        $banner->save();
    
        // Redirect with a success message
       
        return redirect()->back()->with('success', 'Banner upload successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        $editBannerId = $id;
        $banners = Banner::all();

    // Return the view for editing with the banner data
    return view('admin.home.banner_edit', compact('banner','banners','editBannerId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // Validate the input fields
    $request->validate([
        'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Banner is nullable because it might not be updated
       
    ]);

    // Find the existing banner
    $banner = Banner::findOrFail($id);

    // Handle the banner image upload
        // Handle the banner image upload
        if ($image = $request->file('banner')) {
            // Define the path where the image will be stored
            $destinationPath = 'public/backend/banner/';
            // Create a unique image name with current timestamp
            $bannerName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // Move the image to the destination path
            $image->move($destinationPath, $bannerName);
        }

    // Update the other fields
    $banner->banner = $bannerName; // Save the banner image name
 

    // Save the changes
    $banner->save();

    // Redirect with a success message
    return redirect()->back()->with('success', 'Banner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

    // Delete the banner image file from storage
    if ($banner->banner) {
        Storage::disk('public')->delete($banner->banner);
    }

    // Delete the banner record from the database
    $banner->delete();

    // Redirect with a success message
    return redirect()->back()->with('success', 'Banner deleted successfully.');
    }
}
