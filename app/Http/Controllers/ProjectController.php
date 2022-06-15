<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');

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
            'name' => ['required'],
            'pan_no' => ['required'],
            'model_no' => ['required'],
            'order_number' => ['required'],
          ]);
          if ($validator->fails()) {
                  return redirect(route('projects.create'))
                    ->withErrors($validator)
                    ->withInput();
          }

        $project = new Project();
        $project->name = $request->name;
        $project->pan_no = $request->pan_no;
        $project->model_no = $request->model_no;
        $project->order_number = $request->order_number;
        $project->order_date = $request->order_date;
        $project->quantity = $request->quantity;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->status = $request->status;
        $project->save();

        return redirect()->back()->with('success', 'Project created successfully');
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
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
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
            'name' => ['required'],
            'pan_no' => ['required'],
            'model_no' => ['required'],
            'order_number' => ['required'],
          ]);
          if ($validator->fails()) {
                  return redirect(route('projects.edit'))
                    ->withErrors($validator)
                    ->withInput();
          }

        $project = Project::find($id);
        $project->name = $request->name;
        $project->pan_no = $request->pan_no;
        $project->model_no = $request->model_no;
        $project->order_number = $request->order_number;
        $project->order_date = $request->order_date;
        $project->quantity = $request->quantity;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->status = $request->status;
        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully');
    }
}
