@extends('layouts.auth_layout')

@section('content')

<div class="wrapper wrapper-full-page">
    <div class="full-page register-page" data-color="purple" data-image="full-screen-image-1.jpg">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-text">
                            <h2>{{ __('Register') }}</h2>
                            <hr />
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="pe-7s-user"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Free Account</h4>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="pe-7s-graph1"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Awesome Performances</h4>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-md-offset-s1">
                        <form method="POST" action="{{ route('register') }}">
                          @csrf
                            <div class="card card-plain">
                                <div class="content">

                                    <div class="form-group">
                                        <input id="name" type="text" placeholder="Enter name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="email" type="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="password-confirm" placeholder="Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group footer text-center">
                                        <button type="submit" class="btn btn-fill btn-neutral btn-wd">
                                            {{ __('Register') }}
                                        </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    	<footer class="footer footer-transparent">
            <div class="container">
                <!-- <p class="copyright text-center">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p> -->
            </div>
        </footer>

    </div>

</div>

@endsection
