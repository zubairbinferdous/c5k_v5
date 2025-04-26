<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use Session;
use Image;
use File;
use Auth;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Profile';
        $this->url = 'profile';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $rows = User::where('id', $id)->get();

        $title = $this->title;
        $url = $this->url;

        return view('author.'.$url.'.index', compact('rows', 'title', 'url'));
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
        //
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
            'name' => 'required|max:250',
            'phone' => 'nullable|max:50',
            'address' => 'required',
            'dob' => 'required|date',
            'image' => 'nullable|image',
        ]);


        $data = User::find($id);
        if( $data->id == Auth::user()->id ){

            // image upload, fit and store inside public folder 
            if($request->hasFile('image')){

                //Delete Old Image
                $old_file = User::find($id);

                $file_path = public_path('uploads/'.$this->url.'/'.$old_file->image_path);
                if(File::isFile($file_path)){
                    File::delete($file_path);
                }

                //Upload New Image
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;

                //Crete Folder Location
                $path = public_path('uploads/'.$this->url.'/');
                if (! File::exists($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

                //Resize And Crop as Fit image here (200 width, 200 height)
                $thumbnailpath = $path.$fileNameToStore;
                $img = Image::make($request->file('image')->getRealPath())->fit(200, 200, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);
            }
            else{

                $old_file = User::find($id);

                $fileNameToStore = $old_file->image_path; 
            }


            // Update Data
            $data = User::find($id);
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->dob = $request->dob;
            $data->image_path = $fileNameToStore;
            $data->profile = $request->details;
            $data->save();


            Session::flash('success', $this->title.' Updated Successfully!');

        }
        else{
            Session::flash('error', 'You are not permitted update this!');
        }

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
        //
    }
}
