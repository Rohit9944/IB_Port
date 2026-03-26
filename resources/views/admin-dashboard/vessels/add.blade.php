
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Add / Edit Broker</h1>
        
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">

<div class="row gx-5 gy-4">

<div class="col-md-6">
<label class="form-label">Vessel Name</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">IMO Number</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Vessel Type</label>
<select class="form-select">
<option>Bulk Carrier</option>
<option>Container Ship</option>
<option>Tanker</option>
<option>General Cargo</option>
</select>
</div>

<div class="col-md-6">
<label class="form-label">Capacity (DWT)</label>
<input type="number" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Flag Country</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Owner Company</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Year Built</label>
<input type="number" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Max Speed (Knots)</label>
<input type="number" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Current Location</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Status</label>
<select class="form-select">
<option>Available</option>
<option>On Charter</option>
<option>Maintenance</option>
</select>
</div>

<div class="col-md-12">
<label class="form-label">Notes</label>
<textarea class="form-control"></textarea>
</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">Save Vessel</button>

<a href="vessels.php" class="btn btn-secondary">Cancel</a>

</div>

</form>

    </div>
  </div>


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('admin-dashboard.include.footer')
                    

  