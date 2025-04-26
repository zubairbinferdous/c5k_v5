<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Journal;
use App\Editorial;
use App\BestPaperAward;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function business_editorial($id)
    {
        $journal = Journal::findOrFail($id);

        // Get only the editorials associated with this specific journal
        $editorials = $journal->editorials;    
        return view('edotorial.business_editorial', compact('journal', 'editorials'));
    }    
    public function best_paper($id)
    {
        $journal = Journal::findOrFail($id);
        // Get only the editorials associated with this specific journal
        $bestpapers = $journal->bestpaper;
    
        return view('pages.best_paper_awards', compact('journal', 'bestpapers'));
    } 
}
