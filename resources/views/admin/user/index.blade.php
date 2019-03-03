@extends('layouts.admin')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h5>User List</h5>
    </div>

    <div class="panel-body">

      <table class="table table-bordered">
        <thead>
          <th>Name</th>
          <th>Email</th>
          <th>Status</th>
          <th>Action</th>
        </thead>
        <tbody>
          @if ($users)
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    {{-- {{ $user->status() == 1 ? 'Active' : 'Deactive'  }} --}}
                    @if ( $user->status() == 1 )
                        <span style="color:green"><b>Active</b></span>
                        @else
                            <span style="color:red"><b>Deactive</b></span>
                    @endif
                    -
                    <b>{{ $user->isAdmin() ? 'Admin User' : 'Regular User'  }}</b>
                </td>
                <td>
                  <form class="" action="{{ route('user.destroy', $user->id) }}" method="post">
                    {{ csrf_field() }} {{ method_field('delete') }}
                    <a class="btn btn-sm btn-primary" href="{{ route('user.edit', $user->id) }}">Edit</a>
                    <input class="btn btn-sm btn-danger" type="submit" name="" value="Delete" onclick="return confirm('Are you sure you want to delete this item?');">

                    |
                    @if ($user->status() == 1)
                      <a class="btn btn-sm btn-danger" href="{{ route('user.deactive',$user->id) }}">Deactive User</a>

                    @else
                      <a class="btn btn-sm btn-success" href="{{ route('user.active', $user->id) }}">Active User</a>
                    @endif

                    @if ($user->isAdmin())
                      <a class="btn btn-sm btn-danger" href="{{ route('user.regular',$user->id) }}">Make Regular</a>

                    @else
                      <a class="btn btn-sm btn-success" href="{{ route('user.admin', $user->id) }}">Make Admin</a>
                    @endif
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
