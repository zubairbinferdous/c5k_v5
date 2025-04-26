<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Article;

class SearchController extends Controller
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
    public function index(Request $request)
    {
        // Articles                                
        $articles = Article::where('title', 'LIKE', '%'.$request->search.'%' )
							->orWhere('description', 'LIKE', '%'.$request->search.'%' )
                            ->where('status', '1')
                            ->where('review_status', '2')
                            ->where('start_date', '<=', $this->today)
                            ->orderBy('start_date', 'desc')
                            ->orderBy('id', 'desc')
                            ->paginate(10);

        $search = $request->search;

        return view('archive', compact('articles', 'search'));
    }
}
