
@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Ship Owners</h1>
        
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="{{ route('admin.ship-owners.add') }}" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Add Ship Owner</a>
      </div>
    </div>


    <div class="row flex-grow">
      <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

                        <thead class="table-light">

                            
<tr>
<th>ID</th>
<th>Company Name</th>
<th>Contact Person</th>
<th>Email</th>
<th>Phone</th>
<th>Country</th>
<th>Total Vessels</th>
<th>Active Voyages</th>
<th>Status</th>
<th>Actions</th>
</tr>

</thead>

<tbody>

<tr>
<td>#201</td>
<td>Oceanic Shipping Ltd</td>
<td>Michael Brown</td>
<td>michael@oceanic.com</td>
<td>+44 987654321</td>
<td>UK</td>
<td>15</td>
<td>6</td>
<td><span class="badge bg-success">Active</span></td>
<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="{{ route('admin.ship-owners.edit') }}" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
                    <button class="btn btn-outline-danger btn-fw"><i class="mdi mdi-delete"></i></button>
                </div>  
</td>
</tr>

<tr>
<td>#202</td>
<td>Blue Marine Group</td>
<td>Ahmed Hassan</td>
<td>ahmed@bluesea.ae</td>
<td>+971 554433221</td>
<td>UAE</td>
<td>9</td>
<td>3</td>
<td><span class="badge bg-success">Active</span></td>
<td>
<div class="actionBtn d-flex align-items-center justify-content-center gap-1">
                    <button class="btn btn-outline-secondary btn-fw" data-bs-toggle="modal" data-bs-target="#editModal"><i class="mdi mdi-eye"></i></button>
                    <a href="{{ route('admin.ship-owners.edit') }}" class="btn btn-outline-warning btn-fw"><i class="mdi mdi-lead-pencil"></i></a>
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
@include('admin-dashboard.include.footer')
                    

  