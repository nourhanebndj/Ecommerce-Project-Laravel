<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role == "admin") {
            return $this->adminDashboard();
        } else {
            return $this->clientDashboard();
        }
    }
    protected function adminDashboard()
{
    return view('admin.dashboard');
}

protected function clientDashboard()
{
    return view('client.dashboard');
}
}