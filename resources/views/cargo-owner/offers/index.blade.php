
@include('cargo-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('cargo-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Offers Received</h1>
      </div>
    
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

<thead class="table-light">
  <tr>
                    <th>Ship Owner</th>
                    <th>Vessel</th>
                    <th>Price</th>
                    <th>ETA</th>
                    <th>Status</th>
                    <th width="100">Action</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>ABC Shipping</td>
                    <td>MV Ocean Star</td>
                    <td>$25/MT <span class="badge-best">Best</span></td>
                    <td>5 Days</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                        <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="add-edit-customer-master.html" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
                    </td>
                </tr>

                <tr>
                    <td>Global Marine</td>
                    <td>MV Blue Wave</td>
                    <td>$28/MT</td>
                    <td>7 Days</td>
                    <td><span class="badge bg-secondary">Pending</span></td>
                    <td>
                        <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="add-edit-customer-master.html" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
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
                    

  