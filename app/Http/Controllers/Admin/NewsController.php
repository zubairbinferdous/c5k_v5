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
use App\Blog; // Import the Banner model
use App\News; // Import the Banner model
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Blog';
        $this->url = 'home';
    }
    public function index()
    {
        $title = 'News';
        $categories = ArticleCategory::where('status', '1')->get();
        $news = News::with('category')->get();
        $url = $this->url;
        return view('admin.home.news', compact('url','categories','title','news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'title' => 'required|max:250',
            'category_id' => 'required',
            'details' => 'required',
            'image' => 'nullable|image',
        ]);

       // Handle the banner image upload
       if ($image = $request->file('image')) {
        // Define the path where the image will be stored
        $destinationPath = 'public/backend/news/';
        // Create a unique image name with current timestamp
        $bannerName = date('YmdHis') . "." . $image->getClientOriginalExtension();
        // Move the image to the destination path
        $image->move($destinationPath, $bannerName);
    }
        // Insert Data
        $data = new News;
        $data->image = $bannerName; // Save the banner image path
        $data->title = $request->title;
        $data->category_id = $request->category_id;
        $data->details = $request->details;
        $data->save();


        Session::flash('success', $this->title.' Created Successfully!');

        return redirect()->back()->with('success', 'News Added successfully');
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
        //
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
         //validate the update request
         $request->validate([
            'title' => 'required|max:250',
            'category_id' => 'required',
            'details' => 'required',
            'image' => 'nullable|image',
        ]);
    
        // Find the blog by ID
        $data = News::find($id);
    
       // Handle the banner image upload
       if ($image = $request->file('image')) {
        // Define the path where the image will be stored
        $destinationPath = 'public/backend/blog/';
        // Create a unique image name with current timestamp
        $bannerName = date('YmdHis') . "." . $image->getClientOriginalExtension();
        // Move the image to the destination path
        $image->move($destinationPath, $bannerName);
        $data->image = $bannerName; // Save the banner image path
    }
    
        // If no new image is uploaded, retain the old image by not overriding it
        // Update the other fields
       
        $data->title = $request->title;
        $data->category_id = $request->category_id;
        $data->details = $request->details;
    
        // Save the updated data
        $data->save();
    
        // Flash success message and redirect
        Session::flash('success', $this->title.' Updated Successfully!');
    
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = News::findOrFail($id);

        // Delete the banner image file from storage
        if ($banner->banner) {
            Storage::disk('public')->delete($banner->image);
        }
    
        // Delete the banner record from the database
        $banner->delete();
    
        // Redirect with a success message
        return redirect()->back()->with('success', 'news deleted successfully.');
    }
}
