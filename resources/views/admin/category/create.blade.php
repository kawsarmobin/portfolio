@extends('layouts.admin')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h5>Create Category</h5>
    </div>

    <div class="panel-body">

      @include('includes.error')

      <form class="form-horizontal" action="{{ route('category.store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Category: </label>
          <div class="col-sm-6">
            <input class="form-control" type="text" name="name" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for=""></label>
          <div class="col-sm-6">
            <input class="btn btn-sm btn-primary pull-right" type="submit" name="submit" value="Create Category">
          </div>
        </div>

      </form>

    </div>
  </div>
@endsection
