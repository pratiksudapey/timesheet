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
                                <td>{{$timesheet->in_time->format('H:i:s')}}</td>
                                <td>{{$timesheet->out_time->format('H:i:s')}}</td>
                                <td>{{$timesheet->overtime}}</td>
                                <td>
                                    <a href="{{route('timesheets.edit', $timesheet->id)}}" class="btn btn-success">Edit</a>
                                    <form method="POST" action="{{route('timesheets.destroy', $timesheet->id)}}">
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
