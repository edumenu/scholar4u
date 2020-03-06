@extends('layouts.admin_layout')

@section('content')
<div class="main-content">
        <a type="button" href="/discussionBoard" class="btn btn-success btn-fill btn-lg" style="margin-bottom: 4px;">
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
                              <h1 class="text-center">Add Post</h1>
                          </div>
                        <div class="content purpleText">
                            <form action="/discussionBoard" enctype="multipart/form-data" method="post">
                              @csrf
                              @method('PATCH')  <!-- This converts the method to Patch method -->
                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group {{ $errors->has('post_title') ? 'has-error' : '' }}">
                                          <h3>Post Title</h3>
                                          <input id="postTitle" type="text" name="post_title" class="form-control" placeholder="Post Title" value=""></br>

                                          @if ($errors->has('post_title'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $errors->first('post_title') }}</strong>
                                                </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('post_category') ? 'has-error' : '' }}">
                                        <h3>Category</h3>
                                        <select id="gender" data-title="Select Category" name="post_category" class="selectpicker" data-style="btn-purple btn-fill btn-block" data-menu-style="dropdown-purple" value="Male">
                                          <option value="scholarship">Scholarship</option>
                                          <option value="loan">Loan</option>
                                          <option value="other">Other</option>
                                        </select></br>
                                        @if ($errors->has('post_category'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong class="text-danger">{{ $errors->first('post_category') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                  </div>

                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group {{ $errors->has('post_content') ? 'has-error' : '' }}">
                                          <h3>Post Content</h3>
                                          <textarea id="postContent" type="text" rows="8" name="post_content" class="form-control" placeholder="Post Content" value="" cols="50"> </textarea>

                                          @if ($errors->has('post_content'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $errors->first('post_content') }}</strong>
                                                </span>
                                          @endif
                                      </div>
                                  </div>
                              </div>

                                <button class="btn btn-success btn-fill pull-right">Add Post</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
