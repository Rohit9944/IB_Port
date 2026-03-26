
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Vessel Details</h1>
        
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

<div class="col-md-3 text-center">

<div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
style="width:80px;height:80px;font-size:28px;">
V
</div>

<h6>MV Atlantic Star</h6>

<span class="badge bg-success">Available</span>

</div>

<div class="col-md-9">

<div class="row g-3">

<div class="col-md-6">
<label class="text-muted">IMO Number</label>
<div>IMO1234567</div>
</div>

<div class="col-md-6">
<label class="text-muted">Vessel Type</label>
<div>Bulk Carrier</div>
</div>

<div class="col-md-6">
<label class="text-muted">Capacity</label>
<div>52,000 DWT</div>
</div>

<div class="col-md-6">
<label class="text-muted">Flag Country</label>
<div>Panama</div>
</div>

<div class="col-md-6">
<label class="text-muted">Owner</label>
<div>Oceanic Shipping Ltd</div>
</div>

<div class="col-md-6">
<label class="text-muted">Year Built</label>
<div>2016</div>
</div>

<div class="col-md-6">
<label class="text-muted">Max Speed</label>
<div>15 Knots</div>
</div>

<div class="col-md-6">
<label class="text-muted">Current Location</label>
<div>Singapore Port</div>
</div>

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
                    

  