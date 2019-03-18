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

Route::get('/language/{locale}', function () {
    return redirect()->back();
});

Route::get('/', 'WelcomeController@index');
Route::post('/form', 'WelcomeController@form');

Route::get('/about', 'WelcomeController@about');
Route::get('/portfolio', 'WelcomeController@portfolio');
Route::get('/contact', 'WelcomeController@contact');

//Route::get('/blog', 'WelcomeController@blog');
//Route::get('/post', 'WelcomeController@post');
//Route::get('/courses', 'WelcomeController@courses');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
