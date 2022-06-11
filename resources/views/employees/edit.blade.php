@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>Edit Employee</p>
                </div>
                <div class="card-body">
                  <form action="{{route('employees.update', $employee->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input id="name" class="form-control" type="text" name="name" value="{{old('name', $employee->name)}}" required>
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input id="address" class="form-control" type="text" name="address" value="{{old('address', $employee->address)}}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" class="form-control" type="phone" name="phone" value="{{old('phone', $employee->phone)}}" required>
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

