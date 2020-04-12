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

    public function index(User $user)
    {
        //Return collection of posts;
    	return view('admin.discussion_board.index', compact('user'));
    }

    public function show(Post $post)
    {
        // Finding all comments for post
        $postComments = Comment::where('comment_post_id',$post->id)->latest()->paginate(3);

        //Return collection of posts;
        return view('admin.discussion_board.show', compact('post', 'postComments'));
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

        // Obtaining the user ID
        $tempImage = auth()->user()->profile->image;

        $data['post_user_picture'] = $tempImage;

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
