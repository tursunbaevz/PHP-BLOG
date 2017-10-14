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

//-------------------------Articles------------------------------

Route::get('/', 'ArticlesController@getArticles');

Route::get('/articles/{id}', function ($id) {
	$article = DB::table('articles')->find($id);
    return view('article_show', compact('article'));
});



Route::get('/article_form', function () {
    return view('article_form');
});




Route::post('/form/submit', 'ArticlesController@submit');


//-------------------------------------------------------------






