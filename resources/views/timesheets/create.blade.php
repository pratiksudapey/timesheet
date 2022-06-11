@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>Add Timesheet</p>
                </div>
                <div class="card-body">
                  <form action="{{route('timesheets.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="date">Date</label>
                          <input id="date" class="form-control" type="date" name="date" required>
                      </div>
                      <div class="form-group">
                        <label for="in_time">In Time</label>
                        <input id="in_time" class="form-control" type="time" name="in_time" required>
                    </div>
                    <div class="form-group">
                        <label for="out_time">Out Time</label>
                        <input id="out_time" class="form-control" type="time" name="out_time" required>
                    </div>
                    <div class="form-group">
                        <label for="overtime">Overtime Hours</label>
                        <input id="overtime" class="form-control" type="number" name="overtime">
                    </div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a href="{{route("timesheets.index")}}" class="btn btn-primary lg">Back</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection

