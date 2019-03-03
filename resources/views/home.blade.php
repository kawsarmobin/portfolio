@extends('layouts.admin')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading">
        <h5>Dashboard</h5>
    </div>

    <div class="panel-body">
      <h3 class="text-center">Welcome {{Auth::user()->name}}</h3>
    </div>
  </div>
@endsection
