@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p>Edit Employee</p>
                </div>
                <div class="card-body">
                  <form action="{{route('employees.update', $employee->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      @include('employees.form')
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

