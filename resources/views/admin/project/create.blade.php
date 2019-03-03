@extends('layouts.admin')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h5>Create Project</h5>
    </div>

    <div class="panel-body">

      @include('includes.error')

      <form class="form-horizontal" action="{{ route('project.store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Category </label>
          <div class="col-sm-6">
            <select class="form-control" name="category_id" id="category">
              <option value="">Select Category</option>
                @if ($categories)
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                @endif
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="title">Title </label>
          <div class="col-sm-6">
            <input class="form-control" type="text" name="title" value="{{ old('title') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="technologies_use">Technologies Use </label>
          <div class="col-sm-6">
            <input class="form-control" type="text" name="technologies_use" value="{{ old('technologies_use') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="url_1">URL 1 </label>
          <div class="col-sm-6">
            <input class="form-control" type="url" name="url_1" value="{{ old('url_1') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="url_2">URL 2 </label>
          <div class="col-sm-6">
            <input class="form-control" type="url" name="url_2" value="{{ old('url_2') }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="sort_desc">Sort Description </label>
          <div class="col-sm-6">
            <textarea class="form-control" name="sort_desc" rows="4" cols="40">{{ old('sort_desc') }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for="is_publish">Permission </label>
          <div class="col-sm-6">
              <div style="padding-top:10px">
                <input class="" type="radio" name="is_publish" value="1">Publish
                &nbsp;
                <input class="" type="radio" name="is_publish" value="0" checked>Unpublish
                <p style="color:#d8d8d8">Only published project show's at frontend.</p>
              </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3" for=""></label>
          <div class="col-sm-6">
            <input class="btn btn-sm btn-primary pull-right" type="submit" name="submit" value="Create New Post">
          </div>
        </div>

      </form>

    </div>
  </div>
@endsection
