@extends('layouts.admin')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h5>Create User</h5>
    </div>

    <div class="panel-body">

      @include('includes.error')

      <form class="form-horizontal" action="{{ route('user.store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Name</label>
          <div class="col-sm-6">
            <input class="form-control" type="text" name="name" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Email</label>
          <div class="col-sm-6">
            <input class="form-control" type="email" name="email" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="password">Password</label>
          <div class="col-sm-6">
            <input class="form-control" type="password" name="password" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="password_confirmation">Confirm Password</label>
          <div class="col-sm-6">
            <input class="form-control" type="password" name="password_confirmation" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="status">Status</label>
          <div class="col-sm-6">
            <div style="padding-top:10px">
              <input class="" type="radio" name="status" value="1">Active
              &nbsp;
              <input class="" type="radio" name="status" value="0" checked>Deactive
              <p style="color:#d8d8d8">Only active user can login.</p>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for=""></label>
          <div class="col-sm-6">
            <input class="btn btn-sm btn-primary pull-right" type="submit" name="submit" value="Create User">
          </div>
        </div>

      </form>

    </div>
  </div>
@endsection
