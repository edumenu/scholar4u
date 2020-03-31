<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Resources\Post as PostResource;
use Illuminate\Database\Eloquent\Collection;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all posts
        $posts = Post::latest()->paginate(10);

        //Return collection of all posts
        return PostResource::collection($posts);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create nee post
        $post = new Post;

        $post->post_title = $request->input('post_title');
        $post->user_id = $request->input('user_id');
        $post->post_content = $request->input('post_content');
        $post->post_category = $request->input('post_category');
        $post->post_comment_count = 0;
        $post->post_view_count = 0;
        $post->post_likes = 0;
        $post->post_dislikes = 0;

        //Save post
        if($post->save()) {
            return new PostResource($post);
            session()->flash('status','Your post has been submitted successfully!');
        }else{
            return session()->flash('failStatus','Adding a post failed! Try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get one post
        $post = Post::findOrFail($id);

        //Return one post
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    //

    //}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get post
        $post = Post::findOrFail($id);

        if($post->delete()) {
            //Delete post with id
            return new PostResource($post);
        }
    }

    public function loans()
    {
        //Get one post
        $post = Post::where('post_category','loan')->orderBy('created_at')->get();

        //Return posts
        return new PostResource($post);
    }

    public function scholarships()
    {
        //Get posts with scholarship
        $post = Post::where('post_category','scholarships')->orderBy('created_at')->get();

        //Return one post
        return new PostResource($post);
    }

    public function others()
    {
        //Get posts with other
        $post = Post::where('post_category','other')->orderBy('created_at')->get();

        //Return one post
        return new PostResource($post);
    }
}
