<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['home']]);
    }

    // Home page
    public function home() {
        return view('pages.home');
    }

    // Profile route - Dashboard
    public function dashboard() {
        return view('dashboard.dashboard');
    }

    // Admin Dashboard
    public function adminHome() {
        return view('dashboard.adminDashboard');
    }

}

