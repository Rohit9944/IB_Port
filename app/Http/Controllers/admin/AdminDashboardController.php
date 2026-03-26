<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return view('admin-dashboard.index');
    }


    /*
    |--------------------------------------------------------------------------
    | AI & ANALYTICS
    |--------------------------------------------------------------------------
    */

    public function aiInsights()
    {
        return view('admin-dashboard.ai-insights.index');
    }

    public function analytics()
    {
        return view('admin-dashboard.analytics.index');
    }


    /*
    |--------------------------------------------------------------------------
    | CONTRACTS
    |--------------------------------------------------------------------------
    */

    public function contractsIndex()
    {
        return view('admin-dashboard.contracts.index');
    }

    public function contractsAdd()
    {
        return view('admin-dashboard.contracts.add');
    }

    public function contractsEdit()
    {
        return view('admin-dashboard.contracts.edit');
    }

    public function contractsView()
    {
        return view('admin-dashboard.contracts.view');
    }


    /*
    |--------------------------------------------------------------------------
    | PORT OPERATIONS
    |--------------------------------------------------------------------------
    */

    public function portOperationsIndex()
    {
        return view('admin-dashboard.port-operations.index');
    }

    public function portOperationsAdd()
    {
        return view('admin-dashboard.port-operations.add');
    }

    public function portOperationsEdit()
    {
        return view('admin-dashboard.port-operations.edit');
    }

    public function portOperationsView()
    {
        return view('admin-dashboard.port-operations.view');
    }


    /*
    |--------------------------------------------------------------------------
    | REPORTS
    |--------------------------------------------------------------------------
    */

    public function reportsIndex()
    {
        return view('admin-dashboard.reports.index');
    }


    /*
    |--------------------------------------------------------------------------
    | RFQ REQUESTS
    |--------------------------------------------------------------------------
    */

    public function rfqRequestsIndex()
    {
        return view('admin-dashboard.rfq-requests.index');
    }

    public function rfqRequestsAdd()
    {
        return view('admin-dashboard.rfq-requests.add');
    }

    public function rfqRequestsEdit()
    {
        return view('admin-dashboard.rfq-requests.edit');
    }

    public function rfqRequestsView()
    {
        return view('admin-dashboard.rfq-requests.view');
    }


    /*
    |--------------------------------------------------------------------------
    | SETTINGS
    |--------------------------------------------------------------------------
    */

    public function settingsIndex()
    {
        return view('admin-dashboard.settings.index');
    }


    /*
    |--------------------------------------------------------------------------
    | SHIP OWNERS
    |--------------------------------------------------------------------------
    */

    public function shipOwnersIndex()
    {
        return view('admin-dashboard.ship-owners.index');
    }

    public function shipOwnersAdd()
    {
        return view('admin-dashboard.ship-owners.add');
    }

    public function shipOwnersEdit()
    {
        return view('admin-dashboard.ship-owners.edit');
    }

    public function shipOwnersView()
    {
        return view('admin-dashboard.ship-owners.view');
    }


    /*
    |--------------------------------------------------------------------------
    | SHIPMENTS
    |--------------------------------------------------------------------------
    */

    public function shipmentsIndex()
    {
        return view('admin-dashboard.shipments.index');
    }

    public function shipmentsAdd()
    {
        return view('admin-dashboard.shipments.add');
    }

    public function shipmentsEdit()
    {
        return view('admin-dashboard.shipments.edit');
    }

    public function shipmentsView()
    {
        return view('admin-dashboard.shipments.view');
    }


    /*
    |--------------------------------------------------------------------------
    | USERS - CARGO LISTING
    |--------------------------------------------------------------------------
    */

    public function usersCargoListingIndex()
    {
        return view('admin-dashboard.users.cargo-listing.index');
    }

    public function usersCargoListingAdd()
    {
        return view('admin-dashboard.users.cargo-listing.add');
    }

    public function usersCargoListingEdit()
    {
        return view('admin-dashboard.users.cargo-listing.edit');
    }

    public function usersCargoListingView()
    {
        return view('admin-dashboard.users.cargo-listing.view');
    }


    /*
    |--------------------------------------------------------------------------
    | USERS - CARGO OWNERS
    |--------------------------------------------------------------------------
    */

    public function usersCargoOwnersIndex()
    {
        return view('admin-dashboard.users.cargo-owners.index');
    }

    public function usersCargoOwnersAdd()
    {
        return view('admin-dashboard.users.cargo-owners.add');
    }

    public function usersCargoOwnersEdit()
    {
        return view('admin-dashboard.users.cargo-owners.edit');
    }

    public function usersCargoOwnersList()
    {
        return view('admin-dashboard.users.cargo-owners.index');
    }

    public function usersCargoOwnersView()
    {
        return view('admin-dashboard.users.cargo-owners.view');
    }


    /*
    |--------------------------------------------------------------------------
    | USERS - FREIGHT FORWARDER
    |--------------------------------------------------------------------------
    */

    public function usersFreightForwarderIndex()
    {
        return view('admin-dashboard.users.freight-forwarder.index');
    }

    public function usersFreightForwarderAdd()
    {
        return view('admin-dashboard.users.freight-forwarder.add');
    }

    public function usersFreightForwarderEdit()
    {
        return view('admin-dashboard.users.freight-forwarder.edit');
    }

    public function usersFreightForwarderView()
    {
        return view('admin-dashboard.users.freight-forwarder.view');
    }


    /*
    |--------------------------------------------------------------------------
    | VESSELS
    |--------------------------------------------------------------------------
    */

    public function vesselsIndex()
    {
        return view('admin-dashboard.vessels.index');
    }

    public function vesselsAdd()
    {
        return view('admin-dashboard.vessels.add');
    }

    public function vesselsEdit()
    {
        return view('admin-dashboard.vessels.edit');
    }

    public function vesselsView()
    {
        return view('admin-dashboard.vessels.view');
    }
}