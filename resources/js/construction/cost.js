/**
 *  Form Wizard
 */

'use strict';

$(function () {
  const select2 = $('.select2'),
    selectPicker = $('.selectpicker');

  // Bootstrap select
  if (selectPicker.length) {
    selectPicker.selectpicker();
  }

  // select2
  if (select2.length) {
    select2.each(function () {
      var $this = $(this);
      $this.wrap('<div class="position-relative"></div>');
      $this.select2({
        placeholder: 'Select value',
        dropdownParent: $this.parent()
      });
    });
  }
});

(function () {
  $("input").keydown(function () {
    var v = parseInt($(this).val());
    var min = parseInt($(this).attr('min'));
    var max = parseInt($(this).attr('max'));

    if (v != "") {
      if (v < min) {
        $(this).val(min)
      }
      if (v > max) {
        $(this).val(max)
      }
    }
  });
  $("input").on('focus keyup', function () {
    var $input = $(this);
    var value = $input.val();
    var min = parseInt($(this).attr('min'));
    if (value < min) {
      $(this).val(min)
    } else {
      var maxLength = parseInt($input.attr('maxlength'));
      if (maxLength) {
        var remainingLength = maxLength - value.length;
        if (remainingLength < 0) {
          $input.val(value.substr(0, maxLength));
          remainingLength = 0;
        }
        //$input.next().show().text(remainingLength);
      }
    }
  });

  // ajax setup
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  // Icons Wizard
  // --------------------------------------------------------------------
  const wizardIcons = document.querySelector('.wizard-icons-example');

  if (typeof wizardIcons !== undefined && wizardIcons !== null) {
    const wizardIconsBtnNextList = [].slice.call(wizardIcons.querySelectorAll('.btn-next')),
      wizardIconsBtnPrevList = [].slice.call(wizardIcons.querySelectorAll('.btn-prev')),
      wizardIconsBtnSubmit = wizardIcons.querySelector('.btn-submit');

    const prices = wizardIcons.querySelector('#prices');
    var renewal_code = wizardIcons.querySelector('#renewal-code');
    var building_specifications = wizardIcons.querySelector('#building-specifications');

    const iconsStepper = new Stepper(wizardIcons, {
      linear: false
    });

    const FormPrices = FormValidation.formValidation(prices, {
      fields: {
        price_1: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The cost of the engineering system per meter group B')
              })
            }
          }
        },
        price_2: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Excavation cost per cubic meter')
              })
            }
          }
        },
        price_3: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per kilo of rebar')
              })
            }
          }
        },
        price_4: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The cost of each course of concrete testing')
              })
            }
          }
        },
        price_5: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each styrofoam')
              })
            }
          }
        },
        price_6: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Average price per meter beam')
              })
            }
          }
        },
        price_7: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Wages per square meter of reinforcement implementation')
              })
            }
          }
        },
        price_8: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each clay brick is 20')
              })
            }
          }
        },
        price_9: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each clay brick is 15')
              })
            }
          }
        },
        price_10: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each clay brick is 10')
              })
            }
          }
        },
        price_11: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each bag of type 2 black cement')
              })
            }
          }
        },
        price_12: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each bag of white cement')
              })
            }
          }
        },
        price_13: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Transport to the floor of each ton of sand')
              })
            }
          }
        },
        price_14: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Transport to the floor of each bag of materials')
              })
            }
          }
        },
        price_15: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Cost per square meter of flooring')
              })
            }
          }
        },
        price_16: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each bag of plaster and soil')
              })
            }
          }
        },
        price_17: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each bag of white plaster')
              })
            }
          }
        },
        price_18: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The fee for each square meter of plastering')
              })
            }
          }
        },
        price_19: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Average price per meter of sewer pipe')
              })
            }
          }
        },
        price_20: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Average price per meter of PVC pipe')
              })
            }
          }
        },
        price_21: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The average price per meter of Super Pipe')
              })
            }
          }
        },
        price_22: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Plumbing fee per square meter under the building')
              })
            }
          }
        },
        price_23: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Average price per meter of cement pipe')
              })
            }
          }
        },
        price_24: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The cost of each square meter of insulating services')
              })
            }
          }
        },
        price_25: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Average price per meter of electric wire')
              })
            }
          }
        },
        price_26: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each key and socket')
              })
            }
          }
        },
        price_27: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of electric fuses per unit')
              })
            }
          }
        },
        price_28: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Wiring fee per square meter of infrastructure')
              })
            }
          }
        },
        price_29: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per square meter of wall tiles')
              })
            }
          }
        },
        price_30: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per square meter of ceramic floor')
              })
            }
          }
        },
        price_31: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per square meter of ceramic mosaic')
              })
            }
          }
        },
        price_32: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per square meter of ceramic floor stone')
              })
            }
          }
        },
        price_33: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per square meter of sengnama ceramic')
              })
            }
          }
        },
        price_34: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Execution fee per square meter of facade')
              })
            }
          }
        },
        price_35: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Cost per square meter of scaffolding')
              })
            }
          }
        },
        price_36: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per square meter of parquet with installation')
              })
            }
          }
        },
        price_37: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The fee for each meter of tiling')
              })
            }
          }
        },
        price_38: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per meter of steel staircase railing')
              })
            }
          }
        },
        price_39: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per square meter of Kenaf')
              })
            }
          }
        },
        price_40: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Approximate cost of gas per unit')
              })
            }
          }
        },
        price_41: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Room door with frame and handle')
              })
            }
          }
        },
        price_42: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each warehouse door')
              })
            }
          }
        },
        price_43: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each entrance door')
              })
            }
          }
        },
        price_44: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each faucet')
              })
            }
          }
        },
        price_45: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of iron entrance door per person')
              })
            }
          }
        },
        price_46: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of iron parking garage entrance door')
              })
            }
          }
        },
        price_47: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of the shuttered entrance door of the parking lot')
              })
            }
          }
        },
        price_48: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The cost of lighting the facade of each floor')
              })
            }
          }
        },
        price_49: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per meter of upvc window')
              })
            }
          }
        },
        price_50: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per meter of Iranian MDF cabinet')
              })
            }
          }
        },
        price_51: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per meter of external MDF cabinet')
              })
            }
          }
        },
        price_52: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Iranian package price')
              })
            }
          }
        },
        price_53: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Foreign package price')
              })
            }
          }
        },
        price_54: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of one meter Iranian panel radiator')
              })
            }
          }
        },
        price_55: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each branch of electricity')
              })
            }
          }
        },
        price_56: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each branch of water')
              })
            }
          }
        },
        price_57: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price of each branch of gas')
              })
            }
          }
        },
        price_58: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Elevator fee for each stop')
              })
            }
          }
        },
        price_59: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per cubic meter of concrete')
              })
            }
          }
        },
        price_60: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per ton of sand')
              })
            }
          }
        },
        price_61: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The fee for each square meter of brickwork')
              })
            }
          }
        },
        price_62: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.iPhone price per unit')
              })
            }
          }
        },
        price_63: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Price per square meter of ceramic stepping stones')
              })
            }
          }
        },
        price_64: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The price per meter of roof isogam')
              })
            }
          }
        },

      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-sm-4'
        }),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        submitButton: new FormValidation.plugins.SubmitButton()
      },
      init: instance => {
        instance.on('plugins.message.placed', function (e) {
          //* Move the error message out of the `input-group` element
          if (e.element.parentElement.classList.contains('input-group')) {
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          }
        });
      }
    }).on('core.form.valid', function () {
      // Jump to the next step when all fields in the current step are valid
      document.querySelector('.btn-next-price-active').classList.add("d-none");
      document.querySelector('.btn-next-price-disable').classList.remove("d-none");
      $.ajax({
        data: $('#form_prices').serialize(),
        url: "".concat(baseUrl, "construction/costs-insert"),
        type: 'POST',
        success: function success(status) {
          iconsStepper.next();
          document.querySelector('.btn-next-price-active').classList.remove("d-none");
          document.querySelector('.btn-next-price-disable').classList.add("d-none");
          // sweetalert
        },
        error: function error(err) {

        }
      });
    });

    const FormRenewalCode = FormValidation.formValidation(renewal_code, {
      fields: {
        renewal_code_1: {
          validators: {
            notEmpty: {
              message: ''
            }
          }
        },
        renewal_code_2: {
          validators: {
            notEmpty: {
              message: ''
            }
          }
        },
        renewal_code_3: {
          validators: {
            notEmpty: {
              message: ''
            }
          }
        },
        renewal_code_4: {
          validators: {
            notEmpty: {
              message: ''
            }
          }
        },
        renewal_code_5: {
          validators: {
            notEmpty: {
              message: ''
            }
          }
        },
        renewal_code_6: {
          validators: {
            notEmpty: {
              message: ''
            }
          }
        },
        renewal_code_7: {
          validators: {
            notEmpty: {
              message: ''
            }
          }
        },
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: ''
        }),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        submitButton: new FormValidation.plugins.SubmitButton()
      },
      init: instance => {
        instance.on('plugins.message.placed', function (e) {
          //* Move the error message out of the `input-group` element
          if (e.element.parentElement.classList.contains('input-group')) {
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          }
        });
      }
    }).on('core.form.invalid', function (event) {
      document.querySelector('.invalid-message').classList.remove("d-none");
    }).on('core.form.valid', function () {
      document.querySelector('.invalid-message').classList.add("d-none");
      // Jump to the next step when all fields in the current step are valid
      document.querySelector('.btn-next-renewal-code-active').classList.add("d-none");
      document.querySelector('.btn-next-renewal-code-disable').classList.remove("d-none");
      $.ajax({
        data: $('#form_renewal_code').serialize(),
        url: "".concat(baseUrl, "construction/renewal-code-fetch"),
        type: 'POST',
        success: function success(status) {
          iconsStepper.next();
          console.log(status.project.approved_area,'123456')
          $('input[name=land_area]').val(status.project.approved_area)
          $('input[name=total_area_infrastructure]').val(status.project.foundation)
          $('input[name=total_number_floors]').val(status.regulation.length - 1)
          document.querySelector('.btn-next-renewal-code-active').classList.remove("d-none");
          document.querySelector('.btn-next-renewal-code-disable').classList.add("d-none");
          // sweetalert
        },
        error: function error(error) {
          document.querySelector('.btn-next-renewal-code-active').classList.remove("d-none");
          document.querySelector('.btn-next-renewal-code-disable').classList.add("d-none");
          Swal.fire({
            icon: 'error',
            title: trans('lang.Building renovation code') + '!',
            text: trans('lang.' + JSON.parse(error.responseText).message),
            confirmButtonText: trans('lang.Submit'),
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        }
      });
    });

    const FormBuildingSpecifications = FormValidation.formValidation(building_specifications, {
      fields: {
        land_area: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Land area')
              })
            }
          }
        },
        total_area_infrastructure: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The total area of the infrastructure')
              })
            }
          }
        },
        total_number_floors: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Total number of floors')
              })
            }
          }
        },
        number_parking_floors: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The number of parking floors')
              })
            }
          }
        },
        number_basement_floors: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Number of basement floors')
              })
            }
          }
        },
        number_units: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.Number of units')
              })
            }
          }
        },
        number_single_floors: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The number of single floors')
              })
            }
          }
        },
        number_two_floors: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The number of two floors')
              })
            }
          }
        },
        number_three_floors: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The number of three floors')
              })
            }
          }
        },
        number_four_floors: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The number of four floors')
              })
            }
          }
        },
        number_five_floors: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The number of five floors')
              })
            }
          }
        },
        number_six_floors: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The number of six floors')
              })
            }
          }
        },
        number_stone_facades_building: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The number of stone facades of the building')
              })
            }
          }
        },
        number_cement_facades_building: {
          validators: {
            notEmpty: {
              message: trans_choice('validation.required', 1, {
                attribute: trans('lang.The number of cement facades of the building')
              })
            }
          }
        },
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.in_comp'
        }),
        autoFocus: new FormValidation.plugins.AutoFocus(),
        submitButton: new FormValidation.plugins.SubmitButton()
      },
      init: instance => {
        instance.on('plugins.message.placed', function (e) {
          //* Move the error message out of the `input-group` element
          if (e.element.parentElement.classList.contains('input-group')) {
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          }
        });
      }
    }).on('core.form.valid', function () {
      // Jump to the next step when all fields in the current step are valid
      document.querySelector('.btn-next-building-specifications-active').classList.add("d-none");
      document.querySelector('.btn-next-building-specifications-disable').classList.remove("d-none");
      $.ajax({
        data: $('#form_renewal_code').serialize(),
        url: "".concat(baseUrl, "construction/renewal-code-fetch"),
        type: 'POST',
        success: function success(status) {
          iconsStepper.next();
          document.querySelector('.btn-next-building-specifications-active').classList.remove("d-none");
          document.querySelector('.btn-next-building-specifications-disable').classList.add("d-none");
          // sweetalert
        },
        error: function error(error) {
          document.querySelector('.btn-next-building-specifications-active').classList.remove("d-none");
          document.querySelector('.btn-next-building-specifications-disable').classList.add("d-none");
          Swal.fire({
            icon: 'error',
            title: trans('lang.Building renovation code') + '!',
            text: trans('lang.' + JSON.parse(error.responseText).message),
            confirmButtonText: trans('lang.Submit'),
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        }
      });
    });

    if (wizardIconsBtnNextList) {
      wizardIconsBtnNextList.forEach(wizardIconsBtnNext => {
        wizardIconsBtnNext.addEventListener('click', event => {
          switch (iconsStepper._currentIndex) {
            case 0:
              FormPrices.validate();
              break;
            case 1:
              FormRenewalCode.validate();
              break;
            case 2:
              FormBuildingSpecifications.validate();
              break;
            default:
              break;
          }
        });
      });
    }
    if (wizardIconsBtnPrevList) {
      wizardIconsBtnPrevList.forEach(wizardIconsBtnPrev => {
        wizardIconsBtnPrev.addEventListener('click', event => {
          iconsStepper.previous();
        });
      });
    }
    if (wizardIconsBtnSubmit) {
      wizardIconsBtnSubmit.addEventListener('click', event => {
        alert('Submitted..!!');
      });
    }
    $('input[type=radio][name=number_units_in_floors_equal]').change(function () {
      if (this.value == '1') {
        $('.number_floors').hide()
        FormBuildingSpecifications.disableValidator('number_single_floors')
        FormBuildingSpecifications.disableValidator('number_two_floors')
        FormBuildingSpecifications.disableValidator('number_three_floors')
        FormBuildingSpecifications.disableValidator('number_four_floors')
        FormBuildingSpecifications.disableValidator('number_five_floors')
        FormBuildingSpecifications.disableValidator('number_six_floors')
      } else if (this.value == '0') {
        $('.number_floors').show()
        FormBuildingSpecifications.enableValidator('number_single_floors')
        FormBuildingSpecifications.enableValidator('number_two_floors')
        FormBuildingSpecifications.enableValidator('number_three_floors')
        FormBuildingSpecifications.enableValidator('number_four_floors')
        FormBuildingSpecifications.enableValidator('number_five_floors')
        FormBuildingSpecifications.enableValidator('number_six_floors')
      }
      FormBuildingSpecifications.revalidateField('number_single_floors');
      FormBuildingSpecifications.revalidateField('number_two_floors');
      FormBuildingSpecifications.revalidateField('number_three_floors');
      FormBuildingSpecifications.revalidateField('number_four_floors');
      FormBuildingSpecifications.revalidateField('number_five_floors');
      FormBuildingSpecifications.revalidateField('number_six_floors');
    });
    $('input[type=checkbox][name=units_cabinets]').change(function () {
      if (this.checked) {
        $('.element_cabinet_type').show()
      } else {
        $('.element_cabinet_type').hide()
      }
    });
    $('input[type=checkbox][name=units_package]').change(function () {
      if (this.checked) {
        $('.element_package_type').show()
      } else {
        $('.element_package_type').hide()
      }
    });
  }
})();
