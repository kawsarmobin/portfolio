@extends('layouts.admin')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h5>Projects List</h5>
        </div>

        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Technologies Use</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @if ($projects)
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->category->name }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->technologies_use }}</td>
                                <td>
                                    {{-- {{ $project->isPublish() == 1 ? 'Publish' : 'Unpublish' }} --}}

                                    @if ($project->isPublish() == 1)
                                        <span style="color:green"><b>Published</b></span>
                                    @else
                                        <span style="color:red"><b>Unpublish</b></span>
                                    @endif

                                    @if ($project->isPublish() == 1)
                                        <a class="btn btn-sm btn-danger" href="{{ route('project.unpublish', $project->id) }}">Unpublish</a>
                                    @else
                                        <a class="btn btn-sm btn-success" href="{{ route('project.publish', $project->id) }}">publish</a>
                                    @endif
                                </td>
                                <td>
                                    <form class="" action="{{ route('project.destroy', $project->id) }}" method="post">
                                        {{ csrf_field() }} {{ method_field('delete') }}
                                        <a class="btn btn-sm btn-default" href="{{ route('project.show', $project->id) }}">View</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('project.edit', $project->id) }}">Edit</a>
                                        <input class="btn btn-sm btn-danger" type="submit" name="" value="Delete">
                                        |
                                        <a class="btn btn-sm btn-success" href="{{ route('project-image.index', $project->id) }}">Image</a>
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
