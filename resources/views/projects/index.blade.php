@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p>Project List</p>
                    <a href="{{route("projects.create")}}" class="btn btn-primary lg"><i class="fa-solid fa-plus">Create</i></a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-stripped table-bordered">
                        <thead>
                        <tr>
                          <th>Name</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->name}}</td>
                                <td>{{date('d/m/Y', strtotime($project->start_date))}}</td>
                                <td>{{date('d/m/Y', strtotime($project->end_date))}}</td>
                                <td>
                                    <a href="{{route('projects.edit', $project->id)}}" class="btn btn-success">Edit</a>
                                    <form method="POST" action="{{route('projects.destroy', $project->id)}}">
                                        @csrf
                                        @method('DELETE')

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
