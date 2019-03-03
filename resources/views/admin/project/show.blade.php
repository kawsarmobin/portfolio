@extends('layouts.admin')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h5>Project: {{ $project->title }}</h5>
        </div>

        <div class="panel-body">

            <table class="table table-bordered">
                <tr>
                    <td><b>Category</b></td>
                    <td>{{ $project->category->name}}</td>
                </tr>
                <tr>
                    <td><b>Title</b></td>
                    <td>{{ $project->title }}</td>
                </tr>
                <tr>
                    <td><b>Technologies</b></td>
                    <td>{{ $project->technologies_use}}</td>
                </tr>
                <tr>
                    <td><b>URL 1</b></td>
                    <td>{{ $project->url_1}}</td>
                </tr>
                <tr>
                    <td><b>URL 2</b></td>
                    <td>{{ $project->url_2}}</td>
                </tr>
                <tr>
                    <td><b>Sort Description</b></td>
                    <td>{{ $project->sort_desc}}</td>
                </tr>

            </table>


            <div class="col-sm-12 text-center" style="padding:0px">
                <h5>Project Images</h5>
                <hr>
                @foreach ($images as $image)
                    <div class="col-sm-3" style="padding:0px;padding-bottom:10px;">
                        <img class="img-responsive img-rounded" width="200px" src="{{asset('uploads/projects/'.$image->image)}}" alt="no image">
                    </div>
                @endforeach
            </div>

            <div class="col-sm-12 text-center" style="padding-bottom:10px;margin-top:10px">
                <form class="" action="{{ route('project.destroy', $project->id) }}" method="post">
                    {{ csrf_field() }} {{ method_field('delete') }}
                    <a class="btn btn-sm btn-primary" href="{{ route('project.edit', $project->id) }}">Edit</a>
                    <input class="btn btn-sm btn-danger" type="submit" name="" value="Delete">
                    <a class="btn btn-sm btn-success" href="{{ route('project-image.index', $project->id) }}">Image</a>
                </form>
            </div>


        </div>
    </div>
@endsection
