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
          <form id="form_prices" onSubmit="return false">
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
                    <input type="number" min="0" class="form-control" name="price_1" required />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_2">{{__('lang.Excavation cost per cubic meter')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_2" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_3">{{__('lang.Price per kilo of rebar')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_3" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_4">{{__('lang.The cost of each course of concrete testing')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_4" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_5">{{__('lang.The price of each styrofoam')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_5" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_6">{{__('lang.Average price per meter beam')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_6" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <label class="form-label" for="price_7">{{__('lang.Wages per square meter of reinforcement implementation')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_7" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_8">{{__('lang.The price of each clay brick is 20')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_8" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_9">{{__('lang.The price of each clay brick is 15')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_9" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_10">{{__('lang.The price of each clay brick is 10')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_10" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_11">{{__('lang.The price of each bag of type 2 black cement')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_11" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_12">{{__('lang.The price of each bag of white cement')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_12" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <label class="form-label" for="price_13">{{__('lang.Transport to the floor of each ton of sand')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_13" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_14">{{__('lang.Transport to the floor of each bag of materials')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_14" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_15">{{__('lang.Cost per square meter of flooring')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_15" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_16">{{__('lang.The price of each bag of plaster and soil')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_16" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_17">{{__('lang.The price of each bag of white plaster')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_17" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_18">{{__('lang.The fee for each square meter of plastering')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_18" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <label class="form-label" for="price_19">{{__('lang.Average price per meter of sewer pipe')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_19" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_20">{{__('lang.Average price per meter of PVC pipe')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_20" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_21">{{__('lang.The average price per meter of Super Pipe')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_21" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_22">{{__('lang.Plumbing fee per square meter under the building')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_22" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_23">{{__('lang.Average price per meter of cement pipe')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_23" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_24">{{__('lang.The cost of each square meter of insulating services')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_24" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <label class="form-label" for="price_25">{{__('lang.Average price per meter of electric wire')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_25" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_26">{{__('lang.The price of each key and socket')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_26" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_27">{{__('lang.The price of electric fuses per unit')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_27" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_28">{{__('lang.Wiring fee per square meter of infrastructure')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_28" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_29">{{__('lang.Price per square meter of wall tiles')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_29" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_30">{{__('lang.Price per square meter of ceramic floor')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_30" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <label class="form-label" for="price_31">{{__('lang.Price per square meter of ceramic mosaic')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_31" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_32">{{__('lang.Price per square meter of ceramic floor stone')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_32" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_33">{{__('lang.Price per square meter of sengnama ceramic')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_33" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_34">{{__('lang.Execution fee per square meter of facade')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_34" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_35">{{__('lang.Cost per square meter of scaffolding')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_35" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_36">{{__('lang.Price per square meter of parquet with installation')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_36" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_37">{{__('lang.The fee for each meter of tiling')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_37" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_38">{{__('lang.Price per meter of steel staircase railing')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_38" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_39">{{__('lang.Price per square meter of Kenaf')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_39" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_40">{{__('lang.Approximate cost of gas per unit')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_40" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_41">{{__('lang.Room door with frame and handle')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_41" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_42">{{__('lang.The price of each warehouse door')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_42" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <label class="form-label" for="price_43">{{__('lang.The price of each entrance door')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_43" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_44">{{__('lang.The price of each faucet')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_44" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_45">{{__('lang.The price of iron entrance door per person')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_45" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_46">{{__('lang.The price of iron parking garage entrance door')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_46" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_47">{{__('lang.The price of the shuttered entrance door of the parking lot')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_47" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_48">{{__('lang.The cost of lighting the facade of each floor')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_48" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_49">{{__('lang.Price per meter of upvc window')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_49" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_50">{{__('lang.Price per meter of Iranian MDF cabinet')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_50" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_51">{{__('lang.Price per meter of external MDF cabinet')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_51" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_52">{{__('lang.Iranian package price')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_52" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_53">{{__('lang.Foreign package price')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_53" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_54">{{__('lang.The price of one meter Iranian panel radiator')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_54" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_55">{{__('lang.The price of each branch of electricity')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_55" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_56">{{__('lang.The price of each branch of water')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_56" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_57">{{__('lang.The price of each branch of gas')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_57" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_58">{{__('lang.Elevator fee for each stop')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_58" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <label class="form-label" for="price_59">{{__('lang.Price per cubic meter of concrete')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_59" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_60">{{__('lang.Price per ton of sand')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_60" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_61">{{__('lang.The fee for each square meter of brickwork')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_61" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_62">{{__('lang.iPhone price per unit')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_62" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4 ">
                  <label class="form-label" for="price_63">{{__('lang.Price per square meter of ceramic stepping stones')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control"  name="price_63" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>
                <div class="col-sm-4">
                  <label class="form-label" for="price_64">{{__('lang.The price per meter of roof isogam')}}</label>
                  <div class="input-group input-group-merge">
                    <input type="number" min="0" class="form-control" name="price_64" />
                    <span class="input-group-text">{{__('lang.Currency')}}</span>
                  </div>
                </div>

                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev" disabled><i class="ti ti-arrow-left me-sm-1"></i>
                    <span class="align-middle d-sm-inline-block d-none">{{__('lang.Previous')}}</span>
                  </button>
                  <button class="btn btn-primary btn-next btn-next-price-active">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">{{__('lang.Next')}}</span>
                    <i class="ti ti-arrow-right"></i>
                  </button>
                  <button class="btn btn-primary waves-effect waves-light d-none btn-next-price-disable" type="button" disabled="">
                    <span class="spinner-border me-1" role="status" aria-hidden="true"></span>
                    {{__('lang.Loading')}}
                    <i class="ti ti-arrow-left"></i>
                  </button>
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
