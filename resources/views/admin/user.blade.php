@extends('layouts.admin_layout')

@section('content')
<div class="main-content">
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
                              <h1 class="text-center">Edit User</h1>
                          </div>
                        <div class="content purpleText">
                            <form action="/user/{{ $user->id }}" enctype="multipart/form-data" method="post">
                              @csrf
                              @method('PATCH')  <!-- This converts the method to Patch method -->

                              <img src="/storage/{{ $user->profile->image }}" class="imageSize" alt="profile image">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <h3>Name</h3>
                                            <input id="userName" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') ?? $user->name }}"></br>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                          <h3>Email</h3>
                                          <input id="userEmail" type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') ?? $user->email }}"></br>

                                          @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                                </span>
                                          @endif
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                        <h3>Password</h3>
                                        <input id="password" placeholder="Password" type="password" class="form-control" name="password" autocomplete="password" value="">

                                        @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                                </span>
                                          @endif
                                    </div>

                                    <div class="form-group">
                                        <h3>Confirm Password</h3>
                                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" autocomplete="password">
                                    </div>
                                  </div>
                              </div>

                                <button class="btn btn-success btn-fill pull-right">Update User</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
