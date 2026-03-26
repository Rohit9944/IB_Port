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
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'role'       => 'required|in:cargo_owner,ship_owner,broker',
            'company_name' => 'required_if:role,cargo_owner|nullable|string|max:255',
            'password'   => 'required|min:8|confirmed',
        ]);

        try {
            DB::beginTransaction();

            // Company create
            $companyName = $request->company_name ?? 'N/A';

            $company = Company::create([
                'name' => $companyName,
                'type' => $request->role,
                'country' => 'India',
            ]);

            // User create
            $user = User::create([
                'company_id' => $company->id,
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'name'       => $request->first_name . ' ' . $request->last_name,
                'email'      => $request->email,
                'role'       => $request->role, // ✅ FIXED
                'password'   => Hash::make($request->password),
            ]);

            DB::commit();

            Auth::login($user);

            // ✅ FIXED REDIRECTION FLOW
            if ($user->role === 'cargo_owner') {
                if (!$user->is_prevetting_complete) {
                    return redirect()->route('prevetting.index')->with('info', 'Please complete pre-vetting.');
                }
                return redirect()->route('cargo.dashboard');
            }

            if ($user->role === 'ship_owner') {
                return redirect()->route('ship.dashboard');
            }

            if ($user->role === 'broker') {
                return redirect()->route('freight.dashboard');
            }

            return redirect('/');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()
                ->with('error', 'Registration failed: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            $user = Auth::user();

            // ✅ PREVETTING CHECK
            if ($user->role === 'cargo_owner' && !$user->is_prevetting_complete) {
                return redirect()->route('prevetting.index')->with('info', 'Please complete pre-vetting first.');
            }

            // Role redirect
            if ($user->role === 'cargo_owner') {
                return redirect()->route('cargo.dashboard');
            }

            if ($user->role === 'ship_owner') {
                return redirect()->route('ship.dashboard');
            }

            if ($user->role === 'broker') {
                return redirect()->route('freight.dashboard');
            }

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.'
        ])->onlyInput('email');
    }

    public function showVerification()
    {
        return view('auth.verify-email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
