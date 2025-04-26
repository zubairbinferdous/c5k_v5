<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ArticleIssue;
use Carbon\Carbon;
use Session;
use Auth;
use DB;

class ArticleIssueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Issue';
        $this->url = 'issue';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $rows = ArticleIssue::where('article_id', $id)->orderBy('id', 'desc')->get();

        $title = $this->title;
        $url = $this->url;

        $article_id = $id;

        return view('reviewer.'.$url.'.index', compact('rows', 'title', 'url', 'article_id'));
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
            'details' => 'required',
        ]);


        // Insert Data
        $data = new ArticleIssue;
        $data->title = $request->title;
        $data->article_id = $request->article_id;
        $data->reviewer_id = Auth::user()->id;
        $data->description = $request->details;
        $data->issue_date = Carbon::now();
        $data->status = 1;
        $data->created_by = Auth::user()->id;
        $data->save();


        Session::flash('success', $this->title.' Created Successfully!');

        return redirect()->back();
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
            'details' => 'required',
        ]);


        // Update Data
        $data = ArticleIssue::find($id);
        $data->title = $request->title;
        $data->article_id = $request->article_id;
        $data->reviewer_id = Auth::user()->id;
        $data->description = $request->details;
        $data->issue_date = Carbon::now();
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
        $data = ArticleIssue::find($id);
        $data->delete();

        Session::flash('success', $this->title.' Deleted Successfully!');

        return redirect()->back();
    }
}
