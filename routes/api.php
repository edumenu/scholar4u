<?php
use App\Post;
use Illuminate\Http\Request;
use App\Http\Resources\Post as PostResource;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List of all Posts
Route::get('posts','PostApiController@index')->name('post.index');
//Loan Posts
Route::get('posts/loans','PostApiController@loans');
//Loan Posts
Route::get('posts/scholarships','PostApiController@scholarships');
//Loan Posts
Route::get('posts/others','PostApiController@others');
//Search Post
Route::get('posts/search/{data}','PostApiController@searchPost');
//Store Post
Route::post('post','PostApiController@store');
//Scholarship Posts
Route::delete('post/{id}','PostApiController@destroy');
//Create a new event
Route::post('calendar','CalendarApiController@store')->name('calendar.store');
//List of all events
Route::get('calendar/{id}','CalendarApiController@index')->name('calendar.index');
//Delete an event
Route::delete('calendar/{id}','CalendarApiController@destroy')->name('calendar.destroy');


