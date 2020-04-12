@extends('layouts.admin_layout')

@section('content')
<div id="app">
<div class="main-content">

<discussion-button user-login-id="{{ auth()->user()->id}}"></discussion-button>

 </div>
</div>
 <!-- Vue app -->
  <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
