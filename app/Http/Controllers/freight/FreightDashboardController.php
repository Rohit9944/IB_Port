<?php

namespace App\Http\Controllers\Freight;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreightDashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return view('freight-forwarder.index');
    }


    /*
    |--------------------------------------------------------------------------
    | CUSTOMS CLEARANCE
    |--------------------------------------------------------------------------
    */

    public function customsClearanceIndex()
    {
        return view('freight-forwarder.customs-clearance.index');
    }

    public function customsClearanceView()
    {
        return view('freight-forwarder.customs-clearance.view');
    }


    /*
    |--------------------------------------------------------------------------
    | DOCUMENTS
    |--------------------------------------------------------------------------
    */

    public function document()
    {
        return view('freight-forwarder.document.index');
    }


    /*
    |--------------------------------------------------------------------------
    | COMMUNICATION
    |--------------------------------------------------------------------------
    */

    public function messages()
    {
        return view('freight-forwarder.messages.index');
    }


    /*
    |--------------------------------------------------------------------------
    | RFQ MANAGEMENT
    |--------------------------------------------------------------------------
    */

    public function rfqManagementIndex()
    {
        return view('freight-forwarder.rfq-management.index');
    }

    public function rfqManagementAdd()
    {
        return view('freight-forwarder.rfq-management.add');
    }

    public function rfqManagementView()
    {
        return view('freight-forwarder.rfq-management.view');
    }


    /*
    |--------------------------------------------------------------------------
    | SETTINGS
    |--------------------------------------------------------------------------
    */

    public function settings()
    {
        return view('freight-forwarder.settings.index');
    }


    /*
    |--------------------------------------------------------------------------
    | SHIPMENTS
    |--------------------------------------------------------------------------
    */

    public function shipmentsIndex()
    {
        return view('freight-forwarder.shipments.index');
    }

    public function shipmentsAdd()
    {
        return view('freight-forwarder.shipments.add');
    }

    public function shipmentsEdit()
    {
        return view('freight-forwarder.shipments.edit');
    }

    public function shipmentsView()
    {
        return view('freight-forwarder.shipments.view');
    }


    /*
    |--------------------------------------------------------------------------
    | TRACKING
    |--------------------------------------------------------------------------
    */

    public function tracking()
    {
        return view('freight-forwarder.tracking.index');
    }
}