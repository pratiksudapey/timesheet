@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p>Edit Projects</p>
                </div>
                <div class="card-body">
                  <form action="{{route('projects.update', $project->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      @include('projects.form')
                    <div class="mt-3">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a href="{{route('projects.index')}}" class="btn btn-primary lg">Back</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection

