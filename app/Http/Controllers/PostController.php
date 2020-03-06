<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::latest()->paginate(5);

    	return view('admin.discussion_board.index', compact('posts'));
        //return view('admin.discussion_board.index', compact('posts'));
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

    public function show(Post $post)
    {
        $postComments = Comment::where('comment_post_id',$post->id)->latest()->paginate(3);

        return view('admin.discussion_board.show', compact('post','postComments'));
    }

    public function showAll()
    {
        $posts = Post::latest()->paginate(5);

        return view('admin.discussion_board.index', compact('posts','postComments'));
    }

    public function showLoan()
    {
        $posts = Post::where('post_category','loan')->latest()->paginate(8);

        return view('admin.discussion_board.index', compact('posts'));
        //return response()->json($posts);
    }

}
