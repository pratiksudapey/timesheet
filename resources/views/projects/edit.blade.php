@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>Edit Projects</p>
                </div>
                <div class="card-body">
                  <form action="{{route('projects.update', $project->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input id="name" class="form-control" type="text" name="name" value="{{old('name', $project->name)}}" required>
                      </div>
                      <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input id="start_date" class="form-control" type="date" name="start_date" value="{{old('name', $project->start_date)}}" required>
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input id="end_date" class="form-control" type="date" name="end_date" value="{{old('name', $project->end_date)}}" required>
                    </div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a href="{{route('projects.index')}}" class="btn btn-primary lg">Back</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection

