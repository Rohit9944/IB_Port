
@include('cargo-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('cargo-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">RFQ</h1>
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="{{ route('cargo.rfq.add') }}" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Create RFQ</a>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

<thead class="table-light">
 <tr>
                    <th>Shipment</th>
                    <th>Route</th>
                    <th>Freight Terms</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th width="100">Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>Coal - 50,000 MT</td>
                    <td>Mumbai → Dubai</td>
                    <td>FOB</td>
                    <td>25 Mar 2026</td>
                    <td><span class="status-badge open">Open</span></td>
                    <td>
                      <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="{{ route('cargo.rfq.view') }}" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
                    </td>
                </tr>

                <tr>
                    <td>Grain - 30,000 MT</td>
                    <td>India → Singapore</td>
                    <td>CIF</td>
                    <td>20 Mar 2026</td>
                    <td><span class="status-badge closed">Closed</span></td>
                    <td>
                      <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="{{ route('cargo.rfq.view') }}" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
                    </td>
                </tr>

</tbody>



                    </table>
      </div>
    </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('cargo-owner.include.footer')
                    

  