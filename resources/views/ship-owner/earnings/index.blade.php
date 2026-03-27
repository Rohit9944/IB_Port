@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')

    <div class="main-panel dashboard-page">
        <div class="content-wrapper">
            <div class="row dashboard-card-top mb-5">
                <div class="ms-3">
                    <h1 class="mb-0 mainHeading font-weight-bolder">Earnings / Revenue</h1>
                    <p class="mb-4">
                        Check the sales, value and bounce rate.
                    </p>
                </div>
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Earnings / Revenue</p>
                                    <h4 class="mb-0">$2,450</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Pending Payments</p>
                                    <h4 class="mb-0">$150,000</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-wrench-outline"></i>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Completed Shipments</p>
                                    <h4 class="mb-0">82</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-eye"></i>
                                </div>
                            </div>
                        </div>

                      
                    </div>
                </div>

                <div class="col-xl col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 border-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">This Month</p>
                                    <h4 class="mb-0">$1.2M</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-sale"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">

                                <div class="row flex-grow">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded border">
                                            <div class="card-body">
                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                    <div>
                                                        <h4 class="card-title card-title-dash cardsTitle">Monthly Revenue</h4>
                                                        
                                                    </div>
                                                </div>
                                                <div id="shipmentChart"></div>


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
                        <h4 class="card-title card-title-dash cardsTitle">Shipment Payments</h4>
                        
                    </div>

                </div>
                <div class="table-responsive  mt-1">
                    <table class="table table-bordered align-middle">
                        <thead>


<tr>

<th>Shipment ID</th>
<th>Contract</th>
<th>Cargo Owner</th>
<th>Vessel</th>
<th>Freight Amount</th>
<th>Commission</th>
<th>Net Revenue</th>
<th>Status</th>
<th>Date</th>

</tr>

</thead>

<tbody>

<tr>

<td>SHP-101</td>
<td>CON-101</td>
<td>Global Energy Ltd</td>
<td>MV Ocean Star</td>
<td>$1,125,000</td>
<td>$50,000</td>
<td>$1,075,000</td>

<td>
<span class="badge bg-success">Paid</span>
</td>

<td>05 Sep 2026</td>

</tr>

<tr>

<td>SHP-102</td>
<td>CON-102</td>
<td>Steel Corp</td>
<td>MV Atlantic Wind</td>
<td>$900,000</td>
<td>$40,000</td>
<td>$860,000</td>

<td>
<span class="badge bg-warning">Pending</span>
</td>

<td>12 Sep 2026</td>

</tr>

<tr>

<td>SHP-103</td>
<td>CON-103</td>
<td>Agro Traders</td>
<td>MV Blue Marine</td>
<td>$420,000</td>
<td>$20,000</td>
<td>$400,000</td>

<td>
<span class="badge bg-info">Processing</span>
</td>

<td>15 Sep 2026</td>

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
@include('ship-owner.include.footer')
