@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p>Employee List</p>
                    <a href="{{route("employees.create")}}" class="btn btn-primary lg"><i class="fa-solid fa-plus">Create</i></a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-stripped table-bordered">
                        <thead>
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>Mobile</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->address}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>{{$employee->mobile_number}}</td>
                                <td>
                                    <a href="{{route('employees.edit', $employee->id)}}" class="btn btn-success">Edit</a>
                                    <form method="POST" action="{{route('employees.destroy', $employee->id)}}">
                                        @csrf
                                        @method('DELETE')

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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
