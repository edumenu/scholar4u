<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Place favicon.ico in the root directory -->
  <!-- CSS here -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="{{ asset('css/website_css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/website_css/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('css/website_css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/website_css/themify-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/website_css/nice-select.css') }}" rel="stylesheet">
  <link href="{{ asset('css/website_css/flaticon.css') }}" rel="stylesheet">
  <link href="{{ asset('css/website_css/gijgo.css') }}" rel="stylesheet">
  <link href="{{ asset('css/website_css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('css/website_css/slicknav.css') }}" rel="stylesheet">
  <link href="{{ asset('css/website_css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/website_css/responsive.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/11e0a32294.js" crossorigin="anonymous"></script>

  <title>{{ config('app.name', 'Scholr4U') }}</title>

    <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    <div id="app">
      <!-- header-start -->
      <header>
        <div class="header-area ">
          <div id="sticky-header" class="main-header-area">
              <div class="container-fluid p-0">
                  <div class="row align-items-center no-gutters">
                      <div class="col-lg-2">
                          <div class="logo-img">
                              <a class="navbar-brand" href="#">Scholar4U</a>
                          </div>
                      </div>
                      <div class="col-lg-10">
                          <div class="main-menu  d-none d-lg-block">
                              <nav>
                                  <ul id="navigation">
                                      <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">home</a></li>

                                      <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>

                                      <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
                                   @guest
                                      <li> <a href="{{ route('login') }}" class="login">
                                            <span>{{ __('Login') }}</span>
                                        </a></li>
                                      @if (Route::has('register'))
                                      <li><a class="text-success" href="{{ route('register') }}">
                                          <span>{{ __('Register') }}</span>
                                      </a></li>
                                      @endif

                                  @else
                                     @if(Auth::user()->hasVerifiedEmail() == 0)
                                     <li><a class="text-warning" href="/adminFrontPage">MyProfile</a><div id="popup" class="bounceEffect"> Verify your account</div></li>
                                     <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                     @else
                                      <li ><a class="" href="/adminFrontPage">MyProfile</a></li>
                                      <li><a class="text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                      </form>
                                     @endif
                                  @endguest

                                  </ul>
                              </nav>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      </header>

            @yield('content')

    </div>

    <!-- footer -->
    <footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="" alt="">
                            </a>
                        </div>
                        <p class="footer_text doanar"> <a class="first" href="#">+10 783 467 3789
                            </a> <br>
                            <a href="#">scholar4U@gmail.com</a></p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            service
                        </h3>
                        <ul>
                            <li><a href="#">Searching Website</a></li>
                            <li><a href="#">Searching grants</a></li>
                            <li><a href="#">In dept process of applying for scholarships/grants</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Navigation
                        </h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Newsletter
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Sign Up</button>
                        </form>
                        <p class="newsletter_text">Subscribe newsletter to get updates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
{{--    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <!-- footer -->

        <!-- JS here -->
    <script src="{{ asset('js/website_js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/website_js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/website_js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/website_js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/website_js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/website_js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/website_js/popper.min.js') }}"></script>
    <script src="{{ asset('js/website_js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/website_js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/website_js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/website_js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/website_js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/website_js/scrollIt.js') }}"></script>
    <script src="{{ asset('js/website_js/wow.min.js') }}"></script>
    <script src="{{ asset('js/website_js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/website_js/plugins.js') }}"></script>
    <script src="{{ asset('js/website_js/gijgo.min.js') }}"></script>
    <script src="{{ asset('js/website_js/main.js') }}"></script>

</body>
</html>
