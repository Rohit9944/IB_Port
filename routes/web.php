<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\VesselController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Cargo\CargoDashboardController;
use App\Http\Controllers\Freight\FreightDashboardController;
use App\Http\Controllers\Ship\ShipDashboardController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminVesselController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('about-us', [PageController::class, 'aboutUs'])->name('about');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('services/{id}', [PageController::class, 'serviceDetail'])->name('services.details');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('tnc', [PageController::class, 'tnc'])->name('tnc');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('blog/{id}', [PageController::class, 'blogDetail'])->name('blog.details');
Route::get('tracker', [PageController::class, 'tracker'])->name('tracker');

// Auth Routes - Guest only for login/register
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Logout - Auth required
Route::middleware('auth')->post('/logout', [AuthController::class, 'logout'])->name('logout');

// Pre-vetting
Route::middleware(['auth', 'role:cargo_owner'])->group(function () {
    Route::get('/pre-vetting', [App\Http\Controllers\PreVettingController::class, 'index'])->name('prevetting.index');
    Route::post('/pre-vetting', [App\Http\Controllers\PreVettingController::class, 'store'])->name('prevetting.store');
});

// Password Reset Routes
Route::get('/forgot-password', [App\Http\Controllers\ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');
Route::post('/forgot-password', [App\Http\Controllers\ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');
Route::get('/reset-password/{token}', [App\Http\Controllers\ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');
Route::post('/reset-password', [App\Http\Controllers\ResetPasswordController::class, 'reset'])
    ->name('password.update');

// Email Verification Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/')->with('success', 'Email verified! Welcome aboard.');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {

    // Admin Login
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AdminAuthController::class, 'showLogin'])->name('login');
        Route::post('login', [AdminAuthController::class, 'authenticate'])->name('login.authenticate');
    });

    // Admin Protected
    Route::middleware('auth:admin')->group(function () {

        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');

        Route::get('ai-insights', [AdminDashboardController::class, 'aiInsights'])->name('ai-insights');
        Route::get('analytics', [AdminDashboardController::class, 'analytics'])->name('analytics');
        Route::get('contracts', [AdminDashboardController::class, 'contractsIndex'])->name('contracts.index');
        Route::get('contracts/add', [AdminDashboardController::class, 'contractsAdd'])->name('contracts.add');
        Route::get('contracts/edit', [AdminDashboardController::class, 'contractsEdit'])->name('contracts.edit');
        Route::get('contracts/view', [AdminDashboardController::class, 'contractsView'])->name('contracts.view');
        Route::get('port-operations', [AdminDashboardController::class, 'portOperationsIndex'])->name('port-operations.index');
        Route::get('port-operations/add', [AdminDashboardController::class, 'portOperationsAdd'])->name('port-operations.add');
        Route::get('port-operations/edit', [AdminDashboardController::class, 'portOperationsEdit'])->name('port-operations.edit');
        Route::get('port-operations/view', [AdminDashboardController::class, 'portOperationsView'])->name('port-operations.view');
        Route::get('reports', [AdminDashboardController::class, 'reportsIndex'])->name('reports');
        Route::get('rfq-requests', [AdminDashboardController::class, 'rfqRequestsIndex'])->name('rfq-requests.index');
        Route::get('rfq-requests/add', [AdminDashboardController::class, 'rfqRequestsAdd'])->name('rfq-requests.add');
        Route::get('rfq-requests/edit', [AdminDashboardController::class, 'rfqRequestsEdit'])->name('rfq-requests.edit');
        Route::get('rfq-requests/view', [AdminDashboardController::class, 'rfqRequestsView'])->name('rfq-requests.view');
        Route::get('settings', [AdminDashboardController::class, 'settingsIndex'])->name('settings');
        Route::get('ship-owners', [AdminDashboardController::class, 'shipOwnersIndex'])->name('ship-owners');
        Route::get('shipments', [AdminDashboardController::class, 'shipmentsIndex'])->name('shipments.index');
        Route::get('shipments/add', [AdminDashboardController::class, 'shipmentsAdd'])->name('shipments.add');
        Route::get('shipments/edit', [AdminDashboardController::class, 'shipmentsEdit'])->name('shipments.edit');
        Route::get('shipments/view', [AdminDashboardController::class, 'shipmentsView'])->name('shipments.view');
        Route::get('users/cargo-listing', [AdminDashboardController::class, 'usersCargoListingIndex'])->name('users.cargo-listing');
        Route::get('users/cargo-owners', [AdminDashboardController::class, 'usersCargoOwnersIndex'])->name('users.cargo-owners');
        Route::get('users/freight-forwarder', [AdminDashboardController::class, 'usersFreightForwarderIndex'])->name('users.freight-forwarder');
        Route::get('vessels', [AdminVesselController::class, 'index'])->name('vessels.index');
        Route::get('vessels/{vessel}', [AdminVesselController::class, 'show'])->name('vessels.show');
        Route::get('vessels/pending', [AdminVesselController::class, 'pending'])->name('vessels.pending');
        Route::post('vessels/{vessel}/approve', [AdminVesselController::class, 'approve'])->name('vessels.approve');
        Route::post('vessels/{vessel}/reject', [AdminVesselController::class, 'reject'])->name('vessels.reject');
    });
});



/*
|--------------------------------------------------------------------------
| CARGO OWNER
|--------------------------------------------------------------------------
*/

Route::prefix('cargo-owner')
    ->name('cargo.')
    ->middleware(['auth', 'role:cargo_owner'])
    ->group(function () {
        Route::get('/', [CargoDashboardController::class, 'index'])->name('dashboard');
        Route::get('contracts', [CargoDashboardController::class, 'contractsIndex'])->name('contracts');
        Route::get('contracts/view', [CargoDashboardController::class, 'contractsView'])->name('contracts.view');
        Route::get('earnings', [CargoDashboardController::class, 'earningsIndex'])->name('earnings');
        Route::get('earnings/payment-history', [CargoDashboardController::class, 'earningsPaymentHistory'])->name('earnings.payment-history');
        Route::get('earnings/view', [CargoDashboardController::class, 'earningsView'])->name('earnings.view');
        Route::get('shipments', [CargoDashboardController::class, 'shipmentsIndex'])->name('shipments');
        Route::get('shipments/add', [CargoDashboardController::class, 'shipmentsAdd'])->name('shipments.add');
        Route::get('shipments/edit', [CargoDashboardController::class, 'shipmentsEdit'])->name('shipments.edit');
        Route::get('shipments/view', [CargoDashboardController::class, 'shipmentsView'])->name('shipments.view');
        Route::get('tracking', [CargoDashboardController::class, 'tracking'])->name('tracking');
        Route::get('rfq', [CargoDashboardController::class, 'rfqIndex'])->name('rfq');
        Route::get('rfq/add', [CargoDashboardController::class, 'rfqAdd'])->name('rfq.add');
        Route::get('rfq/view', [CargoDashboardController::class, 'rfqView'])->name('rfq.view');
        Route::get('offers', [CargoDashboardController::class, 'offersIndex'])->name('offers');
        Route::get('offers/view', [CargoDashboardController::class, 'offersView'])->name('offers.view');
        Route::get('messages', [CargoDashboardController::class, 'messages'])->name('messages');
        Route::get('notifications', [CargoDashboardController::class, 'notifications'])->name('notifications');
        Route::get('reports', [CargoDashboardController::class, 'reports'])->name('reports');
        Route::get('freight-calculator', [CargoDashboardController::class, 'freightCalculator'])->name('freight-calculator');
        Route::get('settings', [CargoDashboardController::class, 'settings'])->name('settings');
    });



Route::prefix('freight-forwarder')
    ->name('freight.')
    ->middleware(['auth', 'role:broker'])
    ->group(function () {
        Route::get('/', [FreightDashboardController::class, 'index'])->name('dashboard');
        Route::get('shipments', [FreightDashboardController::class, 'shipmentsIndex'])->name('shipments');
        Route::get('shipments/add', [FreightDashboardController::class, 'shipmentsAdd'])->name('shipments.add');
        Route::get('shipments/edit', [FreightDashboardController::class, 'shipmentsEdit'])->name('shipments.edit');
        Route::get('shipments/view', [FreightDashboardController::class, 'shipmentsView'])->name('shipments.view');
        Route::get('tracking', [FreightDashboardController::class, 'tracking'])->name('tracking');
        Route::get('rfqs', [FreightDashboardController::class, 'rfqManagementIndex'])->name('rfqs');
        Route::get('rfqs/add', [FreightDashboardController::class, 'rfqManagementAdd'])->name('rfqs.add');
        Route::get('rfqs/view', [FreightDashboardController::class, 'rfqManagementView'])->name('rfqs.view');
        Route::get('offers-received', [FreightDashboardController::class, 'offersReceivedIndex'])->name('offers-received');
        Route::get('contracts', [FreightDashboardController::class, 'contractsIndex'])->name('contracts');
        Route::get('documents', [FreightDashboardController::class, 'documents'])->name('documents');
        Route::get('messages', [FreightDashboardController::class, 'messages'])->name('messages');
        Route::get('analytics-reports', [FreightDashboardController::class, 'analyticsReports'])->name('analytics-reports');
        Route::get('payments', [FreightDashboardController::class, 'payments'])->name('payments');
        Route::get('freight-calculator', [FreightDashboardController::class, 'freightCalculator'])->name('freight-calculator');
        Route::get('settings', [FreightDashboardController::class, 'settings'])->name('settings');
        Route::get('customs-clearance', [FreightDashboardController::class, 'customsClearanceIndex'])->name('customs-clearance');
    });


/*
|--------------------------------------------------------------------------
| SHIP OWNER
|--------------------------------------------------------------------------
*/
Route::prefix('ship-owner')
    ->name('ship.')
    ->middleware(['auth', 'role:ship_owner'])
    ->group(function () {
        Route::get('/', [ShipDashboardController::class, 'index'])->name('dashboard');
        Route::get('cargo-requests', [ShipDashboardController::class, 'cargoRequestsIndex'])->name('cargo-requests');
        Route::get('cargo-requests/add', [ShipDashboardController::class, 'cargoRequestsAdd'])->name('cargo-requests.add');
        Route::get('cargo-requests/edit', [ShipDashboardController::class, 'cargoRequestsEdit'])->name('cargo-requests.edit');
        Route::get('cargo-requests/view', [ShipDashboardController::class, 'cargoRequestsView'])->name('cargo-requests.view');
        Route::get('contracts', [ShipDashboardController::class, 'contractsIndex'])->name('contracts');
        Route::get('contracts/view', [ShipDashboardController::class, 'contractsView'])->name('contracts.view');
        Route::get('tracking', [ShipDashboardController::class, 'tracking'])->name('tracking');
        Route::get('shipments', [ShipDashboardController::class, 'shipmentsIndex'])->name('shipments');
        Route::get('shipments/view', [ShipDashboardController::class, 'shipmentsView'])->name('shipments.view');
        Route::get('port-schedule', [ShipDashboardController::class, 'portScheduleIndex'])->name('port-schedule');
        Route::get('port-schedule/view', [ShipDashboardController::class, 'portScheduleView'])->name('port-schedule.view');
        Route::get('messages', [ShipDashboardController::class, 'messages'])->name('messages');
        Route::get('notifications', [ShipDashboardController::class, 'notifications'])->name('notifications');
        Route::get('offers-sent', [ShipDashboardController::class, 'offersSentIndex'])->name('offers-sent');
        Route::get('offers-sent/view', [ShipDashboardController::class, 'offersSentView'])->name('offers-sent.view');
        Route::get('rfq-requests', [ShipDashboardController::class, 'rfqRequestsIndex'])->name('rfq-requests');
        Route::get('rfq-requests/add', [ShipDashboardController::class, 'rfqRequestsAdd'])->name('rfq-requests.add');
        Route::get('rfq-requests/edit', [ShipDashboardController::class, 'rfqRequestsEdit'])->name('rfq-requests.edit');
        Route::get('rfq-requests/view', [ShipDashboardController::class, 'rfqRequestsView'])->name('rfq-requests.view');
        Route::get('settings', [ShipDashboardController::class, 'settings'])->name('settings');
        Route::resource('vessels', VesselController::class);
    });
