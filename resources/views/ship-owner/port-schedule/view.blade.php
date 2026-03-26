@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
  <div class="main-panel dashboard-page">
    <div class="content-wrapper">
      <div class="row dashboard-card-top d-flex align-items-center mb-4">
        <div class="text-start col-lg-6">
          <h1 class="mb-0 mainHeading font-weight-bolder">Port Schedule Details</h1>
          
        </div>
        <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
          <a href="{{ route('ship.port-schedule') }}" class="btn btn-primary"><i class="mdi mdi-plus"></i>Edit</a>
          <a href="#" class="btn btn-secondary"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
        </div>

      </div>


      <div class="row">

        <div class="card">

        <div class="card-body">

<div class="row">

<!-- Vessel Information -->

<div class="col-md-6">

<h6 class="mb-3">Vessel Information</h6>

<p><strong>Vessel Name:</strong> MV Ocean Star</p>

<p><strong>IMO Number:</strong> 9876543</p>

<p><strong>Captain:</strong> Michael Johnson</p>

<p><strong>Flag:</strong> Panama</p>

</div>


<!-- Port Information -->

<div class="col-md-6">

<h6 class="mb-3">Port Information</h6>

<p><strong>Port Name:</strong> Singapore Port</p>

<p><strong>Berth Number:</strong> B12</p>

<p><strong>Terminal:</strong> Container Terminal 2</p>

<p><strong>Status:</strong> 
<span class="badge bg-info">Scheduled</span>
</p>

</div>

</div>

<hr>

<div class="row">

<!-- Schedule Information -->

<div class="col-md-6">

<h6 class="mb-3">Schedule Details</h6>

<p><strong>Arrival Time:</strong> 12 Oct 2026 - 08:00</p>

<p><strong>Departure Time:</strong> 13 Oct 2026 - 16:00</p>

<p><strong>Cargo Operation:</strong> Loading</p>

<p><strong>Estimated Duration:</strong> 32 Hours</p>

</div>


<!-- Cargo Details -->

<div class="col-md-6">

<h6 class="mb-3">Cargo Details</h6>

<p><strong>Cargo Type:</strong> Coal</p>

<p><strong>Weight:</strong> 50,000 Tons</p>

<p><strong>Shipment ID:</strong> SHP-101</p>

<p><strong>Contract ID:</strong> CON-101</p>

</div>

</div>

<hr>

<h6 class="mb-3">Operation Timeline</h6>

<ul class="list-group">

<li class="list-group-item">
Vessel Arrival – 12 Oct 2026 08:00
</li>

<li class="list-group-item">
Berth Assigned – 12 Oct 2026 09:00
</li>

<li class="list-group-item">
Cargo Loading Started – 12 Oct 2026 11:00
</li>

<li class="list-group-item">
Cargo Loading Completed – 13 Oct 2026 14:00
</li>

<li class="list-group-item">
Departure – 13 Oct 2026 16:00
</li>

</ul>

<div class="mt-4">

<h6>Notes</h6>

<p>
Port operations scheduled smoothly. No delay expected.
</p>

</div>

</div>


        </div>

      </div>




</div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')
