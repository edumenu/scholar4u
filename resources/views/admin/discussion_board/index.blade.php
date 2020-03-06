@extends('layouts.admin_layout')

@section('content')
<div id="app">
<div class="main-content">

     <div class="container-fluid">

             <div class="col-sm-2">
               <h1>Search</h1>
                          
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-search"></i></span>
                          <input type="text" value="" class="form-control" placeholder="Search...">
                      </div>

             </div>

             <div class="col-md-10">

                  <h1>Category</h1>

                  <div class="row">

                    <div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 5px;">
                      <button type="button" class="btn btn-neutral btn-fill" >All</button>
                      <button type="button" class="btn btn-info btn-fill">Scholarship</button>
                      <button type="button" class="btn btn-danger btn-fill">Loan</button>
                      <button type="button" class="btn btn-warning btn-fill" >Other</button>
                    </div>

                    <a href="discussionBoard/create" class="btn btn-primary btn-fill" style="float: right;">Add Post <i class="fa fa-plus"></i></a>
                  </div>

                  @if ($posts->count() > 0)

                    @foreach($posts as $post)

                      <div class="dicussionCard {{ $post->post_category == 'loan' ? 'loanCardBorder' : '' }} {{ $post->post_category == 'other' ? 'otherCardBorder' : '' }}  {{ $post->post_category == 'scholarship' ? 'scholarshipCardBorder' : '' }}">
                        <div class="dicussionCardHeader"> 
                          <img src="{{ $post->user->profile->profileImage() }}" alt="Avatar" style="width:40px; border-radius: 50%;"> 
                           {{ $post->user->name }}
                        </div>

                          <div class="container" style="padding-bottom: 10px;">
                            
                          <div class="dicussionCardTitle" style="margin-bottom: 3%;"> <a href="/discussionBoard/{{ $post->id  }}"> {{ $post->post_title }} </a> </div>

                          <div class="col-md-10" style="color: grey;">
                           <a href="/discussionBoard/{{ $post->id  }}" class="btn btn-success btn-fill">Comment</a> &nbsp; Comments: <span> {{ $post->post_comment_count }} </span> &nbsp; Posted: <span>{{ date('m/d/Y', strtotime($post->created_at)) }}</span>
                          </div>
                        </div>
                      </div>

                    @endforeach

                    <div class="row">
                        <div class="col-12 text-center">
                            {{ $posts->links() }}   <!-- This links is used whenever we use pagination-->
                        </div>
                     </div>

                  @else

                   <h1 class="text-center">There are no posts yet.</h1>

                  @endif
    
             </div>

     </div>
 </div>
</div>
 <!-- Vue app -->
  <script src="{{ asset('js/app.js') }}" defer></script>
@endsection