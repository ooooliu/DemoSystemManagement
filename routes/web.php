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
    //return view('welcome');
    return view('login');
});

Route::prefix('page')->group(function () {
    Route::any('/', 'News\NewsController@index');
    Route::any('main', 'News\NewsController@main');

    Route::prefix('news')->group(function () {
        Route::any('newsAdd', 'News\NewsController@newsAdd');
        Route::any('newsList', 'News\NewsController@newsList');
    });

});

