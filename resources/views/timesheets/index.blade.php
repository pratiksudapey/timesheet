@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p>Timesheet</p>
                    <a href="{{route("timesheets.create")}}" class="btn btn-primary lg"><i class="fa-solid fa-plus">Create</i></a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-stripped table-bordered">
                        <thead>
                        <tr>
                          <th>Date</th>
                          <th>In Time</th>
                          <th>Out Time</th>
                          <th>Overtime</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($timesheets as $timesheet)
                            <tr>
                                <td>{{date('d/m/Y', strtotime($timesheet->date))}}</td>
                                <td>{{date('H:i:s', strtotime($timesheet->in_time))}}</td>
                                <td>{{date('H:i:s', strtotime($timesheet->out_time))}}</td>
                                <td>{{$timesheet->overtime}}</td>
                                <td>
                                    <a href="{{route('timesheets.edit', $timesheet->id)}}" class="btn btn-success d-inline" >Edit</a>
                                    <form method="POST" action="{{route('timesheets.destroy', $timesheet->id)}}" class="d-inline">
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
