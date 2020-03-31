<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Resources\Post as PostResource;

class PostController extends Controller
{
	public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        //Return collection of posts;
    	return view('admin.discussion_board.index');
    }

    public function create(){
    	return view('admin.discussion_board.create');
    }

    public function store(){

    	$data = request()->validate([
    		'post_title' => 'required',
    		'post_content' => 'required',
            'post_category' => 'nullable'
    	]);

    	auth()->user()->posts()->create($data);

        session()->flash('status','Your post has been submitted successfully!');

    	return redirect('/discussionBoard');

    }

    public function delete()
    {
        $posts = Post::where('post_category','loan')->latest()->paginate(8);

        return view('admin.discussion_board.index', compact('posts'));
        //return response()->json($posts);
    }

}
