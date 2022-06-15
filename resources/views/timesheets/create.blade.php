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
                      @include('timesheets.form')
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

