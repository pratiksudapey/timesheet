<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use App\Models\Project;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timesheets = Timesheet::all();
        return view('timesheets.index', compact('timesheets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        $employees = Employee::all();
        return view('timesheets.create', compact('projects', 'employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date' => ['required'],
            'in_time' => ['required'],
            'out_time' => ['required'],
          ]);
          if ($validator->fails()) {
                  return redirect(route('timesheets.create'))
                    ->withErrors($validator)
                    ->withInput();
          }

        $timesheet = new Timesheet();
        $timesheet->date = $request->date;
        $timesheet->in_time = $request->in_time;
        $timesheet->out_time = $request->out_time;
        $timesheet->overtime = $request->overtime;
        $timesheet->employee_id = $request->employee;
        $timesheet->project_id = $request->project;
        $timesheet->save();

        return redirect()->back()->with('success', 'Timesheet created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $timesheet = Timesheet::find($id);
        return view('timesheets.edit', compact('timesheet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'date' => ['required'],
            'in_time' => ['required'],
            'out_time' => ['required'],
          ]);
          if ($validator->fails()) {
                  return redirect(route('timesheets.edit'))
                    ->withErrors($validator)
                    ->withInput();
          }

        $timesheet = Timesheet::find($id);
        $timesheet->date = $request->date;
        $timesheet->in_time = $request->in_time;
        $timesheet->out_time = $request->out_time;
        $timesheet->overtime = $request->overtime;
        $timesheet->employee_id = $request->employee;
        $timesheet->project_id = $request->project;
        $timesheet->save();

        return redirect()->route('timesheets.index')->with('success', 'Timesheet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timesheet = Timesheet::find($id);
        $timesheet->delete();
        return redirect()->route('timesheets.index')
            ->with('success', 'Timesheet deleted successfully');
    }
}
