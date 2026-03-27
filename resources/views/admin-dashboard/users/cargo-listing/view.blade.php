
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Cargo Details</h1>
        
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

<p><strong>Cargo Name:</strong> Coal Shipment</p>

<p><strong>Cargo Type:</strong> Bulk Cargo</p>

<p><strong>Weight:</strong> 50,000 MT</p>

<p><strong>Cargo Owner:</strong> Global Energy Ltd</p>

<p><strong>Freight Rate:</strong> $25 / MT</p>

</div>

<div class="col-md-6">

<p><strong>Origin Port:</strong> Newcastle</p>

<p><strong>Destination Port:</strong> Shanghai</p>

<p><strong>Loading Date:</strong> 12 Aug 2026</p>

<p><strong>Status:</strong> Available</p>

</div>

<div class="col-md-12 mt-5">

<h3><strong>Special Instructions:</strong></h3>

<p>Handle with port crane loading and ensure dry bulk storage.</p>

</div>

</div>

</div>


</div>

</div>




</div>



    


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('admin-dashboard.include.footer')
                    

  