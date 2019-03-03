@extends('layouts.admin')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h5>All Message</h5>
        </div>

        <div class="panel-body">

            <table class="table table-bordered">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @if ($messages)
                        @foreach ($messages as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->phone }}</td>
                                <td>{{ $message->message }}</td>
                                <td>
                                    <form class="" action="{{ route('message.destroy', $message->id) }}" method="post">
                                        {{ csrf_field() }} {{ method_field('delete') }}

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
