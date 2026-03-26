
@include('cargo-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('cargo-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Offer Comparison</h1>
      </div>
     
      
    </div>


      <div class="row g-3">
 <div class="table-responsive  mt-1">
     
           <table class="table table-bordered align-middle">

<thead class="table-light">
                <tr>
                    <th>Ship</th>
                    <th>Price</th>
                    <th>ETA</th>
                    <th>Rating</th>
                    <th width="200" class="text-center">Action</th>
                </tr>
            </thead>

            <tbody>

                <tr class="highlight">
                    <td>MV Ocean Star</td>
                    <td>$25/MT</td>
                    <td>5 Days</td>
                    <td>⭐ 4.5</td>
                    <td>
                        <button class="btn btn-success btn-sm">Accept</button>
                        <button class="btn btn-outline-danger btn-sm">Reject</button>
                        <button class="btn btn-outline-primary btn-sm">Negotiate</button>
                    </td>
                </tr>

                <tr>
                    <td>MV Blue Wave</td>
                    <td>$28/MT</td>
                    <td>7 Days</td>
                    <td>⭐ 4.2</td>
                    <td>
                        <button class="btn btn-success btn-sm">Accept</button>
                        <button class="btn btn-outline-danger btn-sm">Reject</button>
                        <button class="btn btn-outline-primary btn-sm">Negotiate</button>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

            
        </div>

    <!-- Selected Offer Details -->
    <div class="card p-3 border mt-5">

        <h4 class="fw-bold mb-2">Selected Offer Details</h4>

        <p><strong>Ship Owner:</strong> ABC Shipping</p>
        <p><strong>Vessel:</strong> MV Ocean Star</p>
        <p><strong>Price:</strong> $25/MT</p>
        <p><strong>ETA:</strong> 5 Days</p>
        <p><strong>Rating:</strong> ⭐ 4.5</p>

        <hr>

        <div class="d-flex gap-2">
            <button class="btn btn-success">Accept Offer</button>
            <button class="btn btn-outline-danger">Reject</button>
            <button class="btn btn-outline-primary">Negotiate</button>
        </div>

    </div>



    


      </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
@include('cargo-owner.include.footer')
                    

  