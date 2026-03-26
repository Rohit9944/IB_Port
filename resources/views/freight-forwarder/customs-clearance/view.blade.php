
@include('freight-forwarder.include.header')

<div class="container-fluid page-body-wrapper">
@include('freight-forwarder.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Customs Details</h1>
      </div>
      
    </div>
    <div class="row g-3">

<!-- Shipment Info -->
<div class="col-md-6">
<div class="card p-3">
<h4 class="fw-bold">Shipment Info</h4>

<p><strong>Shipment ID:</strong> #SHP001</p>
<p><strong>Cargo:</strong> Coal</p>
<p><strong>Port:</strong> Dubai Port</p>
<p><strong>Status:</strong> <span class="badge bg-warning">Pending</span></p>

</div>
</div>

<!-- Customs Info -->
<div class="col-md-6">
<div class="card p-3">
<h4 class="fw-bold">Customs Info</h4>

<p><strong>Duty Charges:</strong> $12,000</p>
<p><strong>Clearance Date:</strong> Pending</p>
<p><strong>Authority:</strong> Dubai Customs Authority</p>

</div>
</div>

</div>

<!-- Actions -->
<div class="card p-3 mt-3">

<h4 class="fw-bold">Actions</h4>

<div class="d-flex gap-2">
<button class="btn btn-success">Approve</button>
<button class="btn btn-danger">Reject</button>
<button class="btn btn-primary">Upload Document</button>
</div>

</div> 
       

  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('freight-forwarder.include.footer')
                    

  