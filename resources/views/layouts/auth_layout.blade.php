<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
   <meta name="viewport" content="width=device-width" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/admin_css/bootstrap.min.css') }}" rel="stylesheet">

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{ asset('css/admin_css/light-bootstrap-dashboard.css?v=1.4.1') }}" rel="stylesheet"/>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/admin_css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

</head>
<body>
    <div id="app">
      <nav class="navbar navbar-transparent navbar-absolute">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{{ url('/') }}">Welcome Page</a>
              </div>
              <div class="collapse navbar-collapse">

                  <ul class="nav navbar-nav navbar-right">
                      <li>
                         <a href="{{ route('login') }}">
                              Login
                          </a>
                      </li>

                      <li>
                         <a href="{{ route('register') }}">
                              Register
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
            @yield('content')

    </div>

  </body>

      <!--   Core JS Files  -->
      <script src="{{ asset('js/admin_js/jquery.min.js') }}" type="text/javascript"></script>
  	<script src="{{ asset('js/admin_js/bootstrap.min.js') }}" type="text/javascript"></script>
  	<script src="{{ asset('js/admin_js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>


  	<!--  Forms Validations Plugin -->
  	<script src="{{ asset('js/admin_js/jquery.validate.min.js') }}"></script>

  	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
  	<script src="{{ asset('js/admin_js/moment.min.js') }}"></script>

      <!--  Date Time Picker Plugin is included in this js file -->
      <script src="{{ asset('js/admin_js/bootstrap-datetimepicker.min.js') }}"></script>

      <!--  Select Picker Plugin -->
      <script src="{{ asset('js/admin_js/bootstrap-selectpicker.js') }}"></script>

  	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
  		<script src="{{ asset('js/admin_js/bootstrap-switch-tags.min.js') }}"></script>

  	<!--  Charts Plugin -->
  	<script src="{{ asset('js/admin_js/chartist.min.js') }}"></script>

      <!--  Notifications Plugin    -->
      <script src="{{ asset('js/admin_js/bootstrap-notify.js') }}"></script>

      <!-- Sweet Alert 2 plugin -->
  	<script src="{{ asset('js/admin_js/sweetalert2.js') }}"></script>

      <!-- Vector Map plugin -->
  	<script src="{{ asset('js/admin_js/jquery-jvectormap.js') }}"></script>

      <!--  Google Maps Plugin    -->
      <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

  	<!-- Wizard Plugin    -->
      <script src="{{ asset('js/admin_js/jquery.bootstrap.wizard.min.js') }}"></script>

      <!--  Datatable Plugin    -->
      <script src="{{ asset('js/admin_js/bootstrap-table.js') }}"></script>

      <!--  Full Calendar Plugin    -->
      <script src="{{ asset('js/admin_js/fullcalendar.min.js') }}"></script>

      <!-- Light Bootstrap Dashboard Core javascript and methods -->
  	<script src="{{ asset('js/admin_js/light-bootstrap-dashboard.js?v=1.4.1') }}"></script>

  	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
  	<!-- <script src="../../assets/js/demo.js"></script> -->

      <script type="text/javascript">
          $().ready(function(){
              lbd.checkFullPageBackgroundImage();

              setTimeout(function(){
                  // after 1000 ms we add the class animated to the login/register card
                  $('.card').removeClass('card-hidden');
              }, 700)
          });
      </script>

  </html>
