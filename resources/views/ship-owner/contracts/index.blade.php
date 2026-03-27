
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Contracts</h1>
      </div>
      
    </div>


    <div class="row flex-grow">
       
        <div class="col-md-3">
            <select class="form-select">
                <option>Status</option>
                <option>Active</option>
                <option>Completed</option>
                <option>Pending</option>
            </select>
        </div>

        <div class="col-md-3">
            <input type="date" class="form-control">
        </div>

        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Search Contract ID">
        </div>
    </div>
      
      <div class="table-responsive  mt-4">
     
           <table class="table table-bordered align-middle">
<thead class="table-light">
  <tr>
                        <th>ID</th>
                        <th>Vessel</th>
                        <th>Cargo Owner</th>
                        <th>Route</th>
                        <th>Freight</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>#CT001</td>
                        <td>MV Ocean Star</td>
                        <td>ABC Logistics</td>
                        <td>Mumbai → Dubai</td>
                        <td>$25,000</td>
                        <td>01 Mar</td>
                        <td>15 Mar</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    
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
@include('ship-owner.include.footer')
                    

  