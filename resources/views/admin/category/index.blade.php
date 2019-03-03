@extends('layouts.admin')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h5>Category list</h5>
    </div>

    <div class="panel-body">

      <table class="table table-bordered">
        <thead>
          <th>Category</th>
          <th>Action</th>
        </thead>
        <tbody>
          @if ($categories)
            @foreach ($categories as $category)
              <tr>
                <td>{{ $category->name }}</td>
                <td>
                  <form class="" action="{{ route('category.destroy', $category->id) }}" method="post">
                    {{ csrf_field() }} {{ method_field('delete') }}

                    <a class="btn btn-sm btn-primary" href="{{ route('category.edit', $category->id) }}">Edit</a>
                    <input class="btn btn-sm btn-danger" type="submit" name="" value="Delete">
                  </form>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>

    </div>
  </div>
@endsection
