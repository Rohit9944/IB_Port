<?php

namespace App\Http\Controllers\Cargo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CargoDashboardController extends Controller
{

    public function index()
    {
        return view('cargo-owner.index');
    }

    public function contractsIndex()
    {
        return view('cargo-owner.contracts.index');
    }

    public function contractsView()
    {
        return view('cargo-owner.contracts.view');
    }
    public function earningsIndex()
    {
        return view('cargo-owner.earnings.index');
    }

    public function earningsPaymentHistory()
    {
        return view('cargo-owner.earnings.payment-history');
    }

    public function earningsView()
    {
        return view('cargo-owner.earnings.view');
    }
    public function shipmentsIndex()
    {
        return view('cargo-owner.shipments.index');
    }

    public function shipmentsAdd()
    {
        return view('cargo-owner.shipments.add');
    }

    public function shipmentsEdit()
    {
        return view('cargo-owner.shipments.edit');
    }

    public function shipmentsView()
    {
        return view('cargo-owner.shipments.view');
    }
    public function tracking()
    {
        return view('cargo-owner.tracking.index');
    }
    public function rfqIndex()
    {
        return view('cargo-owner.rfq.index');
    }

    public function rfqAdd()
    {
        return view('cargo-owner.rfq.add');
    }

    public function rfqView()
    {
        return view('cargo-owner.rfq.view');
    }
    public function offersIndex()
    {
        return view('cargo-owner.offers.index');
    }

    public function offersView()
    {
        return view('cargo-owner.offers.view');
    }
    public function messages()
    {
        return view('cargo-owner.messages.index');
    }

    public function notifications()
    {
        return view('cargo-owner.notifications.index');
    }
    public function freightCalculator()
    {
        return view('cargo-owner.freight-calculator.index');
    }

    public function reports()
    {
        return view('cargo-owner.reports.index');
    }

    public function settings()
    {
        return view('cargo-owner.settings.index');
    }
}
