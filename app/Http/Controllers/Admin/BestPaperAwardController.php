<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Journal;
use App\Editorial;
use App\BestPaperAward;

class BestPaperAwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Best Paper Award';
        $this->url = 'home';
    }
    public function index()
    {
        $title = 'Best Paper Award';
        $url = $this->url;
        $journals = Journal::latest()->get();
        $bestpapers = BestPaperAward::latest()->get();
        return view('admin.best_paper.index', compact('url','title','journals','bestpapers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Best Paper Award Create';
        $journals = Journal::latest()->get();
        return view('admin.best_paper.create', compact('title','journals'));
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
            'journal_id' => 'required',
            'bestpaper' => 'required',
        ]);
    
        // Create a new journal entry
        $bestpapers = new BestPaperAward();
        $bestpapers->journal_id = $request->input('journal_id');
        $bestpapers->bestpaper = $request->input('bestpaper');
    
        // Save the journal entry to the database
        $bestpapers->save();    
        return redirect()->back()->with('success', 'Best Papers Awards added successfully.');
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
    $title = 'Edit Best Paper Award';
    $journals = Journal::latest()->get();
    $bestpapers = BestPaperAward::findOrFail($id); // Find the best_paper by ID
    return view('admin.best_paper.edit', compact('title', 'journals', 'bestpapers'));
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
        $request->validate([
            'journal_id' => 'required',
            'bestpaper' => 'required',
        ]);
    
        // Find the existing editorial entry
        $bestpapers = BestPaperAward::findOrFail($id);
    
        // Update the editorial entry fields
        $bestpapers->journal_id = $request->input('journal_id');
        $bestpapers->bestpaper = $request->input('bestpaper');
    
        // Save the updated editorial entry to the database
        $bestpapers->save();
    
        return redirect()->back()->with('success', 'Best Paper Awards updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bestpapers = BestPaperAward::findOrFail($id);

        $bestpapers->delete();
    
        // Redirect with a success message
        return redirect()->back()->with('success', 'Best Paper Awards deleted successfully.');
    }
}
