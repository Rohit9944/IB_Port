
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Create RFQ Request</h1>
        
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">

<div class="row gx-5 gy-4">

<div class="col-md-6">
<label class="form-label">Cargo Name</label>
<input type="text" class="form-control" placeholder="Coal Shipment">
</div>

<div class="col-md-6">
<label class="form-label">Cargo Type</label>
<select class="form-select">
<option>Bulk Cargo</option>
<option>Container Cargo</option>
<option>Liquid Cargo</option>
</select>
</div>

<div class="col-md-6">
<label class="form-label">Quantity (MT)</label>
<input type="number" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Cargo Owner</label>
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
<label class="form-label">Loading Date</label>
<input type="date" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Quote Deadline</label>
<input type="date" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Expected Freight Rate</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Status</label>
<select class="form-select">
<option>Pending Quotes</option>
<option>Quotes Received</option>
<option>Negotiation</option>
<option>Confirmed</option>
<option>Closed</option>
</select>
</div>

<div class="col-md-12">
<label class="form-label">Special Instructions</label>
<textarea class="form-control"></textarea>
</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">Save RFQ</button>

<a href="rfq-requests.php" class="btn btn-secondary">
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
                    

  