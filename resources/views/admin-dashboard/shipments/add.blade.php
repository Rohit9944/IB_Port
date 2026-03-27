
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Create Shipment</h1>
        
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">

<div class="row gx-5 gy-4">

<div class="col-md-6">
<label class="form-label">Shipment ID</label>
<input type="text" class="form-control" placeholder="SHP-001">
</div>

<div class="col-md-6">
<label class="form-label">Contract</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Cargo Name</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Cargo Owner</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Vessel</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Captain Name</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Origin Port</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Destination Port</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Departure Date</label>
<input type="date" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">ETA (Expected Arrival)</label>
<input type="date" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Shipment Status</label>
<select class="form-select">
<option>Scheduled</option>
<option>Loading</option>
<option>In Transit</option>
<option>Arrived</option>
<option>Delivered</option>
<option>Delayed</option>
</select>
</div>

<div class="col-md-12">
<label class="form-label">Shipment Notes</label>
<textarea class="form-control"></textarea>
</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">Save Shipment</button>

<a href="shipments.php" class="btn btn-secondary">
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
                    

  