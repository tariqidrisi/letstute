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

// frontend
Route::get('/allCourses', 'CourseController@allCourses')->name('listCourses');
Route::get('/category/{category_id}', 'CourseController@filterCategory')->name('filterCategory');
Route::get('/class/{class_id}', 'CourseController@filterClass')->name('filterClass');
Route::post('/filter', 'CourseController@filter')->name('filter');
Route::get('/product-detail/{id}', 'CourseController@courseDetail')->name('courseDetail');


// admin 
Route::get('/dashboard', "AdminHomeController@index")->name('dashboard');
Route::get('/courses', "AdminHomeController@courses")->name("courses");
Route::get('/add-listing', "AdminHomeController@addListing")->name("addListing");
Route::get('/messages', "AdminHomeController@messages")->name("messages");
Route::get('/reviews', "AdminHomeController@reviews")->name("reviews");
Route::get('/bookmarks', "AdminHomeController@bookmarks")->name("bookmarks");
Route::get('/user-profile', "AdminHomeController@userProfile")->name("userProfile");
Route::get('/teacher-profile', "AdminHomeController@teacherProfile")->name("teacherProfile");
Route::get('/charts', "AdminHomeController@charts")->name("charts");
Route::get('/tables', "AdminHomeController@tables")->name("tables");

// resource controller
Route::resource('/category', 'CategoryController');
Route::resource('/class', 'ClassController');
Route::resource('/course', 'CourseController');

// admin login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
