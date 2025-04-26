<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SubmissionController extends Controller
{
    public function submission($id){
        $journal=DB::table('journal_articals')
        ->where('id', $id)->first();


        return view('submission.submission',compact('journal'));
    }
}
