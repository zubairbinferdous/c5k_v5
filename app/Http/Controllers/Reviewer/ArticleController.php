<?php

namespace App\Http\Controllers\Reviewer;

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

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Article';
        $this->url = 'article';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approve()
    {
        //
        $rows = Article::where('review_status', '2')->orderBy('updated_at', 'desc')->get();
        $categories = ArticleCategory::where('status', '1')->get();

        $title = 'Approve Article';
        $url = $this->url;

        $route_name = 'approve';

        return view('reviewer.'.$url.'.index', compact('rows', 'categories', 'title', 'url', 'route_name'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pending()
    {
        //
        $rows = Article::where('review_status', '1')->orderBy('updated_at', 'desc')->get();
        $categories = ArticleCategory::where('status', '1')->get();

        $title = 'Pending Article';
        $url = $this->url;

        $route_name = 'pending';

        return view('reviewer.'.$url.'.index', compact('rows', 'categories', 'title', 'url', 'route_name'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reject()
    {
        //
        $rows = Article::where('review_status', '0')->orderBy('updated_at', 'desc')->get();
        $categories = ArticleCategory::where('status', '1')->get();

        $title = 'Reject Article';
        $url = $this->url;

        $route_name = 'reject';

        return view('reviewer.'.$url.'.index', compact('rows', 'categories', 'title', 'url', 'route_name'));
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
        // Field Validation
        $request->validate([
            'title' => 'required|max:250',
            'category' => 'required',
            'details' => 'required',
            'image' => 'nullable|image',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,ppt,pptx,doc,docx,pdf,xls,xlsx|max:51200',
            'video_id' => 'nullable|max:100',
            'start_date' => 'required|date|after_or_equal:today',
        ]);


        // file upload, fit and store inside public folder 
        if($request->hasFile('file')){
            //Upload New Image
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = str_replace([' ','-','&','#','$','%','^',';',':'],'_',$filename).'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->url.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            // Move File inside public/uploads/ folder
            $file = $request->file('file')->move($path, $fileNameToStore);
        }
        else{
            $fileNameToStore = NULL;
        }



        // image upload, fit and store inside public folder 
        if($request->hasFile('image')){
            //Upload New Image
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageNameToStore = $filename.'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->url.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            //Resize And Crop as Fit image here (640 width, 400 height)
            $thumbnailpath = $path.$imageNameToStore;
            $img = Image::make($request->file('image')->getRealPath())->fit(640, 400, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);
        }
        else{
            $imageNameToStore = 'no_image.jpg';
        }


        // Insert Data
        $data = new Article;
        $data->title = $request->title;
        $data->category_id = $request->category;
        $data->writer_id = Auth::user()->id;
        $data->description = $request->details;
        $data->image_path = $imageNameToStore;
        $data->file_path = $fileNameToStore;
        $data->video_id = $request->video_id;
        $data->start_date = $request->start_date;
        $data->upload_status = 1;
        $data->review_status = 2;
        $data->status = 1;
        $data->created_by = Auth::user()->id;
        $data->save();


        Session::flash('success', $this->title.' Created Successfully!');

        return redirect()->route('reviewer.article.approve');
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
        // Field Validation
        $request->validate([
            'title' => 'required|max:250',
            'category' => 'required',
            'details' => 'required',
            'image' => 'nullable|image',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,ppt,pptx,doc,docx,pdf,xls,xlsx|max:51200',
            'video_id' => 'nullable|max:100',
            'start_date' => 'required|date',
        ]);


        // file upload, fit and store inside public folder 
        if($request->hasFile('file')){

            //Delete Old Image
            $old_file = Article::find($id);

            $file_path = public_path('uploads/'.$this->url.'/'.$old_file->file_path);
            if(File::isFile($file_path)){
                File::delete($file_path);
            }

            //Upload New Image
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = str_replace([' ','-','&','#','$','%','^',';',':'],'_',$filename).'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->url.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            // Move File inside public/uploads/ folder
            $file = $request->file('file')->move($path, $fileNameToStore);
        }
        else{

            $old_file = Article::find($id);

            $fileNameToStore = $old_file->file_path; 
        }



        // image upload, fit and store inside public folder 
        if($request->hasFile('image')){

            //Delete Old Image
            $old_file = Article::find($id);

            $file_path = public_path('uploads/'.$this->url.'/'.$old_file->image_path);
            if(File::isFile($file_path)){
                File::delete($file_path);
            }

            //Upload New Image
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageNameToStore = $filename.'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->url.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            //Resize And Crop as Fit image here (640 width, 400 height)
            $thumbnailpath = $path.$imageNameToStore;
            $img = Image::make($request->file('image')->getRealPath())->fit(640, 400, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);
        }
        else{

            $old_file = Article::find($id);

            $imageNameToStore = $old_file->image_path; 
        }


        // Update Data
        $data = Article::find($id);
        $data->title = $request->title;
        $data->category_id = $request->category;
        $data->description = $request->details;
        $data->image_path = $imageNameToStore;
        $data->file_path = $fileNameToStore;
        $data->video_id = $request->video_id;
        $data->start_date = $request->start_date;
        $data->review_status = $request->review_status;
        $data->status = $request->status;
        $data->updated_by = Auth::user()->id;
        $data->save();


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
        //Delete Data
        $data = Article::find($id);

        $file_path = public_path('uploads/'.$this->url.'/'.$data->file_path);
        if(File::isFile($file_path)){
            File::delete($file_path);
        }

        $image_path = public_path('uploads/'.$this->url.'/'.$data->image_path);
        if(File::isFile($image_path)){
            File::delete($image_path);
        }

        $data->delete();

        Session::flash('success', $this->title.' Deleted Successfully!');

        return redirect()->back();
    }
}
