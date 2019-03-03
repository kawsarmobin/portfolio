@extends('layouts.admin')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h5>Update Password</h5>
    </div>

    <div class="panel-body">

      @include('includes.error')

      <form class="form-horizontal" action="{{ route('change-password.update') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-sm-3" for="old_password">Old password </label>
          <div class="col-sm-6">
            <input class="form-control" type="password" name="old_password" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="password">New password </label>
          <div class="col-sm-6">
            <input class="form-control" type="password" name="password" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="password_confirmation">Confirm password </label>
          <div class="col-sm-6">
            <input class="form-control" type="password" name="password_confirmation" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for=""></label>
          <div class="col-sm-6">
            <input class="btn btn-sm btn-primary pull-right" type="submit" name="submit" value="Change Password">
          </div>
        </div>

      </form>

    </div>
  </div>
@endsection
