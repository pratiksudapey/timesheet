<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ !empty($project) ? $project->name : '' }}" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="pan_no">Pan No</label>
            <input id="pan_no" class="form-control" type="number" name="pan_no" value="{{ !empty($project) ? $project->pan_no : '' }}" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="model_no">Model No</label>
            <input id="model_no" class="form-control" type="text" name="model_no" value="{{ !empty($project) ? $project->model_no : '' }}" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="order_date">Order Date</label>
            <input id="order_date" class="form-control" type="date" name="order_date" value="{{ !empty($project) ? $project->order_date : '' }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="order_number">Order Number</label>
            <input id="order_number" class="form-control" type="text" name="order_number" value="{{ !empty($project) ? $project->order_number : '' }}" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input id="start_date" class="form-control" type="date" name="start_date" value="{{ !empty($project) ? $project->start_date : '' }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input id="quantity" class="form-control" type="number" quantity="quantity" value="{{ !empty($project) ? $project->quantity : '' }}">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input id="end_date" class="form-control" type="date" name="end_date" value="{{ !empty($project) ? $project->end_date : '' }}">
        </div>
    </div>
</div>
<div class="row m-3">
    <div class="form-group">
        <p><label>Status</label></p>
        <input type="checkbox" name="status" data-on-color="success" data-on-text="Active" data-off-color="danger"
            data-off-text="Inactive" @if (!empty($project->status)) checked @endif data-bootstrap-switch>
    </div>
</div>

