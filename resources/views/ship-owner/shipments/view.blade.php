@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
  <div class="main-panel dashboard-page">
    <div class="content-wrapper">
      <div class="row dashboard-card-top d-flex align-items-center mb-4">
        <div class="text-start col-lg-6">
          <h1 class="mb-0 mainHeading font-weight-bolder">Shipment Details</h1>
          
        </div>
        <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
          <a href="{{ route('ship.shipments') }}" class="btn btn-primary"><i class="mdi mdi-plus"></i>Edit</a>
          <a href="#" class="btn btn-secondary"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
        </div>

      </div>


      <div class="row">

        <div class="card">

        <div class="card-body">

<div class="row">

<!-- Shipment Information -->

<div class="col-md-6">

<h4 class="mb-3 fw-bold">Shipment Information</h4>

<p><strong>Shipment ID:</strong> SHP-101</p>

<p><strong>Contract ID:</strong> CON-101</p>

<p><strong>Status:</strong>
<span class="badge bg-warning">In Transit</span>
</p>

<p><strong>Departure Date:</strong> 18 Aug 2026</p>

<p><strong>Expected Arrival:</strong> 30 Aug 2026</p>

</div>


<!-- Cargo Owner -->

<div class="col-md-6">

<h4 class="mb-3 fw-bold">Cargo Owner</h4>

<p><strong>Company:</strong> Global Energy Ltd</p>

<p><strong>Contact Person:</strong> John Smith</p>

<p><strong>Email:</strong> john@energy.com</p>

<p><strong>Phone:</strong> +44 987654321</p>

</div>

</div>

<hr>

<div class="row mt-3">

<!-- Cargo Details -->

<div class="col-md-6">

<h4 class="mb-3 fw-bold">Cargo Details</h4>

<p><strong>Cargo Type:</strong> Coal</p>

<p><strong>Weight:</strong> 25,000 Tons</p>

<p><strong>Packaging:</strong> Bulk</p>

<p><strong>Special Instructions:</strong> Protect from moisture</p>

</div>


<!-- Vessel Details -->

<div class="col-md-6">

<h4 class="mb-3 fw-bold">Vessel Details</h4>

<p><strong>Vessel Name:</strong> MV Ocean Star</p>

<p><strong>IMO Number:</strong> 9876543</p>

<p><strong>Capacity:</strong> 50,000 Tons</p>

<p><strong>Flag:</strong> Panama</p>

</div>

</div>

<hr>

<div class="row mt-3">

<!-- Route -->

<div class="col-md-6">

<h4 class="mb-3 fw-bold">Shipping Route</h4>

<p><strong>Origin Port:</strong> Newcastle</p>

<p><strong>Destination Port:</strong> Shanghai</p>

<p><strong>Current Location:</strong> Indian Ocean</p>

</div>


<!-- Payment Info -->

<div class="col-md-6">

<h4 class="mb-3 fw-bold">Payment Information</h4>

<p><strong>Total Freight:</strong> $1,125,000</p>

<p><strong>Payment Status:</strong>
<span class="badge bg-warning">Pending</span>
</p>

<p><strong>Due Date:</strong> 05 Sep 2026</p>

</div>

</div>

<hr>

<!-- Shipment Progress -->

<h4 class="mb-3 fw-bold">Shipment Progress</h4>

<div class="progress mb-3" style="height:20px;">

<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:60%">
60% Completed
</div>

</div>

<!-- Timeline -->

<div class="mt-4">

<ul class="list-group">

<li class="list-group-item">
✔ Cargo Loaded – Newcastle Port
</li>

<li class="list-group-item">
✔ Vessel Departed – 18 Aug 2026
</li>

<li class="list-group-item">
🚢 In Transit – Indian Ocean
</li>

<li class="list-group-item text-muted">
⏳ Expected Arrival – Shanghai
</li>

</ul>

</div>

</div>


        </div>

      </div>




</div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')
