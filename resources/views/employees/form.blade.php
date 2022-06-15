<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ !empty($employee) ? $employee->name : '' }}" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="address">Address</label>
            <input id="address" class="form-control" type="text" name="address" value="{{ !empty($employee) ? $employee->address : '' }}">
        </div>
    </div>
  </div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="phone">Phone</label>
            <input id="phone" class="form-control" type="phone" name="phone" value="{{ !empty($employee) ? $employee->phone : '' }}">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="mobile_number">Mobile No.</label>
            <input id="mobile_number" class="form-control" type="phone" name="mobile_number" value="{{ !empty($employee) ? $employee->mobile_number : '' }}">
        </div>
    </div>
</div>
<div class="row m-3">
    <div class="form-group">
        <p><label>Status</label></p>
        <input type="checkbox" name="status" data-on-color="success" data-on-text="Active" data-off-color="danger"
            data-off-text="Inactive" @if (!empty($employee->status)) checked @endif data-bootstrap-switch>
    </div>
</div>
