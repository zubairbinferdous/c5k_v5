<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Journal;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Journal';
        $this->url = 'home';
    }
    public function index()
    {
        $title = 'Journal';
        $url = $this->url;
        $journals = Journal::latest()->get();
        return view('admin.journal.index', compact('url','title','journals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Journal Create';
        return view('admin.journal.create', compact('title'));
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
            'journal_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size is optional
            'backgroundColor' => 'required|string',
            'title' => 'required|string|max:255',
            'aim_scope' => 'required|string',
        ]);
    
        // Handle the journal image upload
        if ($image = $request->file('journal_image')) {
            // Define the path where the image will be stored
            $destinationPath = 'public/backend/journal/';
            // Create a unique image name with the current timestamp
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // Move the image to the destination path
            $image->move($destinationPath, $imageName);
        }
    
        // Create a new journal entry
        $journal = new Journal();
        $journal->journal_image = $imageName ?? null;
        $journal->backgroundColor = $request->input('backgroundColor');
        $journal->title = $request->input('title');
        $journal->slug = Str::slug($request->input('title'), '-'); // Generate and store the slug
        $journal->aim_scope = $request->input('aim_scope');
        $journal->cite_score = $request->input('cite_score');
        $journal->impact_factor = $request->input('impact_factor');
        $journal->issn_print = $request->input('issn_print');
        $journal->issn_online = $request->input('issn_online');
        $journal->subject_area = $request->input('subject_area');
        $journal->article_charge = $request->input('article_charge');
    
        // Save the journal entry to the database
        $journal->save();
    
        return redirect()->back()->with('success', 'Journal added successfully.');
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
        $title = 'Journal';
        $journal = Journal::findOrFail($id); // Retrieve the journal by ID
        return view('admin.journal.edit', compact('journal','title')); // Pass data to the edit view
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
        'journal_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional for updates
        'backgroundColor' => 'required|string',
        'title' => 'required|string|max:255',
        'aim_scope' => 'required|string',
    ]);

    // Find the existing journal entry
    $journal = Journal::findOrFail($id);

    // Handle the journal image upload if a new one is provided
    if ($image = $request->file('journal_image')) {
        // Define the path where the image will be stored
        $destinationPath = 'public/backend/journal/';
        // Create a unique image name with the current timestamp
        $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
        // Move the image to the destination path
        $image->move($destinationPath, $imageName);
        
        // Delete the old image if it exists
        if ($journal->journal_image && file_exists($destinationPath . $journal->journal_image)) {
            unlink($destinationPath . $journal->journal_image);
        }
        
        // Set the new image name
        $journal->journal_image = $imageName;
    }

    // Update the other fields
    $journal->backgroundColor = $request->input('backgroundColor');
    $journal->title = $request->input('title');
    $journal->slug = Str::slug($request->input('title'), '-'); // Update the slug
    $journal->aim_scope = $request->input('aim_scope');
    $journal->cite_score = $request->input('cite_score');
    $journal->impact_factor = $request->input('impact_factor');
    $journal->issn_print = $request->input('issn_print');
    $journal->issn_online = $request->input('issn_online');
    $journal->subject_area = $request->input('subject_area');
    $journal->article_charge = $request->input('article_charge');

    // Save the updated journal entry to the database
    $journal->save();

    return redirect()->back()->with('success', 'Journal updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journal = Journal::findOrFail($id);

        // Define the path to the image
        $imagePath = public_path('backend/journal/' . $journal->journal_image);
    
        // Delete the image file if it exists
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    
        // Delete the journal record from the database
        $journal->delete();
    
        // Redirect with a success message
        return redirect()->back()->with('success', 'Journal deleted successfully.');
    }
}
