
@include('admin-dashboard.include.header')
<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')
<div class="main-panel dashboard-page">
    <div class="content-wrapper">
        <div class="row dashboard-card-top mb-5">
          <div class="ms-3">
                  <h1 class="mb-0 mainHeading font-weight-bolder">Dashboard</h1>
                  <p class="mb-4">
                      Check the sales, value and bounce rate.
                  </p>
              </div>             
        <div class="col-xl col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 border-0">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Total Shipments</p>
                            <h4 class="mb-0">1,240</h4>
                        </div>
                        <div class="icon icon-md icon-shape">
                            <i class="mdi mdi-account-multiple-outline"></i>
                        </div>
                    </div>
                </div>

                <div class="card-footer px-3 border-0">
                    <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+55% </span>than last
                        week</p>
                </div>
            </div>
        </div>
        <div class="col-xl col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 border-0">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Active Contract</p>
                            <h4 class="mb-0">230</h4>
                        </div>
                        <div class="icon icon-md icon-shape">
                            <i class="mdi mdi-wrench-outline"></i>
                        </div>
                    </div>
                </div>

                <div class="card-footer px-3 border-0">
                    <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+3% </span>than last
                        month</p>
                </div>
            </div>
        </div>
        <div class="col-xl col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 border-0">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Active Cargo Listings</p>
                            <h4 class="mb-0">100</h4>
                        </div>
                        <div class="icon icon-md icon-shape">
                            <i class="mdi mdi-eye"></i>
                        </div>
                    </div>
                </div>

                <div class="card-footer px-3 border-0">
                    <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">-2% </span>than
                        yesterday</p>
                </div>
            </div>
        </div>
        
        <div class="col-xl col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 border-0">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Revenue</p>
                            <h4 class="mb-0">$1.2M</h4>
                        </div>
                        <div class="icon icon-md icon-shape">
                            <i class="mdi mdi-sale"></i>
                        </div>
                    </div>
                </div>

                <div class="card-footer px-3 border-0">
                    <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+5% </span>than
                        yesterday</p>
                </div>
            </div>
        </div>
        <div class="col-xl col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 border-0">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-sm mb-0 text-capitalize">Pending RFQs</p>
                            <h4 class="mb-0">100</h4>
                        </div>
                        <div class="icon icon-md icon-shape">
                            <i class="mdi mdi-sale"></i>
                        </div>
                    </div>
                </div>

                <div class="card-footer px-3 border-0">
                    <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+5% </span>than
                        yesterday</p>
                </div>
            </div>
        </div>
    </div>


  <div class="row">
    <div class="col-sm-12">
        <div class="home-tab">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column">
                  <div class="row mb-3">
                    <!-- Card 1 -->
      <div class="col-lg-6">
          <div class="dashboard-card">

              <div class="title cardsTitle">This month order</div>

                <div class="chartjs-wrapper">
          <canvas id="line"></canvas>
        </div>

          </div>
      </div>


      <!-- Card 2 -->
      <div class="col-lg-6">
          <div class="dashboard-card">

              <div class="title cardsTitle">Shipment success</div>

              <div class="percent">
                  65% <span style="color:#16c79a;font-size:14px;">↑ 8%</span>
              </div>

              <div class="success-bars">

                  <span class="active"></span>
                  <span class="active"></span>
                  <span class="active"></span>
                  <span class="active"></span>
                  <span class="active"></span>
                  <span class="active"></span>
                  <span class="active"></span>
                  <span class="active"></span>
                  <span class="active"></span>
                  <span class="active"></span>
                  <span class="active"></span>

                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>

              </div>

              <div class="mt-3 small">
                  <span style="color:#16c79a">■ Success</span>
                  <span class="text-muted ms-3">■ Not yet</span>
              </div>

          </div>
      </div>
                  </div>
                    <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded border">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="card-title card-title-dash cardsTitle">Monthly Revenue</h4>
                                            <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                    type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"> This month </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <h6 class="dropdown-header">Settings</h6>
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                        <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                            <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                            <h4 class="me-2">USD</h4>
                                            <h4 class="text-success">(+1.37%)</h4>
                                        </div>
                                        <div class="me-3">
                                            <div id="marketingOverview-legend"></div>
                                        </div>
                                    </div>
                                    <div class="chartjs-bar-wrapper mt-3">
                                        <canvas id="marketingOverview"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded border">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="card-title card-title-dash cardsTitle">Recent Activity</h4>
                                            <p class="card-subtitle card-subtitle-dash">You have 50+ new
                                                requests</p>
                                        </div>

                                    </div>
                                    <div class="table-responsive  mt-1">
                                        <table class="table table-bordered align-middle">
                                            <thead>
                                                <tr>
                                                    <th>Order No</th>
                                                    <th>Customer</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>#ORD-1025</td>
                                                    <td>ABC Plast</td>
                                                    <td>27 Jan 2026</td>
                                                    <td><span class="badge bg-success">Completed</span></td>
                                                    <td>
                                                        <div
                                                            class="actionBtn d-flex align-items-center justify-content-center gap-1">
                                                            <button class="btn btn-outline-secondary btn-fw"
                                                                data-bs-toggle="modal" data-bs-target="#editModal"><i
                                                                    class="mdi mdi-eye"></i></button>
                                                        </div>
                                                        <div class="modal fade" id="editModal" tabindex="-1"
                                                            aria-labelledby="editModal" aria-hidden="true">
                                                            <div class="modal-dialog modal-md">
                                                                <div class="modal-content">
                                                                    <div class="modal-header border-0">
                                                                        <h1 class="modal-title fs-5" id="editModal">
                                                                            Order Status</h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="table-responsive">
                                                                            <table class="table align-middle">
                                                                                <tbody>

                                                                                    <!-- Basic Information -->

                                                                                    <tr>
                                                                                        <th width="30%">
                                                                                            Order No</th>
                                                                                        <td>#ORD-1025</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>Customer</th>
                                                                                        <td>ABC Plast</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>Date</th>
                                                                                        <td>27 Jan 2026</td>
                                                                                    </tr>


                                                                                    <tr>
                                                                                        <th>Order Status
                                                                                        </th>
                                                                                        <td>
                                                                                            <span
                                                                                                class="badge bg-warning">Pending</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>Notes</th>
                                                                                        <td>Regular
                                                                                            maintenance
                                                                                            required every 6
                                                                                            months.</td>
                                                                                    </tr>


                                                                                </tbody>
                                                                            </table>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer border-0">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </tr>
                                                <tr>
                                                    <td>#ORD-1026</td>
                                                    <td>XYZ Packaging</td>
                                                    <td>28 Jan 2026</td>
                                                    <td><span class="badge bg-warning">In Progress</span>
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="actionBtn d-flex align-items-center justify-content-center gap-1">
                                                            <button class="btn btn-outline-secondary btn-fw"><i
                                                                    class="mdi mdi-eye"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column">

                    <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded border">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div>
                                                    <h4 class="card-title card-title-dash cardsTitle">Active Vessels</h4>
                                                </div>
                                                
                                            </div>
                                            <div class="mt-3">
                                               <div class="capacity-grid">
<canvas id="progress-chart" width="100%" height="100"></canvas>
  <div id="chart-legend" class="chart-legend"></div>

              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded border">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 class="card-title card-title-dash cardsTitle">Top Trade Routes</h4>
                                                <div class="add-items d-flex mb-0">
                                                   

                                                </div>
                                            </div>
                                            <div class="card-body px-0">
                                                
<div id="routesChart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

    </div>
</div>
    






</div>
@include('admin-dashboard.include.footer')                    

  