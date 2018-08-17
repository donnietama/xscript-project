<?php

namespace App\Http\Controllers;

use App\Admin\Article;
use App\Admin\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles   = Article::orderBy('id', 'desc')->with('categories')->get();
        $categories = Category::all();

        return view('home', compact('articles', 'categories'));
    }
}
