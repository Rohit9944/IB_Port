
@include('freight-forwarder.include.header')
<style>
.map-container iframe {
    width:100%;
    height:350px;
    border:0;
}
</style>
<div class="container-fluid page-body-wrapper">
@include('freight-forwarder.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Live Shipment Tracking</h1>
      </div>
      
    </div>

  <div class="row g-3">

        <!-- Map -->
        <div class="col-md-8">
            <div class="card p-2 shadow-sm map-container">
                <iframe src="https://maps.google.com/maps?q=mumbai&t=&z=5&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
        </div>

        <!-- Ship Info -->
        <div class="col-md-4">
            <div class="card p-3 shadow-sm">

                <h4 class="fw-bold">Vessel Info</h4>

                <p><strong>Vessel:</strong> MV Ocean Star</p>
                <p><strong>Route:</strong> Mumbai → Dubai</p>
                <p><strong>Current Status:</strong> <span class="badge bg-primary">In Transit</span></p>
                <p><strong>ETA:</strong> 3 Days</p>

                <hr>

                <h5 class="fw-bold">Current Location</h5>
                <p>Arabian Sea (Live)</p>

            </div>
        </div>

    </div>
    
<div class="row py-4 mt-3">

    <h3 class="mb-4">Shipment Tracking</h3>

   
<!-- Top Info -->
<div class="card p-3 shadow-sm mb-4">
<div class="row">
<div class="col-md-3"><strong>ID:</strong> #SHP001</div>
<div class="col-md-3"><strong>Route:</strong> Mumbai → Dubai</div>
<div class="col-md-3"><strong>Vessel:</strong> MV Ocean Star</div>
<div class="col-md-3"><strong>Status:</strong> <span class="badge bg-primary">In Transit</span></div>
</div>
</div>

<!-- Progress -->
<div class="card p-3 shadow-sm mb-4">
<h6>Overall Progress</h6>
<div class="progress">
<div class="progress-bar" style="width: 65%"></div>
</div>
<small>65% Completed</small>
</div>

<!-- Timeline -->
<div class="card p-3 shadow-sm">

<h5>Status Timeline</h5>

<div class="timeline">

<div class="timeline-item">
✅ Cargo Received  
<br><small class="text-muted">18 March 2026</small>
</div>

<div class="timeline-item">
🚢 Loading Completed  
<br><small class="text-muted">20 March 2026</small>
</div>

<div class="timeline-item active">
🚢 In Transit  
<br><small class="text-muted">Ongoing</small>
</div>

<div class="timeline-item">
🛃 Customs Clearance  
<br><small class="text-muted">Pending</small>
</div>

<div class="timeline-item">
📦 Delivered  
<br><small class="text-muted">Pending</small>
</div>

</div>  

</div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('freight-forwarder.include.footer')
                    

  