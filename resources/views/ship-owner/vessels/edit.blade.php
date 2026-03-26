
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Edit Vessel</h1>
        
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">
<div class="row gx-5 gy-4">

<div class="col-md-6">
<label class="form-label">Vessel Name</label>
<input type="text" class="form-control" value="MV Ocean Star">
</div>

<div class="col-md-6">
<label class="form-label">IMO Number</label>
<input type="text" class="form-control" value="9876543">
</div>

<div class="col-md-6">
<label class="form-label">Vessel Type</label>
<select class="form-select">
<option selected>Bulk Carrier</option>
<option>Container Ship</option>
<option>Tanker</option>
</select>
</div>

<div class="col-md-6">
<label class="form-label">Capacity</label>
<input type="text" class="form-control" value="50000 Tons">
</div>

<div class="col-md-6">
<label class="form-label">Flag Country</label>
<input type="text" class="form-control" value="Panama">
</div>

<div class="col-md-6">
<label class="form-label">Build Year</label>
<input type="number" class="form-control" value="2015">
</div>

<div class="col-md-6">
<label class="form-label">Current Location</label>
<input type="text" class="form-control" value="Dubai Port">
</div>

<div class="col-md-6">
<label class="form-label">Status</label>
<select class="form-select">
<option selected>Active</option>
<option>Maintenance</option>
<option>Docked</option>
</select>
</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">Update Vessel</button>

<a href="my-vessels.php" class="btn btn-secondary">
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
@include('ship-owner.include.footer')
                    

  