<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Journal;
use App\Editorial;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Editorial';
        $this->url = 'home';
    }
    public function index()
    {
        $title = 'Editorial';
        $url = $this->url;
        $journals = Journal::latest()->get();
        $editorials = Editorial::latest()->get();
        return view('admin.editorial.index', compact('url','title','journals','editorials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Editorial Create';
        $journals = Journal::latest()->get();
        return view('admin.editorial.create', compact('title','journals'));
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
            'editorial_member' => 'required',
        ]);
    
        // Create a new journal entry
        $journal = new Editorial();
        $journal->journal_id = $request->input('journal_id');
        $journal->editorial_member = $request->input('editorial_member');
    
        // Save the journal entry to the database
        $journal->save();    
        return redirect()->back()->with('success', 'Editorial Member added successfully.');
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
    $title = 'Edit Editorial';
    $journals = Journal::latest()->get();
    $editorial = Editorial::findOrFail($id); // Find the editorial by ID
    return view('admin.editorial.edit', compact('title', 'journals', 'editorial'));
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
            'editorial_member' => 'required',
        ]);
    
        // Find the existing editorial entry
        $editorial = Editorial::findOrFail($id);
    
        // Update the editorial entry fields
        $editorial->journal_id = $request->input('journal_id');
        $editorial->editorial_member = $request->input('editorial_member');
    
        // Save the updated editorial entry to the database
        $editorial->save();
    
        return redirect()->back()->with('success', 'Editorial Member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editorial = Editorial::findOrFail($id);

        $editorial->delete();
    
        // Redirect with a success message
        return redirect()->back()->with('success', 'editorial deleted successfully.');
    }
}
