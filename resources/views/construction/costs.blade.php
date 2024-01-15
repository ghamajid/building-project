@extends('layouts/layoutMaster')

@section('title', 'Wizard Icons - Forms')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}"/>
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('page-script')
  <script src="{{asset('/js/construction/cost.js')}}"></script>
@endsection

@section('content')

  <!-- Default -->
  <div class="row">
    <!-- Default Icons Wizard -->
    <div class="col-12 mb-4">
      <div class="bs-stepper wizard-icons wizard-icons-example mt-2">

        <div class="bs-stepper-header">
          <div class="step" data-target="#prices">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{asset('assets/svg/icons/form-wizard-account.svg#wizardAccount')}}"></use>
                </svg>
              </span>
              <span class="bs-stepper-label">{{__('lang.Prices')}}</span>
            </button>
          </div>
          <div class="line">
            <i class="ti ti-chevron-right"></i>
          </div>
          <div class="step" data-target="#renewal-code">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 58 54">
                  <use xlink:href="{{asset('assets/svg/icons/form-wizard-personal.svg#wizardPersonal')}}"></use>
                </svg>
              </span>
              <span class="bs-stepper-label">{{__('lang.Renewal code')}}</span>
            </button>
          </div>
          <div class="line">
            <i class="ti ti-chevron-right"></i>
          </div>
          <div class="step" data-target="#building-specifications">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{asset('assets/svg/icons/form-wizard-address.svg#wizardAddress')}}"></use>
                </svg>
              </span>
              <span class="bs-stepper-label">{{__('lang.Building specifications')}}</span>
            </button>
          </div>
          <div class="line">
            <i class="ti ti-chevron-right"></i>
          </div>
          <div class="step" data-target="#calculate-expense">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{asset('assets/svg/icons/form-wizard-submit.svg#wizardSubmit')}}"></use>
                </svg>
              </span>
              <span class="bs-stepper-label">{{__('lang.Calculate the expense')}}</span>
            </button>
          </div>
        </div>
        <div class="bs-stepper-content">
          <!-- Price Details -->
          @include('construction.components.prices')
          <!-- Renewal Code -->
          @include('construction.components.renewal-code')
          <!-- Building Specifications -->
          @include('construction.components.building-specifications')
          <!-- Review -->
          <div id="calculate-expense" class="content">

            <p class="fw-medium mb-2">Account</p>
            <ul class="list-unstyled">
              <li>Username</li>
              <li>exampl@email.com</li>
            </ul>
            <hr>
            <p class="fw-medium mb-2">Personal Info</p>
            <ul class="list-unstyled">
              <li>First Name</li>
              <li>Last Name</li>
              <li>Country</li>
              <li>Language</li>
            </ul>
            <hr>
            <p class="fw-medium mb-2">Address</p>
            <ul class="list-unstyled">
              <li>Address</li>
              <li>Landmark</li>
              <li>Pincode</li>
              <li>City</li>
            </ul>
            <hr>
            <p class="fw-medium mb-2">Social Links</p>
            <ul class="list-unstyled">
              <li>https://twitter.com/abc</li>
              <li>https://facebook.com/abc</li>
              <li>https://plus.google.com/abc</li>
              <li>https://linkedin.com/abc</li>
            </ul>
            <div class="col-12 d-flex justify-content-between">
              <button class="btn btn-label-secondary btn-prev"><i class="ti ti-arrow-left me-sm-1"></i>
                <span class="align-middle d-sm-inline-block d-none">Previous</span>
              </button>
              <button class="btn btn-success btn-submit">Submit</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- /Default Icons Wizard -->
  </div>
@endsection

