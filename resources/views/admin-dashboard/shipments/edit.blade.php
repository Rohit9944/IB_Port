
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Edit Shipment</h1>
        
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">
<div class="row gx-5 gy-4">

<div class="col-md-6">
<label class="form-label">Shipment ID</label>
<input type="text" class="form-control" value="SHP-001">
</div>

<div class="col-md-6">
<label class="form-label">Cargo Name</label>
<input type="text" class="form-control" value="Coal Shipment">
</div>

<div class="col-md-6">
<label class="form-label">Cargo Owner</label>
<input type="text" class="form-control" value="Global Energy Ltd">
</div>

<div class="col-md-6">
<label class="form-label">Vessel</label>
<input type="text" class="form-control" value="MV Atlantic Star">
</div>

<div class="col-md-6">
<label class="form-label">Origin Port</label>
<input type="text" class="form-control" value="Newcastle">
</div>

<div class="col-md-6">
<label class="form-label">Destination Port</label>
<input type="text" class="form-control" value="Shanghai">
</div>

<div class="col-md-6">
<label class="form-label">Departure Date</label>
<input type="date" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">ETA</label>
<input type="date" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Shipment Status</label>
<select class="form-select">
<option>Scheduled</option>
<option selected>In Transit</option>
<option>Arrived</option>
<option>Delivered</option>
<option>Delayed</option>
</select>
</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">Update Shipment</button>

<a href="{{ route('admin.shipments.index') }}" class="btn btn-secondary">
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
                    

  