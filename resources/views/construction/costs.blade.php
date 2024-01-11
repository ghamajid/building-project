@extends('layouts/layoutMaster')

@section('title', 'Wizard Icons - Forms')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
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
          <form onSubmit="return false">
            <!-- Account Details -->
            <div id="prices" class="content">
              <div class="content-header mb-3">
                <h6 class="mb-0">Account Details</h6>
                <small>Enter Your Account Details.</small>
              </div>
              <div class="row g-3">
                <div class="col-sm-4">
                  <label class="form-label" for="price_1">{{__('lang.The cost of the engineering system per meter group B')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" class="form-control" name="price_1" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_2">{{__('lang.Excavation cost per cubic meter')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" class="form-control" name="price_2" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_3">{{__('lang.Price per kilo of rebar')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" class="form-control" name="price_3" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_4">{{__('lang.The cost of each course of concrete testing')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" class="form-control" name="price_4" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_5">{{__('lang.The price of each styrofoam')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" class="form-control" name="price_5" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_6">{{__('lang.Price per kilo of rebar')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" class="form-control" name="price_6" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev" disabled><i class="ti ti-arrow-left me-sm-1"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="ti ti-arrow-right"></i></button>
                </div>
              </div>
            </div>
            <!-- Personal Info -->
            <div id="renewal-code" class="content">
              <div class="content-header mb-3">
                <h6 class="mb-0">Personal Info</h6>
                <small>Enter Your Personal Info.</small>
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="first-name">First Name</label>
                  <input type="text" id="first-name" class="form-control" placeholder="John"/>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name">Last Name</label>
                  <input type="text" id="last-name" class="form-control" placeholder="Doe"/>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="country">Country</label>
                  <select class="select2" id="country">
                    <option label=" "></option>
                    <option>UK</option>
                    <option>USA</option>
                    <option>Spain</option>
                    <option>France</option>
                    <option>Italy</option>
                    <option>Australia</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="language">Language</label>
                  <select class="selectpicker w-auto" id="language" data-style="btn-transparent" data-icon-base="ti"
                          data-tick-icon="ti-check text-white" multiple>
                    <option>English</option>
                    <option>French</option>
                    <option>Spanish</option>
                  </select>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev"><i class="ti ti-arrow-left me-sm-1"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="ti ti-arrow-right"></i></button>
                </div>
              </div>
            </div>
            <!-- Address -->
            <div id="building-specifications" class="content">
              <div class="content-header mb-3">
                <h6 class="mb-0">Address</h6>
                <small>Enter Your Address.</small>
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="address-input">Address</label>
                  <input type="text" class="form-control" id="address-input"
                         placeholder="98  Borough bridge Road, Birmingham">
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="landmark">Landmark</label>
                  <input type="text" class="form-control" id="landmark" placeholder="Borough bridge">
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="pincode">Pincode</label>
                  <input type="text" class="form-control" id="pincode" placeholder="658921">
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="city">City</label>
                  <input type="text" class="form-control" id="city" placeholder="Birmingham">
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev"><i class="ti ti-arrow-left me-sm-1"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="ti ti-arrow-right"></i></button>
                </div>
              </div>
            </div>
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
          </form>
        </div>
      </div>
    </div>
    <!-- /Default Icons Wizard -->
  </div>
@endsection