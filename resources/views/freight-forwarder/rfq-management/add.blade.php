
@include('freight-forwarder.include.header')

<div class="container-fluid page-body-wrapper">
@include('freight-forwarder.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Create RFQ</h1>
      </div>
      
    </div>

    

  <div class="card mt-5">
    <div class="card-body p-0">

     <form action="#">
 <!-- Shipment -->
            <div class="mb-3">
                <label class="form-label">Shipment</label>
                <input type="text" class="form-control" value="#SHP101 - Coal (Auto-filled)" readonly>
            </div>

            <!-- Freight Terms -->
            <div class="mb-3">
                <label class="form-label">Freight Terms</label>
                <select class="form-select">
                    <option>FOB</option>
                    <option>CIF</option>
                    <option>EXW</option>
                </select>
            </div>

            <!-- Laytime -->
            <div class="mb-3">
                <label class="form-label">Laytime (Days)</label>
                <input type="number" class="form-control" placeholder="Enter laytime">
            </div>

            <!-- Demurrage -->
            <div class="mb-3">
                <label class="form-label">Demurrage ($/Day)</label>
                <input type="number" class="form-control" placeholder="Enter demurrage">
            </div>

            <!-- Deadline -->
            <div class="mb-3">
                <label class="form-label">Deadline</label>
                <input type="date" class="form-control">
            </div>

            <!-- Submit -->
            <div class="text-end">
                <button class="btn btn-success">Create RFQ</button>
            </div>

</form>

    </div>
  </div>


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('freight-forwarder.include.footer')
                    

  