@extends('layouts.admin_layout')

@section('content')
<div id="app">
    <div class="main-content">
        <calendar-button user-login-id="{{ auth()->user()->id}}"></calendar-button>
    </div>
</div>
<!-- Vue app -->
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
