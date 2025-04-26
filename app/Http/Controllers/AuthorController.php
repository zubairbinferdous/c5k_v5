<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Article;
use App\User;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Date
        $this->today = Carbon::today();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Authors                                
        $authors = User::where('user_type', 'W')
                        ->orderBy('id', 'desc')
                        ->paginate(10);

        return view('authors', compact('authors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Authors                                
        $authors = User::where('id', $id)
                        ->where('user_type', 'W')
                        ->get();

        // Articles                                
        $articles = Article::where('writer_id', $id)
                            ->where('status', '1')
                            ->where('review_status', '2')
                            ->where('start_date', '<=', $this->today)
                            ->orderBy('start_date', 'desc')
                            ->orderBy('id', 'desc')
                            ->paginate(5);

        return view('author', compact('authors', 'articles'));
    }
}
