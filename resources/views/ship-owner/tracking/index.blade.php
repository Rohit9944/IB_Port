
@include('ship-owner.include.header')
<!-- Leaflet Map -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"/>

<style>
#map {
    height: 500px;
    border-radius: 10px;
}
.info-card {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 999;
    width: 300px;
}
</style>


<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">Live Ship Tracking</h1>
      </div>
      
    </div>


    <div class="row flex-grow">
       
        <div class="position-relative">

        <!-- Map -->
        <div id="map"></div>

        <!-- Info Card -->
        <div class="card shadow info-card p-3">
            <h6>Vessel Info</h6>
            <p class="mb-1"><strong>Name:</strong> MV Ocean Star</p>
            <p class="mb-1"><strong>Status:</strong> <span class="badge bg-success">In Transit</span></p>
            <p class="mb-1"><strong>Speed:</strong> 14 knots</p>
            <p class="mb-1"><strong>ETA:</strong> 20 Mar 2026</p>
        </div>

    </div>

    <div class="row mt-5">
         <h3 class="mb-4">Shipment Tracking</h3>
        <div class="card">
            <h5>Shipment Details</h5>
            <p><strong>Vessel:</strong> MV Ocean Star</p>
            <p><strong>Route:</strong> Mumbai → Dubai</p>
            <p><strong>Cargo:</strong> Coal (30,000 MT)</p>
            <p><strong>Status:</strong> <span class="badge bg-success">In Transit</span></p>
        </div>
        <!-- Timeline -->
        <div class="card p-4">

            <h5 class="mb-4">Tracking Timeline</h5>

            <div class="timeline">

                <div class="timeline-item completed">
                    <h6>Loading Completed</h6>
                    <p>01 Mar 2026 - Mumbai Port</p>
                </div>

                <div class="timeline-item completed">
                    <h6>Departed Port</h6>
                    <p>02 Mar 2026</p>
                </div>

                <div class="timeline-item">
                    <h6>In Transit</h6>
                    <p>Currently sailing...</p>
                </div>

                <div class="timeline-item pending">
                    <h6>Arriving at Destination</h6>
                    <p>Expected: 20 Mar 2026</p>
                </div>

                <div class="timeline-item pending">
                    <h6>Delivered</h6>
                    <p>Pending</p>
                </div>

            </div>

        </div>
    </div>

    </div>

  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>

  
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

<script>
var map = L.map('map').setView([20.5937, 78.9629], 4);

// Tile
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap'
}).addTo(map);

// Ship Marker
var shipIcon = L.icon({
    iconUrl: 'https://cdn-icons-png.flaticon.com/512/68/68636.png',
    iconSize: [40, 40]
});

var marker = L.marker([19.0760, 72.8777], {icon: shipIcon}).addTo(map)
    .bindPopup("MV Ocean Star - Mumbai");

// Simulate movement
setInterval(function () {
    var lat = marker.getLatLng().lat + (Math.random() - 0.5) * 0.5;
    var lng = marker.getLatLng().lng + (Math.random() - 0.5) * 0.5;
    marker.setLatLng([lat, lng]);
}, 3000);
</script>
@include('ship-owner.include.footer')

                    

  