<?php

namespace App\Http\Controllers\Freight;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreightDashboardController extends Controller
{
    public function index()
    {
        return view('freight-forwarder.index');
    }
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
    public function tracking()
    {
        return view('freight-forwarder.tracking.index');
    }
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
    public function offersReceivedIndex()
    {
        return view('freight-forwarder.offers-received.index');
    }
    public function contractsIndex()
    {
        return view('freight-forwarder.contracts.index');
    }
    public function documents()
    {
        return view('freight-forwarder.document.index');
    }
    public function messages()
    {
        return view('freight-forwarder.messages.index');
    }
    public function analyticsReports()
    {
        return view('freight-forwarder.analytics-reports.index');
    }
    public function payments()
    {
        return view('freight-forwarder.payments.index');
    }
    public function freightCalculator()
    {
        return view('freight-forwarder.freight-calculator.index');
    }
    public function settings()
    {
        return view('freight-forwarder.settings.index');
    }
    public function customsClearanceIndex()
    {
        return view('freight-forwarder.customs-clearance.index');
    }
    public function customsClearanceView()
    {
        return view('freight-forwarder.customs-clearance.view');
    }
}
