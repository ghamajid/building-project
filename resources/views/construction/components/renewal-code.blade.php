<form id="form_renewal_code" onSubmit="return false">
  <div id="renewal-code" class="content">
    <div class="content-header mb-3">
      <h6 class="mb-0">Account Details</h6>
      <small>Enter Your Account Details.</small>
    </div>
    <div class="row g-3">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <label class="form-label" for="price_1">{{__('lang.Building renovation code')}}</label>
        <div class="input-group ">
          <input type="number" dir="ltr" tabindex="7" value="0" min="0" maxlength="5"
                 class="form-control text-center p-0" name="renewal_code_1"/>
          <span class="p-2"> - </span>
          <input type="number" dir="ltr" tabindex="6" value="0" min="0" maxlength="5"
                 class="form-control text-center p-0" name="renewal_code_2"/>
          <span class="p-2"> - </span>
          <input type="number" dir="ltr" tabindex="5" value="0" min="0" maxlength="3"
                 class="form-control text-center p-0" name="renewal_code_3"/>
          <span class="p-2"> - </span>
          <input type="number" dir="ltr" tabindex="4" value="" min="0" maxlength="5"
                 class="form-control text-center p-0" name="renewal_code_4"/>
          <span class="p-2"> - </span>
          <input type="number" dir="ltr" tabindex="3" value="" min="0" maxlength="3"
                 class="form-control text-center p-0" name="renewal_code_5"/>
          <span class="p-2"> - </span>
          <input type="number" dir="ltr" tabindex="2" value="" min="0" maxlength="2"
                 class="form-control text-center p-0" name="renewal_code_6"/>
          <span class="p-2"> - </span>
          <input type="number" dir="ltr" tabindex="1" value="" min="0" maxlength="2"
                 class="form-control text-center p-0" name="renewal_code_7"/>
        </div>
        <div class="invalid-feedback invalid-message d-none">
          {{__('validation.required',['attribute' =>__('lang.Building renovation code')])}}
        </div>
      </div>
      <div class="col-sm-3"></div>
      <div class="col-12 d-flex justify-content-between">
        <button class="btn btn-label-secondary btn-prev"><i class="ti ti-arrow-left me-sm-1"></i>
          <span class="align-middle d-sm-inline-block d-none">{{__('lang.Previous')}}</span>
        </button>
        <button class="btn btn-primary btn-next btn-next-renewal-code-active">
          <span class="align-middle d-sm-inline-block d-none me-sm-1">{{__('lang.Next')}}</span>
          <i class="ti ti-arrow-right"></i>
        </button>
        <button class="btn btn-primary waves-effect waves-light d-none btn-next-renewal-code-disable" type="button"
                disabled="">
          <span class="spinner-border me-1" role="status" aria-hidden="true"></span>
          {{__('lang.Loading')}}
          <i class="ti ti-arrow-left"></i>
        </button>
      </div>
    </div>
  </div>
</form>

@section('page-style')
  <style>
    #form_renewal_code .fv-plugins-message-container {
      display: none !important;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none !important;
      margin: 0 !important;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield !important;
    }
  </style>
@endsection
