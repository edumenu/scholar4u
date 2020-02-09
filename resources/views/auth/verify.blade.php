@extends('layouts.auth_layout')

@section('content')



<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="purple" data-image="images/admin_images/full-screen-image-1.jpg">
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-6">
                    <div class="card card-hidden">
                      <div class="header text-center">{{ __('Verify Your Email Address') }}</div>
                        <div class="content">
                          @if (session('resent'))
                              <div class="alert alert-info" role="alert">
                                  {{ __('A fresh verification link has been sent to your email address.') }}
                              </div>
                          @endif

                          {{ __('Before proceeding, please check your email for a verification link.') }}
                          {{ __('If you did not receive the email') }}



                        </div>
                        <div class="text-center">
                          <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-fill limeGreen">{{ __('click here to request another') }}</button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>
@endsection
