<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories      = Category::paginate(25);
        $categoriesCount = Category::count();
        return $categories;
        return view('admin.categories.index', compact('categories', 'categoriesCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'name' => 'string|required|max:255',
            'desc' => 'string|nullable|max:300',
        ]);

        if ($validator->fails()) {
            return response()->json($validator);
        }

        $categories = Category::create($request->all());
        return $categories;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categories = Category::findOrFail($category);
        return view('admin.categories.show', compact($categories));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::findOrFail($category);
        return view('admin.categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        /**
         * NOTE PENTING:
         * 
         * Udah gue ingetin ya barusan, scroll keatas baca komen.
         * Jangan males!
         * 
         */
        $categories = Category::findOrFail($Category);

        $validator = Validator::make($request->all(), [
            'name' => 'string|required|max:191',
            'desc' => 'string|required|max:300',
        ]);

        if ($validator->fails()) {
            return response()->json($validator);
        }

        $categories->save($request->all());
        return $categories;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $categories = Category::findOrFail($article);
        $categories->destroy();
    }
}
