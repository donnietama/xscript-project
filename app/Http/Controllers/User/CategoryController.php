<?php

namespace App\Http\Controllers\User;

use App\User\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\User\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categories = Category::where('id', $category->id)->with('articles')->first();
        return view('user.categories.show', compact('categories'));
    }

}
