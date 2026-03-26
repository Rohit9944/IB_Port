
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Cargo Request Details</h1>
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
        <a href="{{ route('ship.cargo-requests.edit') }}" class="btn btn-primary"><i class="mdi mdi-plus"></i>Edit</a>
        <a href="#" class="btn btn-secondary"><i class="mdi mdi-keyboard-backspace"></i> Back</a>       
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body">

<div class="row">

<div class="col-md-6">

<p><strong>Request ID:</strong> CR-101</p>

<p><strong>Cargo Name:</strong> Coal Shipment</p>

<p><strong>Cargo Owner:</strong> Global Energy Ltd</p>

<p><strong>Cargo Type:</strong> Bulk</p>

<p><strong>Weight:</strong> 25,000 Tons</p>

<p><strong>Freight Rate:</strong> $45 / Ton</p>

</div>

<div class="col-md-6">

<p><strong>Origin Port:</strong> Newcastle</p>

<p><strong>Destination Port:</strong> Shanghai</p>

<p><strong>Loading Date:</strong> 15 Aug 2026</p>

<p><strong>Unloading Date:</strong> 28 Aug 2026</p>

<p><strong>Status:</strong> 
<span class="badge bg-warning">Pending</span>
</p>

</div>

<div class="col-md-12 mt-3">

<p><strong>Special Instructions:</strong></p>

<p>
Handle with care. Cargo must be protected from moisture.
</p>

</div>

</div>

</div>


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')
                    

  