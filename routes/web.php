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
	if (Auth::user()) {
		return view('feed/feed');
	} else {
		return view('index');
	}
    
});

Route::resource('/posts', 'PostControl');
Route::resource('/propicsamma', 'ProPicControl');
Route::resource('/feed', 'FeedControl@index');
Route::resource('/profile', 'ProfilePagesControl');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/allusers', 'AllUsersControl@DoTheThings');

