<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Setting;
use App\Social;
use App\User;
use Session;
use Image;
use File;
use Auth;
use Hash;
use DB;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Setting';
        $this->url = 'setting';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows = Setting::all();
        $socials = Social::where('user_id', '=', Null)->get();

        $title = $this->title;
        $url = $this->url;

        return view('admin.'.$url.'.index', compact('rows', 'socials', 'title', 'url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function siteInfo(Request $request)
{
    // Field Validation
    $request->validate([
        'title' => 'required|max:250',
    ]);

    $id = $request->id;

    // Logo upload and store in 'public/backend/logo/'
    if ($logo = $request->file('logo')) {
        // Define the path where the logo will be stored
        $destinationPath = 'backend/logo/';
        // Create a unique name with current timestamp
        $logoNameToStore = date('YmdHis') . '.' . $logo->getClientOriginalExtension();
        // Move the logo to the destination path
        $logo->move($destinationPath, $logoNameToStore);
    } else {
        // Keep the old logo if no new file is uploaded
        $old_file = Setting::find($id);
        $logoNameToStore = $old_file->logo_path ?? null;
    }

    // Favicon upload and store in 'public/backend/favicon/'
    if ($favicon = $request->file('favicon')) {
        // Define the path where the favicon will be stored
        $destinationPath = 'backend/favicon/';
        // Create a unique name with current timestamp
        $faviconNameToStore = date('YmdHis') . '.' . $favicon->getClientOriginalExtension();
        // Move the favicon to the destination path
        $favicon->move($destinationPath, $faviconNameToStore);
    } else {
        // Keep the old favicon if no new file is uploaded
        $old_file = Setting::find($id);
        $faviconNameToStore = $old_file->favicon_path ?? null;
    }

    // Insert or Update logic
    if ($id == -1) {
        // Insert Data
        $data = new Setting;
        $data->created_by = Auth::user()->id;
    } else {
        // Update Data
        $data = Setting::find($id);
        $data->updated_by = Auth::user()->id;
    }

    $data->title = $request->title;
    $data->description = $request->details;
    $data->keywords = $request->keywords;
    $data->logo_path = $logoNameToStore;
    $data->favicon_path = $faviconNameToStore;
    $data->footer_text = $request->footer_text;
    $data->status = 1;
    $data->save();

    Session::flash('success', 'Site Info Updated Successfully!');

    return redirect()->back();
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactInfo(Request $request)
    {
        // Field Validation
        $request->validate([
            'phone_no' => 'required|max:50',
            'phone_no2' => 'nullable|max:50',
            'email_address' => 'required|max:250',
            'email_address2' => 'nullable|max:250',
            'contact_address' => 'required',
            'contact_mail' => 'required|max:250',
        ]);

        $id = $request->id;


        // -1 means no data row found
        if($id == -1){
            // Insert Data
            $data = new Setting;
            $data->phone_one = $request->phone_no;
            $data->phone_two = $request->phone_no2;
            $data->email_one = $request->email_address;
            $data->email_two = $request->email_address2;
            $data->contact_address = $request->contact_address;
            $data->contact_mail = $request->contact_mail;
            $data->status = 1;
            $data->created_by = Auth::user()->id;
            $data->save();
        }
        else{
            // Update Data
            $data = Setting::find($id);
            $data->phone_one = $request->phone_no;
            $data->phone_two = $request->phone_no2;
            $data->email_one = $request->email_address;
            $data->email_two = $request->email_address2;
            $data->contact_address = $request->contact_address;
            $data->contact_mail = $request->contact_mail;
            $data->status = 1;
            $data->updated_by = Auth::user()->id;
            $data->save();
        }


        Session::flash('success', 'Contact Info Updated Successfully!');

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changeMail(Request $request)
    {
        // Field Validation
        $request->validate([
            'email' => 'required|email',
        ]);

        // Check
        if($request->email != Auth::user()->email){
            $user = User::find(Auth::user()->id);
            $user->email = $request->email;
            $user->save();
            Auth::logout();
            
            Session::flash('success', 'Updated Successfully!');

            return redirect()->route('login');
        }
        else{
            Session::flash('error', 'You are entered same email address!');

            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePass(Request $request)
    {
        // Field Validation
        $request->validate([
            'old_password' => 'required',
            'password' => 'nullable|confirmed|min:8',
        ]);

        $oldPassword = $request->old_password;
        $hashedPassword = Auth::user()->password;

        // Check old password for validation
        if(Hash::check($oldPassword, $hashedPassword)){
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            Session::flash('success', 'Password Change Successfully!');

            return redirect()->route('login');
        }
        else{
            Session::flash('error', 'Current Password Is Invalid!');

            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function socialInfo(Request $request)
    {
        // Field Validation
        $request->validate([
            'facebook' => 'nullable|max:500',
            'twitter' => 'nullable|max:500',
            'linkedin' => 'nullable|max:500',
            'instagram' => 'nullable|max:500',
            'pinterest' => 'nullable|max:500',
            'skype' => 'nullable|max:500',
            'youtube' => 'nullable|max:500',
        ]);

        $id = $request->id;


        // -1 means no data row found
        if($id == -1){
            // Insert Data
            $data = new Social;
            $data->facebook = $request->facebook;
            $data->twitter = $request->twitter;
            $data->linkedin = $request->linkedin;
            $data->instagram = $request->instagram;
            $data->pinterest = $request->pinterest;
            $data->skype = $request->skype;
            $data->youtube = $request->youtube;
            $data->status = 1;
            $data->created_by = Auth::user()->id;
            $data->save();
        }
        else{
            // Update Data
            $data = Social::find($id);
            $data->facebook = $request->facebook;
            $data->twitter = $request->twitter;
            $data->linkedin = $request->linkedin;
            $data->instagram = $request->instagram;
            $data->pinterest = $request->pinterest;
            $data->skype = $request->skype;
            $data->youtube = $request->youtube;
            $data->status = 1;
            $data->updated_by = Auth::user()->id;
            $data->save();
        }


        Session::flash('success', 'Social Info Updated Successfully!');

        return redirect()->back();
    }
}
