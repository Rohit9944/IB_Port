
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">RFQ Response Details</h1>
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
        <a href="add.html" class="btn btn-primary"><i class="mdi mdi-plus"></i>Edit</a>
        <a href="#" class="btn btn-secondary"><i class="mdi mdi-keyboard-backspace"></i> Back</a>       
      </div>
      
    </div>


   <div class="row">    

  <div class="card">

<div class="card-body">

<div class="row">

<div class="col-md-6">

<p><strong>RFQ ID:</strong> RFQ-101</p>

<p><strong>Cargo Owner:</strong> Global Energy Ltd</p>

<p><strong>Cargo:</strong> Coal</p>

<p><strong>Route:</strong> Newcastle → Shanghai</p>

<p><strong>Vessel:</strong> MV Ocean Star</p>

</div>

<div class="col-md-6">

<p><strong>Freight Rate:</strong> $45 / Ton</p>

<p><strong>Departure Date:</strong> 18 Aug 2026</p>

<p><strong>Arrival Date:</strong> 30 Aug 2026</p>

<p><strong>Status:</strong>
<span class="badge bg-warning">Pending</span>
</p>

</div>

<div class="col-md-12 mt-3">

<p><strong>Notes:</strong></p>

<p>
Cargo must be handled carefully and protected from moisture.
</p>

</div>

</div>


</div>

</div>




</div>



    


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('ship-owner.include.footer')
                    

  