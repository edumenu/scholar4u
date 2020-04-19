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


Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adminFrontPage', 'AdminController@index')->name('adminFrontPage.show')->middleware('verified');

Route::get('/scholarshipTable', 'ScholarshipTableController@index')->name('scholarshipTable.index');

Route::get('/calendar', 'CalendarController@index')->name('calendar.show');

Route::get('/messages', 'MessageController@index')->name('message.index');

Route::get('/discussionBoard', 'PostController@index')->name('post.index');
Route::get('/discussionBoard/create', 'PostController@create')->name('post.create');
//Route::get('/discussionBoard/loan', 'PostController@showLoan')->name('post.showLoan');
//Route::get('/discussionBoard/all', 'PostController@showAll')->name('post.showAll');
Route::patch('/discussionBoard', 'PostController@store')->name('post.store');
Route::get('/discussionBoard/{post}', 'PostController@show')->name('post.show');

Route::patch('/comment/{post}', 'CommentController@store')->name('comment.store');

Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');

Route::get('/user/{user}/edit', 'UserController@edit')->name('user.edit');
Route::patch('/user/{user}', 'UserController@update')->name('user.update');

Route::get('/about', function(){
  return view('about');
});

Route::get('/contact', function(){
  return view('contact');
});
