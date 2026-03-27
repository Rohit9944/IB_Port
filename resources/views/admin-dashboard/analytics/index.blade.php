@include('admin-dashboard.include.header')

<div class="container-fluid page-body-wrapper">
@include('admin-dashboard.include.sidebar')

    <div class="main-panel dashboard-page">
        <div class="content-wrapper">
            <div class="row dashboard-card-top mb-5">
                <div class="ms-3">
                    <h1 class="mb-0 mainHeading font-weight-bolder">Analytics Dashboard</h1>
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
                            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+12%</span>this month
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Active Vessels</p>
                                    <h4 class="mb-0">230</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-wrench-outline"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer px-3 border-0">
                            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+3% </span> growth</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Cargo Volume</p>
                                    <h4 class="mb-0">82K Tons</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-eye"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer px-3 border-0">
                            <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder"></span>This Month</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Total Revenue</p>
                                    <h4 class="mb-0">$1.2M</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-sale"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer px-3 border-0">
                            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+18%</span>growth</p>
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
                                                        <h4 class="card-title card-title-dash cardsTitle">Shipment
                                                            Trends</h4>
                                                        <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor
                                                            sit amet consectetur adipisicing elit</p>
                                                    </div>
                                                </div>
                                                <div id="shipmentChart"></div>


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
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-3">
                                                            <div>
                                                                <h4 class="card-title card-title-dash cardsTitle">Cargo
                                                                    Types</h4>
                                                            </div>

                                                        </div>
                                                        <div class="mt-3">

                                                            <div id="cargoChart"></div>

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
            <div class="row flex-grow">
    <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded border">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="card-title card-title-dash cardsTitle">Top Trade Routes</h4>
                        
                    </div>

                </div>
                <div class="table-responsive  mt-1">
                    <table class="table table-bordered align-middle">
                        <thead>

<tr>

<th>Route</th>
<th>Shipments</th>
<th>Cargo Volume</th>

</tr>

</thead>

<tbody>

<tr>
<td>Singapore → Rotterdam</td>
<td>210</td>
<td>22K Tons</td>
</tr>

<tr>
<td>Dubai → Mumbai</td>
<td>175</td>
<td>15K Tons</td>
</tr>

<tr>
<td>Shanghai → Hamburg</td>
<td>140</td>
<td>12K Tons</td>
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

<script>

    var shipmentOptions = {
        chart: { type: 'line', height: 200 },
        series: [{
            name: 'Shipments',
            data: [120, 140, 160, 180, 210, 250]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        }
    };

    var shipmentChart = new ApexCharts(
        document.querySelector("#shipmentChart"),
        shipmentOptions
    );

    shipmentChart.render();



    var cargoOptions = {
        chart: { type: 'donut' },
        series: [44, 33, 23],
        labels: ['Coal', 'Iron Ore', 'Containers']
    };

    var cargoChart = new ApexCharts(
        document.querySelector("#cargoChart"),
        cargoOptions
    );

    cargoChart.render();

</script>
@include('admin-dashboard.include.footer')
