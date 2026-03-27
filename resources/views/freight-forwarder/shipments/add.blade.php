
@include('freight-forwarder.include.header')

<div class="container-fluid page-body-wrapper">
@include('freight-forwarder.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Create Shipment</h1>
        
      </div>
      
    </div>


   <div class="row">
    

  <div class="card">
    <div class="card-body p-0">

     <form action="#">
   <div class="row gx-5 gy-4">

                <!-- Cargo Type -->
                <div class="col-md-6">
                    <label class="form-label">Cargo Type</label>
                    <select class="form-select">
                        <option>Select Cargo</option>
                        <option>Coal</option>
                        <option>Grain</option>
                        <option>Oil</option>
                    </select>
                </div>

                <!-- Quantity -->
                <div class="col-md-6">
                    <label class="form-label">Quantity (MT)</label>
                    <input type="number" class="form-control" placeholder="Enter quantity">
                </div>

                <!-- Loading Port -->
                <div class="col-md-6">
                    <label class="form-label">Loading Port</label>
                    <input type="text" class="form-control" placeholder="e.g. Mumbai">
                </div>

                <!-- Discharge Port -->
                <div class="col-md-6">
                    <label class="form-label">Discharge Port</label>
                    <input type="text" class="form-control" placeholder="e.g. Dubai">
                </div>

                <!-- Loading Date -->
                <div class="col-md-6">
                    <label class="form-label">Loading Date</label>
                    <input type="date" class="form-control">
                </div>

                <!-- Special Requirements -->
                <div class="col-md-12">
                    <label class="form-label">Special Requirements</label>
                    <textarea class="form-control" rows="3" placeholder="Any special instructions..."></textarea>
                </div>

            </div>

            <!-- CTA Buttons -->
            <div class="mt-4 d-flex gap-2">
                <button type="button" class="btn btn-secondary">Save Draft</button>
                <button type="submit" class="btn btn-primary">Create RFQ</button>
            </div>

</form>

    </div>
  </div>


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('freight-forwarder.include.footer')
                    

  