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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::post('profile/edit', 'Admin\ProfileController@update');
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
