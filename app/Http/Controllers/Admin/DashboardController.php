<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ArticleIssue;
use App\Article;
use App\Comment;
use App\User;
use Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Dashboard';
        $this->url = 'dashboard';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = $this->title;
        $url = $this->url;


        $user_type = Auth::user()->user_type;
        $user_id = Auth::user()->id;

        if( $user_type == 'W' ){

            $rows = ArticleIssue::join('articles', 'articles.id', 'article_issues.article_id')
                                ->select('article_issues.*')
                                ->where('articles.writer_id', $user_id)
                                ->where('article_issues.status', 1)
                                ->orderBy('article_issues.id', 'desc')
                                ->get();

            $approve = Article::join('users', 'users.id', 'articles.writer_id')
                                ->select('articles.*')
                                ->where('users.id', $user_id)
                                ->where('articles.review_status', '2')
                                ->get();
            $pending = Article::join('users', 'users.id', 'articles.writer_id')
                                ->select('articles.*')
                                ->where('users.id', $user_id)
                                ->where('articles.review_status', '1')
                                ->get();
            $issue = ArticleIssue::join('articles', 'articles.id', 'article_issues.article_id')
                                ->select('article_issues.*')
                                ->where('articles.writer_id', $user_id)
                                ->where('article_issues.status', 1)
                                ->get();
            $comment = Comment::join('articles', 'articles.id', 'comments.article_id')
                                ->join('users', 'users.id', 'articles.writer_id')
                                ->select('comments.*')
                                ->where('users.id', $user_id)
                                ->where('comments.status', 1)
                                ->get();
            $users = '';

        }
        else{

            $rows = Article::where('review_status', 1)
                            ->orderBy('updated_at', 'desc')
                            ->get();

            $approve = Article::where('review_status', '2')->get();
            $pending = Article::where('review_status', '1')->get();
            $issue = '';
            $comment = Comment::all();
            $users = User::where('user_type', 'W')->get();

        }

        return view('admin.index', compact('title', 'url', 'rows', 'approve', 'pending', 'issue', 'comment', 'users'));
    }
}
