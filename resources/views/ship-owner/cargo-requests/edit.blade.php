
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Edit Cargo Request</h1>
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">
<div class="row gx-5 gy-4">

<div class="col-md-6">

<label class="form-label">Cargo Name</label>
<input type="text" class="form-control" value="Coal Shipment">

</div>

<div class="col-md-6">

<label class="form-label">Cargo Owner</label>
<input type="text" class="form-control" value="Global Energy Ltd">

</div>

<div class="col-md-6">

<label class="form-label">Cargo Type</label>

<select class="form-select">
<option selected>Bulk</option>
<option>Container</option>
<option>Liquid</option>
</select>

</div>

<div class="col-md-6">

<label class="form-label">Weight</label>
<input type="text" class="form-control" value="25,000 Tons">

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

<label class="form-label">Loading Date</label>
<input type="date" class="form-control">

</div>

<div class="col-md-6">

<label class="form-label">Unloading Date</label>
<input type="date" class="form-control">

</div>

<div class="col-md-6">

<label class="form-label">Freight Rate</label>
<input type="text" class="form-control" value="$45 / Ton">

</div>

<div class="col-md-6">

<label class="form-label">Status</label>

<select class="form-select">
<option selected>Pending</option>
<option>Accepted</option>
<option>Rejected</option>
</select>

</div>

<div class="col-md-12">

<label class="form-label">Special Instructions</label>

<textarea class="form-control" rows="3">
Handle with care. Cargo must be protected from moisture.
</textarea>

</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">Update Request</button>

<a href="{{ route('ship.cargo-requests') }}" class="btn btn-secondary">
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
                    

  