@extends('layouts.auth_layout')

@section('content')


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="purple" data-image="full-screen-image-1.jpg">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="POST" action="{{ route('login') }}">
                          @csrf
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card card-hidden">
                                <div class="header text-center">{{ __('Login') }}</div>
                                <div class="content">

                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password" >{{ __('Password') }}</label>

                                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                   </div>

                                   <div class="form-group row">
                                      <div class="col-md-6 offset-md-4">
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                              <label class="form-check-label" for="remember">
                                                  {{ __('Remember Me') }}
                                              </label>
                                          </div>
                                      </div>
                                  </div>

                                </div>


                                <div class="form-group row text-center">
                                        <button type="submit" class="btn btn-fill btn-success btn-wd">
                                            {{ __('Login') }}
                                        </button><br>

                                        @if (Route::has('password.request'))
                                            <a class="" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    	<footer class="footer footer-transparent">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p> -->
            </div>
        </footer>

    </div>

</div>

@endsection
