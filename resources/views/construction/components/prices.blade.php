<form id="form_prices" onSubmit="return false">
  <div id="prices" class="content">
    <div class="content-header mb-3">
      <h6 class="mb-0">Account Details</h6>
      <small>Enter Your Account Details.</small>
    </div>
    <div class="row g-3">
      <div class="col-sm-4">
        <label class="form-label"
               for="price_1">{{__('lang.The cost of the engineering system per meter group B')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_1'])?$prices['price_1']:''}}" min="0"
                 class="form-control" name="price_1" required/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_2">{{__('lang.Excavation cost per cubic meter')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_2'])?$prices['price_2']:''}}" min="0"
                 class="form-control" name="price_2"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_3">{{__('lang.Price per kilo of rebar')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_3'])?$prices['price_3']:''}}" min="0"
                 class="form-control" name="price_3"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_4">{{__('lang.The cost of each course of concrete testing')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_4'])?$prices['price_4']:''}}" min="0"
                 class="form-control" name="price_4"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_5">{{__('lang.The price of each styrofoam')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_5'])?$prices['price_5']:''}}" min="0"
                 class="form-control" name="price_5"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_6">{{__('lang.Average price per meter beam')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_6'])?$prices['price_6']:''}}" min="0"
                 class="form-control" name="price_6"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>

      <div class="col-sm-4">
        <label class="form-label"
               for="price_7">{{__('lang.Wages per square meter of reinforcement implementation')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_7'])?$prices['price_7']:''}}" min="0"
                 class="form-control" name="price_7"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_8">{{__('lang.The price of each clay brick is 20')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_8'])?$prices['price_8']:''}}" min="0"
                 class="form-control" name="price_8"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_9">{{__('lang.The price of each clay brick is 15')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_9'])?$prices['price_9']:''}}" min="0"
                 class="form-control" name="price_9"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_10">{{__('lang.The price of each clay brick is 10')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_10'])?$prices['price_10']:''}}" min="0"
                 class="form-control" name="price_10"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_11">{{__('lang.The price of each bag of type 2 black cement')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_11'])?$prices['price_11']:''}}" min="0"
                 class="form-control" name="price_11"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_12">{{__('lang.The price of each bag of white cement')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_12'])?$prices['price_12']:''}}" min="0"
                 class="form-control" name="price_12"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>

      <div class="col-sm-4">
        <label class="form-label" for="price_13">{{__('lang.Transport to the floor of each ton of sand')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_13'])?$prices['price_13']:''}}" min="0"
                 class="form-control" name="price_13"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_14">{{__('lang.Transport to the floor of each bag of materials')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_14'])?$prices['price_14']:''}}" min="0"
                 class="form-control" name="price_14"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_15">{{__('lang.Cost per square meter of flooring')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_15'])?$prices['price_15']:''}}" min="0"
                 class="form-control" name="price_15"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_16">{{__('lang.The price of each bag of plaster and soil')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_16'])?$prices['price_16']:''}}" min="0"
                 class="form-control" name="price_16"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_17">{{__('lang.The price of each bag of white plaster')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_17'])?$prices['price_17']:''}}" min="0"
                 class="form-control" name="price_17"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_18">{{__('lang.The fee for each square meter of plastering')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_18'])?$prices['price_18']:''}}" min="0"
                 class="form-control" name="price_18"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>

      <div class="col-sm-4">
        <label class="form-label" for="price_19">{{__('lang.Average price per meter of sewer pipe')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_19'])?$prices['price_19']:''}}" min="0"
                 class="form-control" name="price_19"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_20">{{__('lang.Average price per meter of PVC pipe')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_20'])?$prices['price_20']:''}}" min="0"
                 class="form-control" name="price_20"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_21">{{__('lang.The average price per meter of Super Pipe')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_21'])?$prices['price_21']:''}}" min="0"
                 class="form-control" name="price_21"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_22">{{__('lang.Plumbing fee per square meter under the building')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_22'])?$prices['price_22']:''}}" min="0"
                 class="form-control" name="price_22"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_23">{{__('lang.Average price per meter of cement pipe')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_23'])?$prices['price_23']:''}}" min="0"
                 class="form-control" name="price_23"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label"
               for="price_24">{{__('lang.The cost of each square meter of insulating services')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_24'])?$prices['price_24']:''}}" min="0"
                 class="form-control" name="price_24"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>

      <div class="col-sm-4">
        <label class="form-label" for="price_25">{{__('lang.Average price per meter of electric wire')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_25'])?$prices['price_25']:''}}" min="0"
                 class="form-control" name="price_25"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_26">{{__('lang.The price of each key and socket')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_26'])?$prices['price_26']:''}}" min="0"
                 class="form-control" name="price_26"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_27">{{__('lang.The price of electric fuses per unit')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_27'])?$prices['price_27']:''}}" min="0"
                 class="form-control" name="price_27"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_28">{{__('lang.Wiring fee per square meter of infrastructure')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_28'])?$prices['price_28']:''}}" min="0"
                 class="form-control" name="price_28"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_29">{{__('lang.Price per square meter of wall tiles')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_29'])?$prices['price_29']:''}}" min="0"
                 class="form-control" name="price_29"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_30">{{__('lang.Price per square meter of ceramic floor')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_30'])?$prices['price_30']:''}}" min="0"
                 class="form-control" name="price_30"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>

      <div class="col-sm-4">
        <label class="form-label" for="price_31">{{__('lang.Price per square meter of ceramic mosaic')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_31'])?$prices['price_31']:''}}" min="0"
                 class="form-control" name="price_31"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_32">{{__('lang.Price per square meter of ceramic floor stone')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_32'])?$prices['price_32']:''}}" min="0"
                 class="form-control" name="price_32"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_33">{{__('lang.Price per square meter of sengnama ceramic')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_33'])?$prices['price_33']:''}}" min="0"
                 class="form-control" name="price_33"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_34">{{__('lang.Execution fee per square meter of facade')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_34'])?$prices['price_34']:''}}" min="0"
                 class="form-control" name="price_34"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_35">{{__('lang.Cost per square meter of scaffolding')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_35'])?$prices['price_35']:''}}" min="0"
                 class="form-control" name="price_35"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label"
               for="price_36">{{__('lang.Price per square meter of parquet with installation')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_36'])?$prices['price_36']:''}}" min="0"
                 class="form-control" name="price_36"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_37">{{__('lang.The fee for each meter of tiling')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_37'])?$prices['price_37']:''}}" min="0"
                 class="form-control" name="price_37"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_38">{{__('lang.Price per meter of steel staircase railing')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_38'])?$prices['price_38']:''}}" min="0"
                 class="form-control" name="price_38"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_39">{{__('lang.Price per square meter of Kenaf')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_39'])?$prices['price_39']:''}}" min="0"
                 class="form-control" name="price_39"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_40">{{__('lang.Approximate cost of gas per unit')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_40'])?$prices['price_40']:''}}" min="0"
                 class="form-control" name="price_40"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_41">{{__('lang.Room door with frame and handle')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_41'])?$prices['price_41']:''}}" min="0"
                 class="form-control" name="price_41"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_42">{{__('lang.The price of each warehouse door')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_42'])?$prices['price_42']:''}}" min="0"
                 class="form-control" name="price_42"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>

      <div class="col-sm-4">
        <label class="form-label" for="price_43">{{__('lang.The price of each entrance door')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_43'])?$prices['price_43']:''}}" min="0"
                 class="form-control" name="price_43"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_44">{{__('lang.The price of each faucet')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_44'])?$prices['price_44']:''}}" min="0"
                 class="form-control" name="price_44"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_45">{{__('lang.The price of iron entrance door per person')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_45'])?$prices['price_45']:''}}" min="0"
                 class="form-control" name="price_45"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_46">{{__('lang.The price of iron parking garage entrance door')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_46'])?$prices['price_46']:''}}" min="0"
                 class="form-control" name="price_46"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label"
               for="price_47">{{__('lang.The price of the shuttered entrance door of the parking lot')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_47'])?$prices['price_47']:''}}" min="0"
                 class="form-control" name="price_47"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_48">{{__('lang.The cost of lighting the facade of each floor')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_48'])?$prices['price_48']:''}}" min="0"
                 class="form-control" name="price_48"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_49">{{__('lang.Price per meter of upvc window')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_49'])?$prices['price_49']:''}}" min="0"
                 class="form-control" name="price_49"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_50">{{__('lang.Price per meter of Iranian MDF cabinet')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_50'])?$prices['price_50']:''}}" min="0"
                 class="form-control" name="price_50"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_51">{{__('lang.Price per meter of external MDF cabinet')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_51'])?$prices['price_51']:''}}" min="0"
                 class="form-control" name="price_51"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_52">{{__('lang.Iranian package price')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_52'])?$prices['price_52']:''}}" min="0"
                 class="form-control" name="price_52"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_53">{{__('lang.Foreign package price')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_53'])?$prices['price_53']:''}}" min="0"
                 class="form-control" name="price_53"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_54">{{__('lang.The price of one meter Iranian panel radiator')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_54'])?$prices['price_54']:''}}" min="0"
                 class="form-control" name="price_54"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_55">{{__('lang.The price of each branch of electricity')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_55'])?$prices['price_55']:''}}" min="0"
                 class="form-control" name="price_55"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_56">{{__('lang.The price of each branch of water')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_56'])?$prices['price_56']:''}}" min="0"
                 class="form-control" name="price_56"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_57">{{__('lang.The price of each branch of gas')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_57'])?$prices['price_57']:''}}" min="0"
                 class="form-control" name="price_57"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_58">{{__('lang.Elevator fee for each stop')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_58'])?$prices['price_58']:''}}" min="0"
                 class="form-control" name="price_58"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>

      <div class="col-sm-4">
        <label class="form-label" for="price_59">{{__('lang.Price per cubic meter of concrete')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_59'])?$prices['price_59']:''}}" min="0"
                 class="form-control" name="price_59"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label" for="price_60">{{__('lang.Price per ton of sand')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_60'])?$prices['price_60']:''}}" min="0"
                 class="form-control" name="price_60"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_61">{{__('lang.The fee for each square meter of brickwork')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_61'])?$prices['price_61']:''}}" min="0"
                 class="form-control" name="price_61"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_62">{{__('lang.iPhone price per unit')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_62'])?$prices['price_62']:''}}" min="0"
                 class="form-control" name="price_62"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4 ">
        <label class="form-label"
               for="price_63">{{__('lang.Price per square meter of ceramic stepping stones')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_63'])?$prices['price_63']:''}}" min="0"
                 class="form-control" name="price_63"/>
          <span class="input-group-text">{{__('lang.Currency')}}</span>
        </div>
      </div>
      <div class="col-sm-4">
        <label class="form-label" for="price_64">{{__('lang.The price per meter of roof isogam')}}</label>
        <div class="input-group input-group-merge">
          <input type="number" dir="ltr" value="{{($prices && $prices['price_64'])?$prices['price_64']:''}}" min="0"
                 class="form-control" name="price_64"/>
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
        <button class="btn btn-primary waves-effect waves-light d-none btn-next-price-disable" type="button"
                disabled="">
          <span class="spinner-border me-1" role="status" aria-hidden="true"></span>
          {{__('lang.Loading')}}
          <i class="ti ti-arrow-left"></i>
        </button>
      </div>
    </div>
  </div>
</form>
