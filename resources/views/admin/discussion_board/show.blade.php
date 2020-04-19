@extends('layouts.admin_layout')

@section('content')
<div class="main-content">
        <a type="button" href="/discussionBoard" class="btn btn-success btn-fill" style="margin-bottom: 4px;">
          <i class="pe-7s-left-arrow" style="font-size: 1em;"></i>  Back
        </a>
           @if(session()->has('status'))

            <script>
             let promise = new Promise(function(resolve, reject){
                setTimeout(() => resolve('{{ session()->get('status') }}'), 1000);
             });

             promise.then(
                result => showNotification('top','right','{{ session()->get('status') }}'),
                error => alert("There was an error")
              );
           </script>

          @endif

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-10">
                    <div class="card">
                      <div class="jumbotronEditProfileUser">
                          <h1 class="text-center">{{ Str::limit($post->post_title, 45) }}</h1>
                      </div>
                      <div class="content">
                          <h4> <img src="{{ $post->user->profile->profileImage() }}" alt="Avatar" style="width:8%; border-radius: 50%;"> &nbsp; Posted: <span>{{ date('j F, Y', strtotime($post->created_at)) }}</span> at <span> {{ date('h:i:s A', strtotime($post->created_at)) }} </span> </h4>

                          <div style="font-size: 1.8em;">{{ $post->post_content }}</div>

                      </div>
                    </div>

                    <hr class="hr-text" data-content="Comments">

                    @if(count($postComments) > 0)

                    @foreach($postComments as $postComment)
                    <div class="card">
                      <div class="content">
                          <div> <img src="{{ $postComment->user->profile->profileImage() }}" alt="Avatar" style="width:6%; border-radius: 50%;"> &nbsp; Posted: <span>{{ date('j F, Y', strtotime($postComment->created_at)) }}</span> at <span> {{ date('h:i:s A', strtotime($postComment->created_at)) }} </span> </div>

                          <div style="font-size: 1.4em;">
                            {{ $postComment->comment_content }}
                          </div>

                      </div>
                    </div>
                    @endforeach

                     <div class="row">
                        <div class="col-12 text-center">
                            {{ $postComments->links() }}   <!-- This links is used whenever we use pagination-->
                        </div>
                     </div>

                    @else

                      <h1 class="text-center">There is no comment for this post.</h1>

                    @endif

                    <hr class="hr-text" data-content="Add Comments">

                    <form action="/comment/{{ $post->id }}" enctype="multipart/form-data" method="post">
                      @csrf
                      @method('PATCH')  <!-- This converts the method to Patch method -->

                      <div class="row purpleText">
                          <div class="col-md-12">

                              <div class="form-group {{ $errors->has('comment_content') ? 'has-error' : '' }}">
                                  <h2>Post Comment</h2>
                                  <textarea id="commentContent" type="text" rows="8" name="comment_content" class="form-control" placeholder="Comment Content" value="" cols="50" rows="4"> </textarea>

                                  @if ($errors->has('comment_content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $errors->first('comment_content') }}</strong>
                                        </span>
                                  @endif
                              </div>
                          </div>
                      </div>

                      <button class="btn btn-success btn-fill pull-right">Add Comment</button>
                       <div class="clearfix"></div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
