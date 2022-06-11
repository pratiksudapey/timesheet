@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>Add Employee</p>
                </div>
                <div class="card-body">
                  <form action="{{route('employees.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input id="name" class="form-control" type="text" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input id="address" class="form-control" type="text" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" class="form-control" type="phone" name="phone" required>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('employees.index')}}" class="btn btn-primary lg">Back</a>
                      </div>
                  </form>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection

