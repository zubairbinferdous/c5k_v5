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
use App\BlogBanner; // Import the Banner model
use Illuminate\Support\Facades\Storage;

class BlogBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_banners = BlogBanner::orderBy('id','desc')->get();
        return view('admin.home.blog_banner', compact('blog_banners'));
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
        $request->validate([
            'blog_banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure it's an image
        ]);
    
// Handle the banner image upload
if ($image = $request->file('blog_banner')) {
    // Define the path where the image will be stored
    $destinationPath = 'public/backend/Blog_banner/';
    // Create a unique image name with current timestamp
    $bannerName = date('YmdHis') . "." . $image->getClientOriginalExtension();
    // Move the image to the destination path
    $image->move($destinationPath, $bannerName);
}
    
        // Create a new banner entry
        $banner = new BlogBanner();
        $banner->blog_banner = $bannerName; // Save the banner image path
        $banner->first_heading = $request->first_heading;
        $banner->heading_two = $request->heading_two;
    
        // Save the banner section into the database
        $banner->save();
    
        // Redirect with a success message
        return redirect()->back()->with('success', 'Banner updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog_banner = BlogBanner::findOrFail($id);
        $editBannerId = $id;
        $blog_banners = BlogBanner::all();

    // Return the view for editing with the banner data
    return view('admin.home.blog_banner_edit', compact('blog_banner','blog_banners','editBannerId'));
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
            'blog_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Banner is nullable because it might not be updated
        ]);
    
        // Find the existing banner
        $banner = BlogBanner::findOrFail($id);
    
        // Handle the banner image upload
        if ($image = $request->file('blog_banner')) {
            // Define the path where the image will be stored
            $destinationPath = 'public/backend/Blog_banner/';
            // Create a unique image name with current timestamp
            $bannerName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // Move the image to the destination path
            $image->move($destinationPath, $bannerName);
        }
    
        // Update the other fields        
        $banner->blog_banner = $bannerName; // Save the banner image path
        $banner->first_heading = $request->first_heading;
        $banner->heading_two = $request->heading_two;
    
        // Save the changes
        $banner->save();
    
        // Redirect with a success message
        return redirect()->back()->with('success', 'Blog Banner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = BlogBanner::findOrFail($id);

    // Delete the banner image file from storage
    if ($banner->blog_banner) {
        Storage::disk('public')->delete($banner->blog_banner);
    }

    // Delete the banner record from the database
    $banner->delete();

    // Redirect with a success message
    return redirect()->back()->with('success', 'Banner deleted successfully.');
    }
}
