
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Ship Owner Details</h1>
        
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn gap-3">
        <a href="{{ route('admin.ship-owners.edit') }}" class="btn btn-primary"><i class="mdi mdi-plus"></i>Edit</a>
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
                        S
                    </div>

                    <h6>Oceanic Shipping Ltd</h6>

                    <span class="badge bg-success">Active</span>

                </div>

                <div class="col-md-9">

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="text-muted">Company Name</label>
                            <div>Oceanic Shipping Ltd</div>
                        </div>

                        <div class="col-md-6">
                            <label class="text-muted">Contact Person</label>
                            <div>Michael Brown</div>
                        </div>

                        <div class="col-md-6">
                            <label class="text-muted">Email</label>
                            <div>michael@oceanic.com</div>
                        </div>

                        <div class="col-md-6">
                            <label class="text-muted">Phone</label>
                            <div>+44 987654321</div>
                        </div>

                        <div class="col-md-6">
                            <label class="text-muted">Country</label>
                            <div>United Kingdom</div>
                        </div>

                        <div class="col-md-6">
                            <label class="text-muted">Website</label>
                            <div>www.oceanicshipping.com</div>
                        </div>

                        <div class="col-md-6">
                            <label class="text-muted">Total Vessels</label>
                            <div>15</div>
                        </div>

                        <div class="col-md-6">
                            <label class="text-muted">Active Voyages</label>
                            <div>6</div>
                        </div>

                        <div class="col-md-12">
                            <label class="text-muted">Company Address</label>
                            <div>London Shipping Tower, UK</div>
                        </div>

                    </div>

                </div>

            </div>

            <hr class="my-4">

            <h3 class="mb-3">Fleet Summary</h3>

            <div class="row text-center gap-4 mt-3">

                <div class="col-md-2 card border p-4">
                    <h2>15</h2>
                    <small class="text-muted">Total Vessels</small>
                </div>

                <div class="col-md-2 card border p-4">
                    <h2>6</h2>
                    <small class="text-muted">Active Voyages</small>
                </div>

                <div class="col-md-2 card border p-4">
                    <h2>5</h2>
                    <small class="text-muted">Available Vessels</small>
                </div>

                <div class="col-md-2 card border p-4">
                    <h2>4</h2>
                    <small class="text-muted">Maintenance</small>
                </div>

            </div>

        </div>
  </div>


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('admin-dashboard.include.footer')
                    

  