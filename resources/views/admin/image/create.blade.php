@extends('layouts.admin')

@section('content')


    <div class="panel panel-primary">
        <div class="panel-heading">
            <h5 class="text-center"> {{ $project->title }}  </h5>
        </div>
        <div class="panel-body" style="padding-bottom:10px;">

            @include('includes.error')


            <form class="form-horizontal" action="{{ route('project-image.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="col-sm-12">
                    <label for="">Add Project Image</label>
                    <input type="hidden" name="project_id" value="{{ $project_id }}">
                    <input type="file" name="image" value="">
                </div>

                <div class="col-sm-12">
                    <br>
                    <input class="btn btn-sm btn-primary" type="submit" name="" value="Upload Image">
                    <a class="btn btn-sm btn-success" href="{{ route('project.show', $project->id) }}">Back to View Project</a>
                </div>
            </form>
        </div>
    </div>



@endsection
