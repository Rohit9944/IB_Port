
@include('freight-forwarder.include.header')

<div class="container-fluid page-body-wrapper">
@include('freight-forwarder.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">RFQ Management</h1>
      </div>
      
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

<thead class="table-light">
 <tr>
                    <th>RFQ ID</th>
                    <th>Shipment</th>
                    <th>Freight Terms</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th width="100">Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>#RFQ101</td>
                    <td>#SHP101 (Coal)</td>
                    <td>FOB</td>
                    <td>25 Mar 2026</td>
                    <td><span class="badge bg-success">Open</span></td>
                    <td>
                        <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="{{ route('freight.rfqs.view') }}" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
                    </td>
                </tr>

                <tr>
                    <td>#RFQ102</td>
                    <td>#SHP102 (Iron Ore)</td>
                    <td>CIF</td>
                    <td>20 Mar 2026</td>
                    <td><span class="badge bg-secondary">Closed</span></td>
                    <td>
                        <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="{{ route('freight.rfqs.view') }}" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>
                    </td>
                </tr>

                <tr>
                    <td>#RFQ103</td>
                    <td>#SHP103 (Grains)</td>
                    <td>EXW</td>
                    <td>15 Mar 2026</td>
                    <td><span class="badge bg-danger">Expired</span></td>
                    <td>
                        <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="{{ route('freight.rfqs.view') }}" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
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
@include('freight-forwarder.include.footer')
                    

  