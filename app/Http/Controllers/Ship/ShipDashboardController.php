<?php

namespace App\Http\Controllers\Ship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShipDashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return view('ship-owner.index');
    }


    /*
    |--------------------------------------------------------------------------
    | CARGO REQUESTS
    |--------------------------------------------------------------------------
    */

    public function cargoRequestsIndex()
    {
        return view('ship-owner.cargo-requests.index');
    }

    public function cargoRequestsAdd()
    {
        return view('ship-owner.cargo-requests.add');
    }

    public function cargoRequestsEdit()
    {
        return view('ship-owner.cargo-requests.edit');
    }

    public function cargoRequestsView()
    {
        return view('ship-owner.cargo-requests.view');
    }


    /*
    |--------------------------------------------------------------------------
    | CONTRACTS
    |--------------------------------------------------------------------------
    */

    public function contractsIndex()
    {
        return view('ship-owner.contracts.index');
    }

    public function contractsView()
    {
        return view('ship-owner.contracts.view');
    }


    /*
    |--------------------------------------------------------------------------
    | EARNINGS
    |--------------------------------------------------------------------------
    */

    public function earningsIndex()
    {
        return view('ship-owner.earnings.index');
    }

    public function earningsPaymentHistory()
    {
        return view('ship-owner.earnings.payment-history');
    }

    public function earningsView()
    {
        return view('ship-owner.earnings.view');
    }


    /*
    |--------------------------------------------------------------------------
    | COMMUNICATION
    |--------------------------------------------------------------------------
    */

    public function messages()
    {
        return view('ship-owner.messages.index');
    }

    public function notifications()
    {
        return view('ship-owner.notifications.index');
    }


    /*
    |--------------------------------------------------------------------------
    | OFFERS
    |--------------------------------------------------------------------------
    */

    public function offersSentIndex()
    {
        return view('ship-owner.offers-sent.index');
    }

    public function offersSentView()
    {
        return view('ship-owner.offers-sent.view');
    }


    /*
    |--------------------------------------------------------------------------
    | PORT SCHEDULE
    |--------------------------------------------------------------------------
    */

    public function portScheduleIndex()
    {
        return view('ship-owner.port-schedule.index');
    }

    public function portScheduleView()
    {
        return view('ship-owner.port-schedule.view');
    }


    /*
    |--------------------------------------------------------------------------
    | REPORTS
    |--------------------------------------------------------------------------
    */

    public function reports()
    {
        return view('ship-owner.reports.index');
    }


    /*
    |--------------------------------------------------------------------------
    | RFQ REQUESTS
    |--------------------------------------------------------------------------
    */

    public function rfqRequestsIndex()
    {
        return view('ship-owner.rfq-requests.index');
    }

    public function rfqRequestsAdd()
    {
        return view('ship-owner.rfq-requests.add');
    }

    public function rfqRequestsEdit()
    {
        return view('ship-owner.rfq-requests.edit');
    }

    public function rfqRequestsView()
    {
        return view('ship-owner.rfq-requests.view');
    }


    /*
    |--------------------------------------------------------------------------
    | SETTINGS
    |--------------------------------------------------------------------------
    */

    public function settings()
    {
        return view('ship-owner.settings.index');
    }


    /*
    |--------------------------------------------------------------------------
    | SHIPMENTS
    |--------------------------------------------------------------------------
    */

    public function shipmentsIndex()
    {
        return view('ship-owner.shipments.index');
    }

    public function shipmentsView()
    {
        return view('ship-owner.shipments.view');
    }


    /*
    |--------------------------------------------------------------------------
    | TRACKING
    |--------------------------------------------------------------------------
    */

    public function tracking()
    {
        return view('ship-owner.tracking.index');
    }


    /*
    |--------------------------------------------------------------------------
    | VESSELS
    |--------------------------------------------------------------------------
    */

    public function vesselsIndex()
    {
        return view('ship-owner.vessels.index');
    }

    public function vesselsAdd()
    {
        return view('ship-owner.vessels.add');
    }

    public function vesselsEdit()
    {
        return view('ship-owner.vessels.edit');
    }

    public function vesselsView()
    {
        return view('ship-owner.vessels.view');
    }
}