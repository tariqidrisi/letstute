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
    return view('index');
});

Route::resource('category', 'CategoryController');

// admin 
Route::get('/admin', "AdminHomeController@index")->name('admin');
Route::get('/courses', "AdminHomeController@courses")->name("courses");
Route::get('/add-listing', "AdminHomeController@addListing")->name("addListing");
Route::get('/messages', "AdminHomeController@messages")->name("messages");
Route::get('/reviews', "AdminHomeController@reviews")->name("reviews");
Route::get('/bookmarks', "AdminHomeController@bookmarks")->name("bookmarks");
Route::get('/user-profile', "AdminHomeController@userProfile")->name("userProfile");
Route::get('/teacher-profile', "AdminHomeController@teacherProfile")->name("teacherProfile");
Route::get('/charts', "AdminHomeController@charts")->name("charts");
Route::get('/tables', "AdminHomeController@tables")->name("tables");
