<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
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
            'article_id' => 'required',
            'name' => 'required|max:250',
            'email' => 'required|max:250',
            'comment' => 'required',
        ]);


        // Insert Data
        $data = new Comment;
        $data->article_id = $request->article_id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->comment = $request->comment;
        $data->status = 1;
        $data->save();

        return redirect()->back();
    }

}
