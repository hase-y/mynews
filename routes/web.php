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
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth');
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth'); // 追記
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth'); // 追記

});
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
    Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth');
    Route::get('profile', 'Admin\ProfileController@index')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    Route::get('profile/delete', 'Admin\NewsController@delete')->middleware('auth');
//Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    //Route::get('news/create', 'Admin\NewsController@add');//->middleware('auth');
    //Route::get('profile/create', 'Admin\ProfileController@add');//->middleware('auth');
    //Route::get('profile/edit', 'Admin\ProfileController@edit');//->middleware('auth');
    //Route::post('news/create','Admin\NewsController@create');
});

//view(‘admin.news.create’);
//admin/newsディレクトリ配下
//のcreate.blade.php

//view('admin.profile.create');
//admin/profileディレクトリ配下の
//create.blade.php

//view('admin.profile.edit');
//admin/profileディレクトリ配下の
//edit.blade.php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'NewsController@index');
Route::get('/profile', 'ProfileController@index');