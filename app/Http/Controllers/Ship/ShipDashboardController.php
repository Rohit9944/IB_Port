<?php

namespace App\Http\Controllers\Ship;

use App\Http\Controllers\Controller;
use App\Models\Vessel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipDashboardController extends Controller
{
    // Dashboard
    public function index()
    {
        return view('ship-owner.index');
    }

    // Cargo Requests
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

    // Contracts
    public function contractsIndex()
    {
        return view('ship-owner.contracts.index');
    }
    public function contractsView()
    {
        return view('ship-owner.contracts.view');
    }

    // Tracking
    public function tracking()
    {
        return view('ship-owner.tracking.index');
    }

    // Shipments
    public function shipmentsIndex()
    {
        return view('ship-owner.shipments.index');
    }
    public function shipmentsView()
    {
        return view('ship-owner.shipments.view');
    }

    // Port Schedule
    public function portScheduleIndex()
    {
        return view('ship-owner.port-schedule.index');
    }
    public function portScheduleView()
    {
        return view('ship-owner.port-schedule.view');
    }

    // Messages
    public function messages()
    {
        return view('ship-owner.messages.index');
    }

    // Notifications
    public function notifications()
    {
        return view('ship-owner.notifications.index');
    }

    // Offers Sent
    public function offersSentIndex()
    {
        return view('ship-owner.offers-sent.index');
    }
    public function offersSentView()
    {
        return view('ship-owner.offers-sent.view');
    }

    // RFQ Requests
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

    // Settings
    public function settings()
    {
        return view('ship-owner.settings.index');
    }

    // Vessels Management
    public function vesselsIndex()
    {
        $user = auth()->user();
        $vessels = Vessel::forCompany($user->company_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('ship-owner.vessels.index', compact('vessels'));
    }

    public function vesselsStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'imo_number' => 'required|string|max:20|unique:vessels,imo_number',
        ]);

        Vessel::create([
            'company_id' => auth()->user()->company_id,
            'name' => $request->name,
            'type' => $request->type,
            'imo_number' => $request->imo_number,
            'status' => Vessel::STATUS_PENDING,
        ]);

        return redirect()->route('ship.vessels')
            ->with('success', 'Ship submitted for admin approval.');
    }
}
