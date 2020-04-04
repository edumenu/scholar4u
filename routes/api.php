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
//Single Post
Route::get('post/{id}','PostApiController@show');
//Store Post
Route::post('post','PostApiController@store');
//Scholarship Posts
Route::delete('post/{id}','PostApiController@destroy');
//Other Posts
//Route::get('posts/others','PostController@showOthers');
//Delete Post
//Route::delete('post','PostController@deletePost');

