
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Edit Port Operation</h1>
        
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">
<div class="row gx-5 gy-4">

<div class="col-md-6">
<label class="form-label">Operation ID</label>
<input type="text" class="form-control" value="OP-001">
</div>

<div class="col-md-6">
<label class="form-label">Port Name</label>
<input type="text" class="form-control" value="Singapore Port">
</div>

<div class="col-md-6">
<label class="form-label">Vessel</label>
<input type="text" class="form-control" value="MV Ocean Star">
</div>

<div class="col-md-6">
<label class="form-label">Cargo</label>
<input type="text" class="form-control" value="Coal">
</div>

<div class="col-md-6">
<label class="form-label">Operation Type</label>
<select class="form-select">
<option selected>Loading</option>
<option>Unloading</option>
<option>Inspection</option>
<option>Refueling</option>
</select>
</div>

<div class="col-md-6">
<label class="form-label">Berth Number</label>
<input type="text" class="form-control" value="B12">
</div>

<div class="col-md-6">
<label class="form-label">Arrival Time</label>
<input type="datetime-local" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Departure Time</label>
<input type="datetime-local" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Status</label>
<select class="form-select">
<option>Scheduled</option>
<option selected>In Progress</option>
<option>Completed</option>
<option>Delayed</option>
</select>
</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">
Update Operation
</button>

<a href="{{ route('admin.port-operations.index') }}" class="btn btn-secondary">
Cancel
</a>

</div>



</form>

    </div>
  </div>


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('admin-dashboard.include.footer')
                    

  