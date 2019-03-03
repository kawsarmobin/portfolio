@extends('layouts.admin')

@section('content')

    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h5 class="text-center">{{$project->title}}</h5>
            </div>
            <div class="panel-body">
                <div class="col-sm-12" style="padding:0px;">
                    <div class="col-sm-6" style="padding:0px;">
                        <a class="btn btn-sm btn-primary pull-left" href="{{ route('project.show', $project->id) }}">View Project</a>
                    </div>
                    <div class="col-sm-6" style="padding:0px;">
                        <a class="btn btn-sm btn-primary pull-right" href="{{ route('project-image.create', $project_id) }}">Add new image</a>
                    </div>
                    <hr>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                            <tr>
                                <td><img width="70px" src="{{asset('uploads/projects/'.$image->image)}}" alt="no image"></td>
                                <td>
                                    <a class="btn btn-sm btn-danger" href="{{ route('project-image.delete', $image->id)}}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
