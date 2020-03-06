<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DB;

class CommentController extends Controller
{
     public function __construct()
     {
      $this->middleware('auth');
     }

	 public function store(Post $post){
    	
    	$data = request()->validate([
    		'comment_content' => 'required',
    	]);

    	$data['comment_post_id'] = $post->id;
    	$data['comment_author'] = auth()->user()->name;

    	auth()->user()->comments()->create($data);  //Save data into the database

    	DB::table('posts')->where('id',$post->id)->increment('post_comment_count');

        session()->flash('status','Your comment was successfully uploaded!');

    	return redirect("/discussionBoard/$post->id");

    }
}
