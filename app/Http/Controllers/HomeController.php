<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aircraft;
use App\User;
use App\Maintenance;
use App\Maintenancereserve;

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
        $aircraft = Aircraft::all();
        $maintenance = Maintenance::all();
        $maintenancereserve = Maintenancereserve::All();
        $user = User::All();

        return view('home', ['aircraft' => $aircraft, 'maintenance' => $maintenance, 'maintenancereserve' => $maintenancereserve, 'user' => $user]);
    }

  
}
