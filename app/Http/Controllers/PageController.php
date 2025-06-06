<?php

namespace App\Http\Controllers;

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
use App\EmailSubscriber;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function news()
    {
        $newss = News::orderBy('id', 'desc')->get();
        return view('pages.all_news', compact('newss'));
    }
    public function news_details($id)
    {
        $news = News::findOrFail($id);
        return view('pages.news_details', compact('news'));
    }

    public function article()
    {
        // Fetch articles, volumes, and journal details, grouping them by journal title
        $articles = DB::table('articles')
            ->join('volume', 'articles.volume_id', '=', 'volume.id')
            ->join('journal_articals', 'volume.journal_id', '=', 'journal_articals.id')
            ->select(
                'articles.id',
                'articles.doi',
                'articles.title as article_title',
                'articles.description',
                'journal_articals.id as journal_idd',

                'journal_articals.title as journal_title',
                'volume.id as volume_id',
                'articles.online_first',
                'articles.author_name',
                'articles.file_path',
                'articles.article_html',
                'articles.paper_id'
            ) // Select necessary columns
            ->orderByRaw("FIELD(journal_articals.id, 9, 13, 12, 11, 10, 6, 5, 4, 3, 2, 14,15)")
            ->get()
            ->groupBy('journal_title'); // Group articles by journal title

        return view('pages.all_article', compact('articles'));
    }


    public function article_details($id)
    {
        $articles = Article::findOrFail($id);
        return view('pages.article_details', compact('articles'));
    }
    public function papers()
    {
        return view('books');
    }

    public function blogs()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('pages.all_blogs', compact('blogs'));
    }
    public function blog_details($id)
    {
        $all_blogs = Blog::orderBy('id', 'desc')->limit(10)->get();
        $blogs = Blog::findOrFail($id);
        return view('pages.blog_details', compact('blogs', 'all_blogs'));
    }

    public function current_issue($id)
    {
        // Find the journal by ID
        $journal = Journal::findOrFail($id);

        // Fetch the volume list by joining with the journal_articles table
        $volume_list = DB::table('volume')
            ->join('journal_articals as ja', 'volume.journal_id', '=', 'ja.id')
            ->where('ja.id', $id) // Filter volumes based on journal ID
            ->select('volume.*') // Select all volume fields or specific ones if needed
            ->distinct() // Avoid duplicates if necessary
            ->get();


        return view('pages.current_issue', compact('journal', 'volume_list'));
    }

    public function current_issue_list($id, $volumeId)
    {
        $journal = Journal::findOrFail($id);

        $volume_list_issue = DB::table('volume as v')
            ->join('articles as a', 'a.volume_id', '=', 'v.id')
            ->join('journal_articals as ja', 'v.journal_id', '=', 'ja.id')
            ->where('ja.id', $id)
            ->where('v.id', $volumeId)
            ->select('v.*', 'a.file_path as pdf_file', 'a.title as articles_title', 'a.article_html', 'a.id as issu_no', 'a.author_name as author', 'a.submited_date as date', 'a.online_first as online', 'a.paper_id as paper', 'a.doi')
            ->get();

        return view('pages.current_issue_list', compact('journal', 'volume_list_issue'));
    }




    public function single_issue($id, $volumeId, $issueId)
    {
        // Fetch the journal details
        $journal = Journal::findOrFail($id);

        // Fetch the specific issue details
        $issuDetails = DB::table('articles')->where('id', $issueId)->first();

        // Fetch related issues from the same volume
        $relatedIssues = DB::table('articles')
            ->where('volume_id', $volumeId)
            ->where('id', '!=', $issueId)
            ->select('id', 'title', 'doi', 'created_at')
            ->limit(3)
            ->get();

        // Fetch authors and affiliations
        $authors = DB::table('author_affiliation')
            ->where('article_id', $issueId)
            ->get();

        // Group affiliations by department and university and assign consistent numbers
        $affiliations = $authors->unique(function ($item) {
            return $item->department . $item->university;
        })->values();

        // Map authors with their affiliation numbers
        $authorsWithAffiliation = $authors->map(function ($author) use ($affiliations) {
            $affiliationIndex = $affiliations->search(function ($aff) use ($author) {
                return $aff->department === $author->department &&
                    $aff->university === $author->university;
            });

            $author->affiliation_number = $affiliationIndex + 1;
            return $author;
        });

        // Check if the IP already exists for the article (prevent multiple counts per user)
        $existingView = DB::table('view_download')
            ->where('article_id', $issueId)
            ->where('ip_address', request()->ip())
            ->first();

        if (!$existingView) {
            // If the IP is new, increment the view count
            DB::table('view_download')->insert([
                'article_id' => $issueId,
                'ip_address' => request()->ip(),
                'viewers' => 1, // First view for this IP
                'downloads' => 0, // Default downloads count
                'cite' => 0, // Default citation count
            ]);
        } else {
            // If the IP already exists, just increment the view count
            DB::table('view_download')
                ->where('article_id', $issueId)
                ->where('ip_address', request()->ip())
                ->increment('viewers');
        }

        // Fetch the total view count for the article
        $viewCount = DB::table('view_download')
            ->where('article_id', $issueId)
            ->sum('viewers'); // Sum all viewers to get total views

        // Fetch the total downloads count for the article
        $downloadCount = DB::table('view_download')
            ->where('article_id', $issueId)
            ->sum('downloads');

        return view('pages.singleIssue', compact('journal', 'issuDetails', 'relatedIssues', 'volumeId', 'authorsWithAffiliation', 'affiliations', 'viewCount', 'downloadCount'));
    }


    public function article_issue($id, $volumeId, $issueId)
    {
        // Fetch the journal details
        $journal = Journal::findOrFail($id);
        // Fetch the specific issue details
        $issuDetails = DB::table('articles')->where('id', $issueId)->first();
        // $article_htmls = DB::table('article_htmls')->where('title_id', $issueId)->first();
        $article_htmls = DB::table('article_htmls')->where('title_id', $issueId)->first();
        // dd($article_htmls);
        // Fetch related issues from the same volume
        $relatedIssues = DB::table('articles')
            ->where('volume_id', $volumeId)
            ->where('id', '!=', $issueId)
            ->select('id', 'title', 'doi', 'created_at')
            ->limit(3)
            ->get();
        // Fetch authors and affiliations
        $authors = DB::table('author_affiliation')
            ->where('article_id', $issueId)
            ->get();
        // Group affiliations by department and university and assign consistent numbers
        $affiliations = $authors->unique(function ($item) {
            return $item->department . $item->university;
        })->values();

        // Map authors with their affiliation numbers
        $authorsWithAffiliation = $authors->map(function ($author) use ($affiliations) {
            $affiliationIndex = $affiliations->search(function ($aff) use ($author) {
                return $aff->department === $author->department &&
                    $aff->university === $author->university;
            });
            $author->affiliation_number = $affiliationIndex + 1;
            return $author;
        });
        // Check if the IP already exists for the article (prevent multiple counts per user)
        $existingView = DB::table('view_download')
            ->where('article_id', $issueId)
            ->where('ip_address', request()->ip())
            ->first();

        if (!$existingView) {
            // If the IP is new, increment the view count
            DB::table('view_download')->insert([
                'article_id' => $issueId,
                'ip_address' => request()->ip(),
                'viewers' => 1, // First view for this IP
                'downloads' => 0, // Default downloads count
                'cite' => 0, // Default citation count
            ]);
        } else {
            // If the IP already exists, just increment the view count
            DB::table('view_download')
                ->where('article_id', $issueId)
                ->where('ip_address', request()->ip())
                ->increment('viewers');
        }

        // Fetch the total view count for the article
        $viewCount = DB::table('view_download')
            ->where('article_id', $issueId)
            ->sum('viewers'); // Sum all viewers to get total views

        // Fetch the total downloads count for the article
        $downloadCount = DB::table('view_download')
            ->where('article_id', $issueId)
            ->sum('downloads');

        return view('pages.articleHtmlView', compact('journal', 'issuDetails', 'relatedIssues', 'volumeId', 'authorsWithAffiliation', 'affiliations', 'viewCount', 'downloadCount', 'article_htmls'));
    }




    public function article_press($id)
    {
        $journal = Journal::FindorFail($id);
        return view('pages.article_in_press', compact('journal'));
    }
    public function special_issue($id)
    {
        $journal = Journal::FindorFail($id);
        return view('pages.special_issues', compact('journal'));
    }
    public function all_issue($id)
    {
        $journal = Journal::FindorFail($id);
        $volume_list = DB::table('volume')
            ->join('journal_articals as ja', 'volume.journal_id', '=', 'ja.id')
            ->where('ja.id', $id) // Filter volumes based on journal ID
            ->select('volume.*') // Select all volume fields or specific ones if needed
            ->distinct() // Avoid duplicates if necessary
            ->get();
        return view('pages.all_issue', compact('journal', 'volume_list'));
    }
    public function best_paper_awards($id)
    {
        $journal = Journal::FindorFail($id);
        return view('pages.best_paper_awards', compact('journal'));
    }

    public function journal_overview($id)
    {
        $journal = Journal::FindorFail($id);
        return view('pages.journal_overview', compact('journal'));
    }
    public function language_editing_service($id)
    {
        $journal = Journal::FindorFail($id);
        return view('pages.language_editing_service', compact('journal'));
    }

    public function call_for_papers($id)
    {
        $journal = Journal::FindorFail($id);
        return view('pages.call_for_papers', compact('journal'));
    }

    public function guide_for_aurthors($id)
    {
        $journal = Journal::FindorFail($id);

        return view('pages.guide_for_authors', compact('journal'));
    }

    public function subscriber(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Store the email in the database
        $emailScriber = new EmailSubscriber();
        $emailScriber->email = $request->email;
        $emailScriber->save();

        return redirect()->back();
    }
}
