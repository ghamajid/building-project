<form id="form_building_specifications" onSubmit="return false">
  <div id="building-specifications" class="content">
    <div class="content-header mb-3">
      <h6 class="mb-0">Account Details</h6>
      <small>Enter Your Account Details.</small>
    </div>
    <div class="row g-3">
      <div class="col-sm-4  in_comp">
        <label class="form-label"
               for="land_area">{{__('lang.Land area')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="land_area" required/>
          <span class="input-group-text">{{__('lang.Square meters')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp">
        <label class="form-label"
               for="total_area_infrastructure">{{__('lang.The total area of the infrastructure')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="total_area_infrastructure" required/>
          <span class="input-group-text">{{__('lang.Square meters')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp">
        <label class="form-label"
               for="total_number_floors">{{__('lang.Total number of floors')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="total_number_floors" required/>
          <span class="input-group-text">{{__('lang.Floor')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp">
        <label class="form-label"
               for="number_parking_floors">{{__('lang.The number of parking floors')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_parking_floors" required/>
          <span class="input-group-text">{{__('lang.Floor')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp">
        <label class="form-label"
               for="number_basement_floors">{{__('lang.Number of basement floors')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_basement_floors" required/>
          <span class="input-group-text">{{__('lang.Floor')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp">
        <label class="form-label"
               for="number_units">{{__('lang.Number of units')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_units" required/>
          <span class="input-group-text">{{__('lang.Unit')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label d-block">{{__('lang.Mezzanine floor')}}</label>
        <div class="form-check form-check-inline mt-3">
          <input class="form-check-input" type="radio" name="mezzanine_floor" value="1">
          <label class="form-check-label" for="inlineRadio1">{{__('lang.Has')}}</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="mezzanine_floor" checked value="0">
          <label class="form-check-label" for="inlineRadio2">{{__('lang.Has no')}}</label>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label d-block">{{__('lang.The number of units in the floors is equal')}}</label>
        <div class="form-check form-check-inline mt-3">
          <input class="form-check-input" type="radio" name="number_units_in_floors_equal" value="1">
          <label class="form-check-label" for="inlineRadio1">{{__('lang.Yes')}}</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="number_units_in_floors_equal" checked value="0">
          <label class="form-check-label" for="inlineRadio2">{{__('lang.No')}}</label>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label d-block">{{__('lang.Construction type')}}</label>
        <div class="form-check form-check-inline mt-3">
          <input class="form-check-input" type="radio" name="construction_type" value="1">
          <label class="form-check-label" for="inlineRadio1">{{__('lang.high quality')}}</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="construction_type" checked value="0">
          <label class="form-check-label" for="inlineRadio2">{{__('lang.medium')}}</label>
        </div>
      </div>
      <div class="col-sm-4  in_comp number_floors">
        <label class="form-label"
               for="number_single_floors">{{__('lang.The number of single floors')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_single_floors" required/>
          <span class="input-group-text">{{__('lang.Floor')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp number_floors">
        <label class="form-label"
               for="number_two_floors">{{__('lang.The number of two floors')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_two_floors" required/>
          <span class="input-group-text">{{__('lang.Floor')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp number_floors">
        <label class="form-label"
               for="number_three_floors">{{__('lang.The number of three floors')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_three_floors" required/>
          <span class="input-group-text">{{__('lang.Floor')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp number_floors">
        <label class="form-label"
               for="number_four_floors">{{__('lang.The number of four floors')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_four_floors" required/>
          <span class="input-group-text">{{__('lang.Floor')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp number_floors">
        <label class="form-label"
               for="number_five_floors">{{__('lang.The number of five floors')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_five_floors" required/>
          <span class="input-group-text">{{__('lang.Floor')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp number_floors">
        <label class="form-label"
               for="number_six_floors">{{__('lang.The number of six floors')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_six_floors" required/>
          <span class="input-group-text">{{__('lang.Floor')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp">
        <label class="form-label"
               for="number_stone_facades_building">{{__('lang.The number of stone facades of the building')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_stone_facades_building" required/>
          <span class="input-group-text">{{__('lang.Facade')}}</span>
        </div>
      </div>
      <div class="col-sm-4  in_comp">
        <label class="form-label"
               for="number_cement_facades_building">{{__('lang.The number of cement facades of the building')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" min="0"
                 class="form-control" name="number_cement_facades_building" required/>
          <span class="input-group-text">{{__('lang.Facade')}}</span>
        </div>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <label class="form-label d-block">{{__('lang.Elevator')}}</label>
        <div class="form-check form-check-inline mt-3">
          <input class="form-check-input" type="radio" name="elevator" checked value="1">
          <label class="form-check-label" for="inlineRadio1">{{__('lang.Has')}}</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="elevator" value="0">
          <label class="form-check-label" for="inlineRadio2">{{__('lang.Has no')}}</label>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label d-block">{{__('lang.Floor material for reception and rooms')}}</label>
        <div class="form-check form-check-inline mt-3">
          <input class="form-check-input" type="radio" name="floor_material_reception_rooms" value="1">
          <label class="form-check-label" for="inlineRadio1">{{__('lang.Parquet')}}</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="floor_material_reception_rooms" checked value="0">
          <label class="form-check-label" for="inlineRadio2">{{__('lang.Ceramic')}}</label>
        </div>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <input class="form-check-input" type="checkbox" name="units_cabinets" value="" >
        <label class="form-check-label" for="units_cabinets">
          {{__('lang.Units have cabinets')}}
        </label>
      </div>
      <div class="col-sm-4">
        <label class="form-label d-block">{{__('lang.Cabinet type')}}</label>
        <div class="form-check form-check-inline mt-3">
          <input class="form-check-input" type="radio" name="cabinet_type" checked value="1">
          <label class="form-check-label" for="inlineRadio1">{{__('lang.Iranian')}}</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="cabinet_type" value="0">
          <label class="form-check-label" for="inlineRadio2">{{__('lang.Foreign')}}</label>
        </div>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <input class="form-check-input" type="checkbox" name="units_package" value="" >
        <label class="form-check-label" for="units_package">
          {{__('lang.Units have package')}}
        </label>
      </div>
      <div class="col-sm-4">
        <label class="form-label d-block">{{__('lang.Package type')}}</label>
        <div class="form-check form-check-inline mt-3">
          <input class="form-check-input" type="radio" name="package_type" checked value="1">
          <label class="form-check-label" >{{__('lang.Iranian')}}</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="package_type" value="0">
          <label class="form-check-label" >{{__('lang.Foreign')}}</label>
        </div>
      </div>
      <div class="col-sm-4"></div>

      <div class="col-12 d-flex justify-content-between">
        <button class="btn btn-label-secondary btn-prev" disabled><i class="ti ti-arrow-left me-sm-1"></i>
          <span class="align-middle d-sm-inline-block d-none">{{__('lang.Previous')}}</span>
        </button>
        <button class="btn btn-primary btn-next btn-next-building-specifications-active">
          <span class="align-middle d-sm-inline-block d-none me-sm-1">{{__('lang.Next')}}</span>
          <i class="ti ti-arrow-right"></i>
        </button>
        <button class="btn btn-primary waves-effect waves-light d-none btn-next-building-specifications-disable" type="button"
                disabled="">
          <span class="spinner-border me-1" role="status" aria-hidden="true"></span>
          {{__('lang.Loading')}}
          <i class="ti ti-arrow-left"></i>
        </button>
      </div>
    </div>
  </div>
</form>
