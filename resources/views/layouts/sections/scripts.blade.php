<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('assets/vendor/libs/jquery/jquery.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/popper/popper.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/bootstrap.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/hammer/hammer.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/typeahead-js/typeahead.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/menu.js')) }}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('assets/js/main.js')) }}"></script>
<script>
  window.translations = {!! Cache::get('translations') !!};
  function trans(key, replace = {})
  {
    let translation = key.split('.').reduce((t, i) => t[i] || null, window.translations);

    for (var placeholder in replace) {
      translation = translation.replace(`:${placeholder}`, replace[placeholder]);
    }

    return translation;
  }
  function trans_choice(key, count = 1, replace = {})
  {
    let translation = key.split('.').reduce((t, i) => t[i] || null, window.translations).split('|');

    translation = count > 1 ? translation[1] : translation[0];

    for (var placeholder in replace) {
      translation = translation.replace(`:${placeholder}`, replace[placeholder]);
    }

    return translation;
  }
</script>
<script>
/*  $('table.dataTable').DataTable( {
    "oLanguage": {
      "sLengthMenu": "Display _MENU_ records per page",
      "sZeroRecords": "Nothing found - sorry",
      "sInfo": "Showing _START_ to _END_ of _TOTAL_ records",
      "sInfoEmpty": "Showing 0 to 0 of 0 records",
      "sInfoFiltered": "(filtered from _MAX_ total records)"
    }
  });*/
</script>
<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
