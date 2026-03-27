<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    if (Auth::attempt($credentials)) {
    $admin = Auth::user();

    if ($admin->role !== 'admin') {
        Auth::logout();
        return back()->with('error', 'Only admin allowed!');
    }

    return redirect()->route('admin.dashboard');
}
}
