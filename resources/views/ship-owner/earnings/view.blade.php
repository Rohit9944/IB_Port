@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
  <div class="main-panel dashboard-page">
    <div class="content-wrapper">
      <div class="row dashboard-card-top d-flex align-items-center mb-4">
        <div class="text-start col-lg-6">
          <h1 class="mb-0 mainHeading font-weight-bolder">Payment Details</h1>
        </div>
        <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
          <a href="#" class="btn btn-secondary"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
        </div>

      </div>


      <div class="row">

        <div class="card">

        <div class="card-body">

<div class="row">

<!-- Payment Information -->

<div class="col-md-6">

<h6 class="mb-3">Payment Information</h6>

<p><strong>Payment ID:</strong> PAY-101</p>

<p><strong>Payment Date:</strong> 05 Sep 2026</p>

<p><strong>Status:</strong> 
<span class="badge bg-success">Paid</span>
</p>

<p><strong>Payment Method:</strong> Bank Transfer</p>

</div>


<!-- Cargo Owner Info -->

<div class="col-md-6">

<h6 class="mb-3">Cargo Owner</h6>

<p><strong>Company:</strong> Global Energy Ltd</p>

<p><strong>Contact Person:</strong> John Smith</p>

<p><strong>Email:</strong> john@energy.com</p>

<p><strong>Phone:</strong> +44 987654321</p>

</div>

</div>

<hr>

<div class="row mt-3">

<!-- Shipment Details -->

<div class="col-md-6">

<h6 class="mb-3">Shipment Details</h6>

<p><strong>Shipment ID:</strong> SHP-101</p>

<p><strong>Contract ID:</strong> CON-101</p>

<p><strong>Vessel:</strong> MV Ocean Star</p>

<p><strong>Cargo:</strong> Coal</p>

</div>


<!-- Route Details -->

<div class="col-md-6">

<h6 class="mb-3">Shipping Route</h6>

<p><strong>Origin Port:</strong> Newcastle</p>

<p><strong>Destination Port:</strong> Shanghai</p>

<p><strong>Departure Date:</strong> 18 Aug 2026</p>

<p><strong>Arrival Date:</strong> 30 Aug 2026</p>

</div>

</div>

<hr>

<!-- Payment Breakdown -->

<h6 class="mb-3">Payment Breakdown</h6>

<div class="table-responsive">

<table class="table table-bordered">

<tr>
<th>Total Freight</th>
<td>$1,125,000</td>
</tr>

<tr>
<th>Platform Commission</th>
<td>$50,000</td>
</tr>

<tr>
<th>Taxes</th>
<td>$10,000</td>
</tr>

<tr>
<th><strong>Net Amount Received</strong></th>
<td><strong>$1,065,000</strong></td>
</tr>

</table>

</div>

<div class="mt-3">

<h6>Payment Notes</h6>

<p>
Payment received via bank transfer. Shipment completed successfully.
</p>

</div>

<div class="mt-4">

<button class="btn btn-primary">
Download Invoice
</button>

</div>

</div>




</div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')
