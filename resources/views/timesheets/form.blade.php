<div class="form-group">
    <label for="date">Date</label>
    <input id="date" class="form-control" type="date" name="date" value="{{ !empty($timesheet) ? $timesheet->date : '' }}" required>
</div>
<div class="form-group">
    <label for="employee">Employee</label>
    <select class="form-control" id="employee" name="employee" value="{{ !empty($timesheet) ? $timesheet->employee : '' }}" required>
        @foreach ($employees as $employee)
            <option value="{{$employee->id}}">{{$employee->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="project">Project</label>
    <select class="form-control" id="project" name="project" value="{{ !empty($timesheet) ? $timesheet->project : '' }}" required>
        @foreach ($projects as $project)
            <option value="{{$project->id}}">{{$project->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="in_time">In Time</label>
    <input id="in_time" class="form-control" type="time" name="in_time" value="{{ !empty($timesheet) ? $timesheet->in_time : '' }}" required>
</div>
<div class="form-group">
    <label for="out_time">Out Time</label>
    <input id="out_time" class="form-control" type="time" name="out_time" value="{{ !empty($timesheet) ? $timesheet->out_time : '' }}" required>
</div>
<div class="form-group">
    <label for="overtime">Overtime Hours</label>
    <input id="overtime" class="form-control" type="number" name="overtime" value="{{ !empty($timesheet) ? $timesheet->overtime : '' }}">
</div>
