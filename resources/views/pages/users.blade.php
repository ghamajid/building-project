@extends('layouts/layoutMaster')

@section('title', 'User Management - Crud App')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
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
  <script src="{{asset('js/user-management.js')}}"></script>
@endsection

@section('content')

  <!-- Users List Table -->
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0">{{__('lang.Users Management')}}</h5>
    </div>
    <div class="card-datatable table-responsive">
      <table class="datatables-users table">
        <thead class="border-top">
        <tr>
          <th></th>
          <th>{{__('lang.Row')}}</th>
          <th>{{__('lang.User')}}</th>
          <th>{{__('lang.Username')}}</th>
          <th>{{__('lang.Email')}}</th>
          <th>{{__('lang.Verified')}}</th>
          <th>{{__('lang.Action')}}</th>
        </tr>
        </thead>
      </table>
    </div>
    <!-- Offcanvas to add new user -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">{{__('lang.Add User')}}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body mx-0 flex-grow-0">
        <form class="add-new-user pt-0" id="addNewUserForm">
          <input type="hidden" name="id" id="user_id">
          <div class="mb-3">
            <label class="form-label" for="add-user-fullname">{{__('lang.Full Name')}}</label>
            <input type="text" class="form-control" id="add-user-fullname" name="name" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="add-user-email">{{__('lang.Email')}}</label>
            <input type="text" id="add-user-email" class="form-control" name="email" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="add-username">{{__('lang.Username')}}</label>
            <input type="text" id="add-username" class="form-control" placeholder="" name="username" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="add-user-contact">{{__('lang.Contact')}}</label>
            <input type="text" id="add-user-contact" class="form-control phone-mask" name="contact" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="user-role">{{__('lang.User Role')}}</label>
            <div class="select2-primary">
              <select id="user-role" class="form-select form-select select2" name="roles" multiple>
                <option value="subscriber">Subscriber</option>
                <option value="editor">Editor</option>
                <option value="maintainer">Maintainer</option>
                <option value="author">Author</option>
                <option value="admin">Admin</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="user-plan">{{__('lang.Select Plan')}}</label>
            <div class="select2-primary">
              <select id="user-plan" class="form-select select2">
                <option value="basic">Basic</option>
                <option value="enterprise">Enterprise</option>
                <option value="company">Company</option>
                <option value="team">Team</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="add-user-password">{{__('lang.Password')}}</label>
            <input type="password" id="add-user-password" class="form-control" name="password" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="add-user-confirmPassword">{{__('lang.Replay Password')}}</label>
            <input type="password" id="add-user-confirmPassword" class="form-control" name="confirmPassword" />
          </div>
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">{{__('lang.Save')}}</button>
          <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">{{__('lang.Cancel')}}</button>
        </form>
      </div>
    </div>
  </div>
@endsection
