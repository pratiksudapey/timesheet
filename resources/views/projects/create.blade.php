@extends('dashboard.app')
@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p>Add Projects</p>
                </div>
                <div class="card-body">
                  <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
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

