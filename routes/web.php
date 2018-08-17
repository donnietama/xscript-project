<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome-page');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Administrators Routes
|--------------------------------------------------------------------------
|
| Disini adalah tempat berkumpulnya para mantan yang indah (pada masanya) dan segala
| organisme - organisme kecil yang mengarahkan kalian ke kegagalan dunia akhirat. :P
|
| Becanda... Disini tempat ngumpulin route buat admin.
|
| documentation: https://laravel.com/docs/5.6/routing;
|
*/
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');

    Route::group(['prefix' => 'users'], function () {
        
        Route::get('/', 'Admin\UserController@index')->name('admin.users.index');
        Route::get('/{user}', 'Admin\UserController@show');
        Route::delete('/{user}', 'Admin\UserController@delete');
        
    });

    Route::group(['prefix' => 'articles'], function () {

        Route::get('/', 'Admin\ArticleController@index')->name('admin.articles.index');
        Route::post('/', 'Admin\ArticleController@store')->name('admin.articles.store');
        Route::get('/create', 'Admin\ArticleController@create')->name('admin.articles.create');
        Route::get('/{article}', 'Admin\ArticleController@show');
        Route::get('/{article}/edit', 'Admin\ArticleController@edit');
        Route::patch('/{article}', 'Admin\ArticleController@update');
        Route::delete('/{article}', 'Admin\ArticleController@destroy');

    });

    Route::group(['prefix' => 'categories'], function () {

        Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
        Route::post('/', 'Admin\CategoryController@store');
        Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
        Route::get('/{category}', 'Admin\CategoryController@show');
        Route::get('/{category}/edit', 'Admin\CategoryController@edit');
        Route::patch('/{category}', 'Admin\CategoryController@update');
        Route::delete('/{category}', 'Admin\CategoryController@destroy');

    });
});