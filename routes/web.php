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


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminFrontPage', 'AdminController@index')->name('adminFrontPage.show');
Route::get('/scholarshipTable', 'AdminController@scholarshipTable')->name('scholarshipTable.show');

Route::get('/calendar', 'CalendarController@index')->name('calendar.show');

Route::get('/profile', 'ProfileController@index')->name('profile.show');

Route::get('/about', function(){
  return view('about');
});

Route::get('/contact', function(){
  return view('contact');
});
