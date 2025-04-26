<?php

namespace App\Http\Controllers\Admin;

use App\ArticleHtml;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class ArticleHtmlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articleHtmls = ArticleHtml::
                leftJoin('articles', 'articles.id', 'article_htmls.title_id')
                ->select('article_htmls.*', 'articles.title')
                ->get();

        return view('admin.article-html.index', compact('articleHtmls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = DB::table('articles')->get();
        $articleHtmls = ArticleHtml::all();
        return view('admin.article-html.create', compact('articles', 'articleHtmls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $articleHtml = new ArticleHtml();

        $articleHtml->title_id       = $request->title_id;
        $articleHtml->blog_article   = $request->blog_article;
        $articleHtml->status         = $request->status;

        if( $request->file('image') ){
            $images = $request->file('image');

            $imageName          = rand(10000, 99999999) . '.' . $images->getClientOriginalExtension();
            $imagePath          = 'public/backend/images/article-html/';
            $images->move($imagePath, $imageName);
            $articleHtml->image        =  $imagePath . $imageName;
        }

        $articleHtml->save();

        return redirect()->route('article-html.index');
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
        $articleHtml = ArticleHtml::findOrFail($id);
        $articles = DB::table('articles')->get();
        return view('admin.article-html.edit', compact('articleHtml', 'articles'));
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
        $articleHtml = ArticleHtml::findOrFail($id);

        $articleHtml->title_id       = $request->title_id;
        $articleHtml->blog_article   = $request->blog_article;
        $articleHtml->status         = $request->status;

        if( $request->file('image') ){
            $images = $request->file('image');

            if( !empty($articleHtml->image) && file_exists($articleHtml->image) ){
                @unlink($articleHtml->image);
            }

            $imageName          = rand(10000, 99999999) . '.' . $images->getClientOriginalExtension();
            $imagePath          = 'public/backend/images/article-html/';
            $images->move($imagePath, $imageName);
            $articleHtml->image        =  $imagePath . $imageName;
        }

        $articleHtml->update();

        return redirect()->route('article-html.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articleHtml = ArticleHtml::findOrFail($id);

        if( !empty($articleHtml->image) ){
            @unlink($articleHtml->image);
        }

        $articleHtml->delete();

        return redirect()->back();
    }
}
