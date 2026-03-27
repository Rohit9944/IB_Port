<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Cargo\CargoDashboardController;
use App\Http\Controllers\Freight\FreightDashboardController;
use App\Http\Controllers\Ship\ShipDashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'index'])->name('home')->middleware('auth');

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

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

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

Route::prefix('admin-dashboard')->name('admin.')->group(function () {

    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('ai-insights', [AdminDashboardController::class, 'aiInsights'])->name('ai-insights');
    Route::get('analytics', [AdminDashboardController::class, 'analytics'])->name('analytics');

    // Contracts
    Route::get('contracts', [AdminDashboardController::class, 'contractsIndex'])->name('contracts.index');
    Route::get('contracts/add', [AdminDashboardController::class, 'contractsAdd'])->name('contracts.add');
    Route::get('contracts/edit', [AdminDashboardController::class, 'contractsEdit'])->name('contracts.edit');
    Route::get('contracts/view', [AdminDashboardController::class, 'contractsView'])->name('contracts.view');

    // Port Operations
    Route::get('port-operations', [AdminDashboardController::class, 'portOperationsIndex'])->name('port-operations.index');
    Route::get('port-operations/add', [AdminDashboardController::class, 'portOperationsAdd'])->name('port-operations.add');
    Route::get('port-operations/edit', [AdminDashboardController::class, 'portOperationsAdd'])->name('port-operations.edit');
    Route::get('port-operations/view', [AdminDashboardController::class, 'portOperationsView'])->name('port-operations.view');

    Route::get('reports', [AdminDashboardController::class, 'reportsIndex'])->name('reports');

    // RFQ
    Route::get('rfq-requests', [AdminDashboardController::class, 'rfqRequestsIndex'])->name('rfq-requests.index');
    Route::get('rfq-requests/add', [AdminDashboardController::class, 'rfqRequestsAdd'])->name('rfq-requests.add');
    Route::get('rfq-requests/edit', [AdminDashboardController::class, 'rfqRequestsEdit'])->name('rfq-requests.edit');
    Route::get('rfq-requests/view', [AdminDashboardController::class, 'rfqRequestsView'])->name('rfq-requests.view');

    Route::get('settings', [AdminDashboardController::class, 'settingsIndex'])->name('settings');

    // Ship Owners
    Route::get('ship-owners', [AdminDashboardController::class, 'shipOwnersIndex'])->name('ship-owners');
    Route::get('ship-owners/add', [AdminDashboardController::class, 'shipOwnersAdd'])->name('ship-owners.add');
    Route::get('ship-owners/edit', [AdminDashboardController::class, 'shipOwnersEdit'])->name('ship-owners.edit');
    Route::get('ship-owners/view', [AdminDashboardController::class, 'shipOwnersView'])->name('ship-owners.view');

    // Shipments
    Route::get('shipments', [AdminDashboardController::class, 'shipmentsIndex'])->name('shipments.index');
    Route::get('shipments/add', [AdminDashboardController::class, 'shipmentsAdd'])->name('shipments.add');
    Route::get('shipments/edit', [AdminDashboardController::class, 'shipmentsEdit'])->name('shipments.edit');
    Route::get('shipments/view', [AdminDashboardController::class, 'shipments.edit'])->name('shipments.view');

    // Users Cargo Listing
    Route::get('users/cargo-listing', [AdminDashboardController::class, 'usersCargoListingIndex'])->name('users.cargo-listing');
    Route::get('users/cargo-listing/add', [AdminDashboardController::class, 'usersCargoListingAdd'])->name('users.cargo-listing.add');
    Route::get('users/cargo-listing/edit', [AdminDashboardController::class, 'usersCargoListingAdd'])->name('users.cargo-listing.edit');
    Route::get('users/cargo-listing/view', [AdminDashboardController::class, 'shipOwnersView'])->name('users.cargo-listing.view');

    // Users Cargo Owners
    Route::get('users/cargo-owners', [AdminDashboardController::class, 'usersCargoOwnersIndex'])->name('users.cargo-owners');
    Route::get('users/cargo-owners/add', [AuthController::class, 'usersCargoOwnersAdd'])->name('users.cargo-owners.add');
    Route::get('users/cargo-owners/edit', [AdminDashboardController::class, 'usersCargoOwnersEdit'])->name('users.cargo-owners.edit');
    Route::get('users/cargo-owners/view', [AdminDashboardController::class, 'usersCargoOwnersView'])->name('users.cargo-owners.view');
});


/*
|--------------------------------------------------------------------------
| CARGO OWNER
|--------------------------------------------------------------------------
*/

Route::prefix('cargo-owner')->name('cargo.')->group(function () {
    Route::get('/', [CargoDashboardController::class, 'index'])->name('dashboard');
    Route::get('contracts', [CargoDashboardController::class, 'contractsIndex'])->name('contracts.index');
    Route::get('contracts/view', [CargoDashboardController::class, 'contractsView'])->name('contracts.view');
    Route::get('earnings', [AuthController::class, 'earningsIndex'])->name('earnings');
    Route::get('tracking', [CargoDashboardController::class, 'tracking'])->name('tracking');
});


/*
|--------------------------------------------------------------------------
| FREIGHT FORWARDER
|--------------------------------------------------------------------------
*/

Route::prefix('freight-forwarder')->name('freight.')->group(function () {
    Route::get('/', [FreightDashboardController::class, 'index'])->name('dashboard');
    Route::get('shipments', [FreightDashboardController::class, 'shipmentsIndex'])->name('shipments');
    Route::get('tracking', [FreightDashboardController::class, 'tracking'])->name('tracking');
});


/*
|--------------------------------------------------------------------------
| SHIP OWNER
|--------------------------------------------------------------------------
*/

Route::prefix('ship-owner')->name('ship.')->group(function () {
    Route::get('/', [ShipDashboardController::class, 'index'])->name('dashboard');
    Route::get('cargo-requests', [ShipDashboardController::class, 'cargoRequestsIndex'])->name('cargo-requests');
    Route::get('contracts', [ShipDashboardController::class, 'contractsIndex'])->name('contracts');
    Route::get('tracking', [ShipDashboardController::class, 'tracking'])->name('tracking');
});
