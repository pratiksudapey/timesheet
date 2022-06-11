@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>Add Projects</p>
                </div>
                <div class="card-body">
                  <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input id="name" class="form-control" type="text" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input id="start_date" class="form-control" type="date" name="start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input id="end_date" class="form-control" type="date" name="end_date" required>
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

