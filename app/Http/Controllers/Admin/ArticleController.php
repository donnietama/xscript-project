<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Article;
use App\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles       = Article::with('categories')->paginate(25);
        $articleCounts  = Article::count();
        return view('admin.articles.index', compact('articles', 'articleCounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * NOTE PENTING:
         * Sebelum nambahin validasi atau field baru, jangan lupa
         * tambahin ke list $fillable di \App\Admin\Category.
         * 
         * Kalo ga ditambahin data ga bakalan bisa masuk!
         * 
         * documentation: https://laravel.com/docs/5.6/eloquent#mass-assignment;
         * 
         */
        $validator = Validator::make($request->all(), [
            'title'     => 'string|required|max:191',
            'excerpt'   => 'string|required|max:300',
            'content'   => 'string|required',
            'category'  => 'numeric|required',
            'published' => 'boolean|required',
            'keywords'  => 'string|required',
            'meta_desc' => 'string|required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator);
        }

        $articles = Article::create($request->all());
        return $articles;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $articles = Article::with('categories')->findOrFail($article->id);
        return view('admin.articles.show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $article      = Article::with('categories')->findOrFail($article->id);
        $listCategory = Category::all();
        return view('admin.articles.edit', compact('article', 'listCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        /**
         * NOTE PENTING:
         * 
         * Udah gue ingetin ya barusan, scroll keatas baca komen.
         * Jangan males!
         * 
         */
        $articles = Article::findOrFail($article->id);

        $validator = Validator::make($request->all(), [
            'title'     => 'string|required|max:191',
            'excerpt'   => 'string|required|max:300',
            'content'   => 'string|required',
            'category'  => 'numeric|required',
            'status' => 'boolean|required',
            'keywords'  => 'string|required',
            'meta_desc' => 'string|required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $articles->fill($request->all())->save();
        return redirect('/admin/articles/'.$article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $articles = Article::findOrFail($article);
        $articles->destroy();
    }
}
