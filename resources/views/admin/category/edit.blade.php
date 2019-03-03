@extends('layouts.admin')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h5>Update Category: {{ $category->name }}</h5>
    </div>

    <div class="panel-body">

      @include('includes.error')

      <form class="form-horizontal" action="{{ route('category.update', $category->id) }}" method="post">
        {{ csrf_field() }} {{ method_field('put') }}

        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Category: </label>
          <div class="col-sm-6">
            <input class="form-control" type="text" name="name" value="{{ $category->name }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for=""></label>
          <div class="col-sm-6">
            <input class="btn btn-sm btn-primary pull-right" type="submit" name="submit" value="Update Category">
          </div>
        </div>

      </form>

    </div>
  </div>
@endsection
