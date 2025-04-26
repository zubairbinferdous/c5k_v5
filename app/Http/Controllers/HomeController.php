<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Journal;
use App\Editorial;
use App\ArticleCategory;
use Carbon\Carbon;
use App\Article;
use App\Banner;
use App\BlogBanner;
use App\Blog;
use App\News;
use App\Setting;
use DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Article Categories
        // $article_categories = ArticleCategory::where('home_flag', '1')
        //                                     ->where('status', '1')
        //                                     ->orderBy('title', 'asc')
        //                                     ->get();

        // // Articles                                
        // $articles = Article::where('status', '1')
        //                     ->where('review_status', '2')
        //                     ->where('start_date', '<=', $this->today)
        //                     ->orderBy('start_date', 'desc')
        //                     ->orderBy('id', 'desc')
        //                     ->paginate(5);

        // // Grid Articles                                
        // $grid_articles = Article::join('article_categories', 'article_categories.id', 'articles.category_id')
        //                     ->select('articles.*')
        //                     ->where('article_categories.home_flag', '1')
        //                     ->where('article_categories.status', '1')
        //                     ->where('articles.status', '1')
        //                     ->where('articles.review_status', '2')
        //                     ->where('articles.start_date', '<=', $this->today)
        //                     ->orderBy('articles.start_date', 'desc')
        //                     ->orderBy('articles.id', 'desc')
        //                     ->take(12)
        //                     ->get();


        // return view('index', compact('article_categories', 'articles', 'grid_articles'));


        $rows = Setting::all();
        $banners = Banner::latest()->get();
        $journals = Journal::latest()->get();
        $blogbanners = BlogBanner::latest()->take(3)->get();
        $blogs = Blog::orderBy('id', 'desc')->take(4)->get();
        $news = News::orderBy('id', 'desc')->take(3)->get();
        $articles = DB::table('articles')->orderBy('id', 'desc')->take(4)->get();
        $journalsSLider = DB::table('journal_articals')->orderBy('id', 'desc')->take(12)->get();
        $articles = DB::table('articles')
            ->join('volume', 'articles.volume_id', '=', 'volume.id')
            ->join('journal_articals', 'volume.journal_id', '=', 'journal_articals.id')
            ->select(
                'articles.id',
                'articles.title as article_title',
                'articles.description',
                'journal_articals.id as journal_id',
                'volume.id as volume_id',
            ) // Select necessary columns

            ->take(4)->get();


        return view('frontEnd', compact('banners', 'blogbanners', 'blogs', 'articles', 'news', 'journals', 'rows', 'journalsSLider'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $journals = Journal::where('title', 'like', "%{$query}%")->get(['id', 'slug', 'title']);
        $articles = Article::where('title', 'like', "%{$query}%")->get(['id', 'title']);
        $news = News::where('title', 'like', "%{$query}%")->get(['id', 'title']);
        $blogs = Blog::where('title', 'like', "%{$query}%")->get(['id', 'title']);

        return response()->json([
            'journals' => $journals,
            'articles' => $articles,
            'news' => $news,
            'blogs' => $blogs,
        ]);
    }
    public function journal($slug, $id)
    {
        $editorials = Editorial::latest()->get();
        $journal = Journal::where('id', $id)->where('slug', $slug)->firstOrFail();
        return view('journal.business_venturing', compact('journal', 'editorials'));
    }
    public function journal_2()
    {
        return view('journal.journal_2');
    }
    public function URL_FOR_JOURNAL_3()
    {
        return view('journal.URL_FOR_JOURNAL_3');
    }
    public function URL_FOR_JOURNAL_4()
    {
        return view('journal.URL_FOR_JOURNAL_4');
    }
    public function URL_FOR_JOURNAL_5()
    {
        return view('journal.URL_FOR_JOURNAL_5');
    }
    public function URL_FOR_JOURNAL_6()
    {
        return view('journal.URL_FOR_JOURNAL_6');
    }
    public function URL_FOR_JOURNAL_7()
    {
        return view('journal.URL_FOR_JOURNAL_7');
    }
    public function URL_FOR_JOURNAL_8()
    {
        return view('journal.URL_FOR_JOURNAL_8');
    }
    public function URL_FOR_JOURNAL_9()
    {
        return view('journal.URL_FOR_JOURNAL_9');
    }
    public function URL_FOR_JOURNAL_10()
    {
        return view('journal.URL_FOR_JOURNAL_10');
    }
    public function dissertation_thesis()
    {
        $journals = Journal::orderByRaw('id = 9 DESC')
            ->latest()
            ->paginate(5); // Paginate with 5 items per page

        $editorials = Editorial::orderByRaw('id = 9 DESC')
            ->latest()
            ->paginate(5); // Paginate with 5 items per page

        return view('all_journal', compact('journals', 'editorials'));
    }

    public function mission()
    {
        return view('mission-vission');
    }
    public function contactSupport()
    {
        return view('contact-support');
    }
    public function books()
    {
        $categories = DB::table('books_category')->get();
        $books = DB::table('book_list')->orderBy('id', 'desc')->limit(10)->get();


        return view('books', compact('categories', 'books'));
    }
    public function conferences()
    {
        return view('conferences');
    }
    public function about()
    {
        return view('about');
    }
    public function thesis()
    {

        $categories = DB::table('thesis_category')->get();

        $books = DB::table('thesis_list')->orderBy('id', 'desc')->limit(10)->get();


        return view('academic_journal', compact('categories', 'books'));
    }
    public function announcements()
    {
        return view('announcements');
    }
    public function desirtation_publish()
    {

        return view('deisrtationPublish');
    }
    public function dissertation_faq()
    {

        return view('dessirtation_faq');
    }
    public function dissertation_promote()
    {

        return view('dissertationPromote');
    }
    public function book_promote()
    {

        return view('bookPromote');
    }
    public function book_faq()
    {

        return view('bookFaq');
    }
    public function book_publish()
    {

        return view('bookPublish');
    }
}
