
@include('freight-forwarder.include.header')

<div class="container-fluid page-body-wrapper">
@include('freight-forwarder.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Shipment Details</h1>
      </div>
     
      
    </div>


   
       

      
<div class="row g-3">

<!-- Cargo Info -->
<div class="col-md-6">
<div class="card p-3 shadow-sm">
<h4 class="fw-bold">Cargo Details</h4>

<p><strong>Shipment ID:</strong> #SHP001</p>
<p><strong>Cargo Type:</strong> Coal</p>
<p><strong>Quantity:</strong> 50,000 MT</p>
<p><strong>Loading Port:</strong> Mumbai</p>
<p><strong>Discharge Port:</strong> Dubai</p>
<p><strong>Loading Date:</strong> 20 March 2026</p>

</div>
</div>

<!-- Logistics -->
<div class="col-md-6">
<div class="card p-3 shadow-sm">
<h4 class="fw-bold">Logistics Info</h4>

<p><strong>Vessel:</strong> MV Ocean Star</p>
<p><strong>Route:</strong> Mumbai → Dubai</p>
<p><strong>Status:</strong> <span class="badge bg-primary">In Transit</span></p>
<p><strong>ETA:</strong> 3 Days</p>

</div>
</div>

</div>

<!-- Actions -->
<div class="card p-3 shadow-sm mt-3">

<h4 class="fw-bold">Actions</h4>

<div class="d-flex gap-2">

<button class="btn btn-warning">Update Status</button>

<button class="btn btn-primary">Upload Document</button>

<button class="btn btn-success">Notify Parties</button>

</div>

</div>

<!-- Update Status Modal -->
<div class="modal fade" id="statusModal">
<div class="modal-dialog">
<div class="modal-content p-3">

<h4 class="fw-bold">Update Status</h4>

<select class="form-control mb-3">
<option>Loading</option>
<option>In Transit</option>
<option>Delivered</option>
<option>Delayed</option>
</select>

<button class="btn btn-primary">Save</button>

</div>
</div>
</div>

    </div>


  </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('freight-forwarder.include.footer')
                    

  