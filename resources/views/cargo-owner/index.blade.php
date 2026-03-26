@include('cargo-owner.include.header')
<div class="container-fluid page-body-wrapper">
    @include('cargo-owner.include.sidebar')

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
                                    <p class="text-sm mb-0 text-capitalize">Active Shipments</p>
                                    <h4 class="mb-0">1,240</h4>
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
                                    <p class="text-sm mb-0 text-capitalize">Open RFQs</p>
                                    <h4 class="mb-0">230</h4>
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
                                    <p class="text-sm mb-0 text-capitalize">Offers Received</p>
                                    <h4 class="mb-0">100</h4>
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
                                    <p class="text-sm mb-0 text-capitalize">Total Spend</p>
                                    <h4 class="mb-0">$1.2M</h4>
                                </div>
                                <div class="icon icon-md icon-shape">
                                    <i class="mdi mdi-sale"></i>
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
                                    <p class="text-sm mb-0 text-capitalize">Avg Freight Rate</p>
                                    <h4 class="mb-0">$27/MT</h4>
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
                                <div class="row mb-3">
                                    <!-- Card 1 -->
                                    <div class="col-lg-8">
                                        <div class="dashboard-card border shadow-none">
                                            <div class="title cardsTitle">Monthly Shipping Cost</div>
                                            
                                                <canvas id="costChart"></canvas>
                                            
                                        </div>
                                        <div class="dashboard-card border mt-4 shadow-none">

                                            <div class="title cardsTitle">Shipment Volume</div>

                                            <canvas id="volumeChart"></canvas>

                                        </div>
                                    </div>


                                    <!-- Card 2 -->
                                   
                                    <div class="col-lg-4">
                                        <div class="dashboard-card border shadow-none">
                                            <div class="title cardsTitle">Monthly Shipping Cost</div>
                                            <canvas id="routesChart"></canvas>
                                        </div>

                                         <!-- Recent RFQs -->
                                    <div class="col-md-12">
                                        <div class="card p-3 border my-4">
                                            <h4 class="fw-bold">Recent RFQs</h4>

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    Coal - Mumbai → Dubai<br>
                                                    <small class="text-muted">2 days ago</small>
                                                </li>

                                                <li class="list-group-item">
                                                    Grain - India → Singapore<br>
                                                    <small class="text-muted">3 days ago</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Latest Offers -->
                                    <div class="col-md-12">
                                        <div class="card p-3 border my-4">
                                            <h4 class="fw-bold">Latest Offers</h4>

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    MV Ocean Star - $25/MT<br>
                                                    <small class="text-success">Best Price</small>
                                                </li>

                                                <li class="list-group-item">
                                                    MV Blue Wave - $28/MT<br>
                                                    <small class="text-muted">Standard</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Notifications -->
                                    <div class="col-md-12">
                                        <div class="card p-3 border my-4">
                                            <h4 class="fw-bold">Notifications</h4>

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    New offer received
                                                </li>

                                                <li class="list-group-item">
                                                    Contract signed successfully
                                                </li>

                                                <li class="list-group-item">
                                                    Shipment departed
                                                </li>
                                            </ul>
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


@include('cargo-owner.include.footer')


<script>

    // Monthly Cost Chart
    new Chart(document.getElementById('costChart'), {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Cost',
                data: [20000, 40000, 30000, 50000, 70000],
                fill: true,
                tension: 0.4
            }]
        }
    });

    // Shipment Volume
    new Chart(document.getElementById('volumeChart'), {
        type: 'bar',
        data: {
            labels: ['Bulk', 'Liquid', 'Container'],
            datasets: [{
                label: 'Volume',
                data: [120, 80, 60]
            }]
        }
    });

    // Top Routes
    new Chart(document.getElementById('routesChart'), {
        type: 'pie',
        data: {
            labels: ['Mumbai-Dubai', 'India-Singapore', 'China-Europe'],
            datasets: [{
                data: [40, 35, 25]
            }]
        }
    });

</script>