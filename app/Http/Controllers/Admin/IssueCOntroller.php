<?php

namespace App\Http\Controllers\Admin;

use App\Issue;
use App\Http\Controllers\Controller;
use App\Volume;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

class IssueCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volumes = Volume::get();
        $rows = Issue::get();
        return view('admin.main_issue.index', compact('rows', 'volumes'));
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
        // dd($request->all());
        $request->validate([
            'volume_id' => 'required|numeric',
            'issue_name' => 'required|string|max:255|unique:issues,issue_name',
            'images' => 'required|image|max:10240',
        ]);

        DB::beginTransaction();
        try {  
            $issue                 = new Issue();
            $issue->volume_id      = $request->volume_id;
            $issue->issue_name     = $request->issue_name;

            // Handle file upload (book image)
            if ($request->hasFile('images')) {
                $image       = $request->file('images');
                $imageName   = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $imagePath    = 'public/backend/issues/';
                $image->move($imagePath, $imageName);
                $issue->images = $imagePath . $imageName;
            }

            $issue->created_at     = now();
            $issue->updated_at     = now();
            // dd($issue);
            $issue->save();
    
            DB::commit();
    
            Toastr::success('Issues created successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
    
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex);
            Toastr::error('Something went wrong. Please try again.', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back()->withInput();
        }
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
        //  dd($request->all());
         $request->validate([
            'volume_id' => 'required|numeric',
            'issue_name' => 'required|string|max:255|unique:issues,issue_name,'. $id,
            'images' => 'max:10240',
        ]);

        DB::beginTransaction();
        try { 
            $issue                 = Issue::findOrFail($id);
            $issue->volume_id      = $request->volume_id;
            $issue->issue_name     = $request->issue_name;

            // Handle file upload (book image)
            if ($request->hasFile('images')) {
                $image       = $request->file('images');

                if ( !empty($issue->images) && file_exists($issue->images))  {
                    @unlink($issue->images); 
                }

                $imageName   = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $imagePath    = 'public/backend/issues/';
                $image->move($imagePath, $imageName);
                $issue->images = $imagePath . $imageName;
            }
            $issue->updated_at     = now();
            // dd($issue);
            $issue->update();
    
            DB::commit();
    
            Toastr::success('Issues Updated Successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
    
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex);
            Toastr::error('Something went wrong. Please try again.', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $issue = Issue::findOrFail($id);
            $issue->delete();
    
            Toastr::success('Issue deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        } catch (\Exception $e) {
            Toastr::error('Something went wrong. Please try again.', 'Error', ["positionClass" => "toast-top-right"]);
        }
    
        return redirect()->back();
    }
}
