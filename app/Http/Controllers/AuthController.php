<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Company;

class AuthController extends Controller
{
    // Show registration form
    public function showRegister()
    {
        return view('auth.register');
    }

    // Handle registration
    public function register(Request $request)
{
    $request->validate([
        'first_name'   => 'required|string|max:255',
        'last_name'    => 'required|string|max:255',
        'email'        => 'required|email|unique:users',
        'company_name' => 'required|string|max:255',
        'company_type' => 'required|in:cargo_owner,ship_owner,broker',
        'country'      => 'required|string|max:100',
        'password'     => 'required|min:6',
    ]);

    DB::beginTransaction();

    try {
        // Create company
        $company = Company::create([
            'name'    => $request->company_name,
            'type'    => $request->company_type,
            'country' => $request->country,
        ]);

        // Create user
        $user = User::create([
            'company_id' => $company->id,
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'name'       => $request->first_name . ' ' . $request->last_name,
            'email'      => $request->email,
            'role'       => $request->company_type,
            'password'   => Hash::make($request->password),
        ]);

        DB::commit();

        // Auto-login
        Auth::login($user);

        // Role-based redirect
        $redirect = match($user->role) {
            'cargo_owner' => redirect()->route('cargo.dashboard'),
            'ship_owner'  => redirect()->route('ship.dashboard'),
            'broker'      => redirect()->route('broker.dashboard'),
            default       => redirect()->route('home'),
        };

        return $redirect->with('success', 'Account created successfully!');

    } catch (\Exception $e) {
        DB::rollBack();
        return back()
            ->with('error', 'Registration failed: ' . $e->getMessage())
            ->withInput();
    }
}

    // Show login form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

       if (Auth::attempt($credentials, $request->boolean('remember'))) {
    $request->session()->regenerate();
    $user = Auth::user();

    // Role-based redirect
    $redirect = match($user->role) {
        'cargo_owner' => redirect()->route('cargo.dashboard'),
        'ship_owner'  => redirect()->route('ship.dashboard'),
        'broker'      => redirect()->route('broker.dashboard'),
        default       => redirect()->route('dashboard'),
    };

    return $redirect->with('success', 'Welcome back!');
}

        return back()->withErrors([
            'email' => 'Invalid credentials'
        ])->onlyInput('email');
    }

    // Show email verification
    public function showVerification()
    {
        return view('auth.verify-email');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}