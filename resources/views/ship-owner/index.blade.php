
@include('ship-owner.include.header')
<div class="container-fluid page-body-wrapper">
    @include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
    <div class="content-wrapper">
        <div class="row dashboard-card-top">
          <div class="ms-3">
                  <h1 class="mb-0 mainHeading font-weight-bolder">Ship Owner Dashboard</h1>
                  <p class="mb-4">
                      Check the sales, value and bounce rate.
                  </p>
              </div>
            </div>

            <div class="row row dashboard-card-top mb-5">
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Total Vessels</p>
                                    <h4 class="mb-0">1,240</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer px-3 border-0">
                            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+55% </span>Registered
                                Ships</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Active Shipments</p>
                                    <h4 class="mb-0">230</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-wrench-outline"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer px-3 border-0">
                            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">Currently
                                    Running</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Monthly Revenue</p>
                                    <h4 class="mb-0">$1.2M</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-sale"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer px-3 border-0">
                            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+10% </span>Growth</p>
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
                            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">Awaiting Response</p>
                        </div>
                    </div>
                </div>
            </div>


  <div class="row">
    <div class="col-sm-12">
        <div class="home-tab">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column">
                    <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded border">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="card-title card-title-dash cardsTitle">Shipment Activity</h4>
                                            <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                        </div>
                                        
                                    </div>
                                    
                                    <div id="shipmentActivityChart"></div>
                                    
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
                                                    <h4 class="card-title card-title-dash cardsTitle">Vessel Status</h4>
                                                </div>
                                                
                                            </div>
                                            <div id="vesselStatusChart"></div>
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
                    <div class="d-sm-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h4 class="card-title card-title-dash cardsTitle">Recent Shipments</h4>
                        </div>

                    </div>
                    <div class="table-responsive  mt-1">
                        <table class="table table-bordered align-middle">
                            <thead>
                                                
<tr>

<th>Shipment ID</th>
<th>Vessel</th>
<th>Route</th>
<th>Status</th>
<th>ETA</th>

</tr>

</thead>

<tbody>

<tr>

<td>SHP-101</td>
<td>MV Ocean Star</td>
<td>Dubai → Mumbai</td>

<td>
<span class="badge bg-warning">
In Transit
</span>
</td>

<td>18 Aug 2026</td>

</tr>

<tr>

<td>SHP-102</td>
<td>MV Blue Marine</td>
<td>Singapore → Rotterdam</td>

<td>
<span class="badge bg-success">
Delivered
</span>
</td>

<td>12 Aug 2026</td>

</tr>

                                            </tbody>

                                        </table>
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
@include('ship-owner.include.footer')                    

  