@extends('layouts/layoutMaster')

@section('title', __('lang.Roles Management'))

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}"/>
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}"/>
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('page-script')
  <script src="{{asset('js/role-management.js')}}"></script>
@endsection

@section('content')

  <!-- Roles List Table -->
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0">{{__('lang.Roles Management')}}</h5>
    </div>
    <div class="card-datatable table-responsive">
      <table class="datatables-roles table">
        <thead class="border-top">
        <tr>
          <th></th>
          <th>{{__('lang.Row')}}</th>
          <th>{{__('lang.Role Name')}}</th>
          <th>{{__('lang.Action')}}</th>
        </tr>
        </thead>
      </table>
    </div>
    <!-- Offcanvas to add new role -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddRole" aria-labelledby="offcanvasAddRoleLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasAddRoleLabel" class="offcanvas-title">{{__('lang.Add Role')}}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body mx-0 flex-grow-0">
        <form class="add-new-role pt-0" id="addNewRoleForm">
          <input type="hidden" name="id" id="role_id">
          <div class="mb-3">
            <label class="form-label" for="add-name">{{__('lang.Role Name')}}</label>
            <input type="text" class="form-control export_date" id="add-name" name="name"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="role_permission">{{__('lang.Role Permission')}}</label>
            <div class="select2-primary">
              <select id="role_permission" class="form-select form-select select2" name="permissions[]" multiple>
                @if($permissions)
                  @foreach($permissions as $permission)
                    <option value="{{$permission->id}}">{{$permission->name}}</option>
                  @endforeach
                @endif
              </select>
            </div>
          </div>
          <div style="padding-top:200px">
             <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">{{__('lang.Save')}}</button>
            <button type="reset" class="btn btn-label-secondary"
                    data-bs-dismiss="offcanvas">{{__('lang.Cancel')}}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
