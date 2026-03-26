<div class="sidebar" id="sidebar">
<nav class=" sidebar-offcanvas" id="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
            <a class="nav-link" href="{{ route('cargo.dashboard') }}"><i class="mdi mdi-view-dashboard menu-icon"></i><span class="menu-title">Dashboard</span></a>
      </li>
      
      <li class="nav-item">
            <a href="{{ route('cargo.shipments') }}" class="nav-link"><i class="mdi mdi-ship-wheel menu-icon"></i><span class="menu-title">My Cargo / Shipments</span></a>
      </li>
      <li class="nav-item">
            <a href="{{ route('cargo.shipments') }}" class="nav-link"><i class="mdi mdi-ferry menu-icon"></i><span class="menu-title">Create Shipment</span></a>
      </li>
      <li class="nav-item">
            <a href="{{ route('cargo.rfq') }}" class="nav-link"><i class="mdi mdi-clipboard-text-outline menu-icon"></i><span class="menu-title">RFQs</span></a>
      </li>
      <li class="nav-item">
            <a href="{{ route('cargo.offers') }}" class="nav-link"><i class="mdi mdi-file-sign  menu-icon"></i><span class="menu-title">Offers Received</span></a>
      </li>
      <li class="nav-item"><a class="nav-link" href="{{ route('cargo.contracts') }}"><i class="mdi mdi-truck-delivery-outline menu-icon"></i><span class="menu-title">Contracts</span></a>
        
      </li>
      <li class="nav-item">
            <a href="{{ route('cargo.tracking') }}" class="nav-link"><i class="mdi mdi-crane menu-icon"></i><span class="menu-title">Tracking</span></a>
      </li>
      <li class="nav-item">
            <a href="{{ route('cargo.freight-calculator') }}" class="nav-link"><i class="mdi mdi-chart-bar menu-icon"></i><span class="menu-title">Freight Calculator</span></a>
      </li>
      <li class="nav-item">
            <a href="{{ route('cargo.messages') }}" class="nav-link"><i class="mdi mdi-file-chart-outline menu-icon"></i><span class="menu-title">Messages</span></a>
      </li> 
      <li class="nav-item">
            <a href="{{ route('cargo.reports') }}" class="nav-link"><i class="mdi mdi-file-chart-outline menu-icon"></i><span class="menu-title">Analytics & Reports</span></a>
      </li>  
      <li class="nav-item">
            <a href="{{ route('cargo.reports') }}" class="nav-link"><i class="mdi mdi-file-chart-outline menu-icon"></i><span class="menu-title">Payments</span></a>
      </li>      
      <li class="nav-item">
            <a href="{{ route('cargo.settings') }}" class="nav-link"><i class="mdi mdi mdi-cog menu-icon"></i><span class="menu-title">Settings</span></a>
      </li>
<li class="nav-item">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="nav-link btn btn-link text-start w-100">
            <i class="mdi mdi-logout menu-icon"></i>
            <span class="menu-title">Logout</span>
        </button>
    </form>
</li>
    </ul>
  </nav>
  </div>