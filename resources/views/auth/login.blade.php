@php
  $customizerHidden = 'customizer-hide';
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', __('lang.Sign in'))

@section('vendor-style')
  <!-- Vendor -->
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}"/>
@endsection

@section('page-style')
  <!-- Page -->
  <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
  <script src="{{asset('assets/js/pages-auth.js')}}"></script>
@endsection

@section('content')
  <div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
      <!-- /Left Text -->
      <div class="d-none d-lg-flex col-lg-7 p-0">
        <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
          <img src="{{ asset('assets/img/illustrations/Business-deal-bro-1536x1536.png') }}"
               alt="auth-login-cover" class="img-fluid my-5 auth-illustration">
        </div>
      </div>
      <!-- /Left Text -->

      <!-- Login -->
      <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
        <div class="w-px-400 mx-auto">
          <!-- Logo -->
          <div class=" mb-4 text-center">
            <a href="{{url('/')}}" class=" gap-2">
              <span
                class=" demo">@include('_partials.macros',["height"=>50,"width"=>50,"withbg"=>'fill: #fff;'])</span>
            </a>
          </div>
          <!-- /Logo -->
          <h3 class=" mb-1">{{config('variables.templateName')}}</h3>
          <p class="mb-4">{{__('lang.Subtitle Login')}}</p>

          <form id="formAuthentication" class="mb-3" action="{{url('login')}}" method="POST">
            {{ csrf_field() }}
            @php
              $username = old('username');
              $password = null;
            @endphp
            <div class="mb-3 ">
              <label for="email" class="form-label">{{__('lang.Username')}}</label>
              <input type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}"
                     value="{{$username}}" id="email" name="username" placeholder="Enter username" autofocus>
              @if ($errors->has('username'))
                <span class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">

                <div data-field="username">{{ $errors->first('username') }}</div>
              </span>
              @endif
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">{{__('lang.Password')}}</label>
                <a href="{{url('auth/forgot-password-cover')}}">
                  <small>{{__('lang.Forgot Password')}}!</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password"
                       class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{$password}}"
                       name="password"
                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                       aria-describedby="password"/>
                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  {{__('lang.Remember Me')}}
                </label>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100">
              {{__('lang.Sign in')}}
            </button>
          </form>


          <div class="divider my-4">
            <div class="divider-text">or</div>
          </div>

          <div class="d-flex justify-content-center">
            <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
              <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
              <i class="tf-icons fa-brands fa-google fs-5"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-label-twitter">
              <i class="tf-icons fa-brands fa-twitter fs-5"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- /Login -->
    </div>
  </div>
@endsection
