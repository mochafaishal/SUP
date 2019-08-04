<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AircraftUtilizationController extends Controller
{
  public function index()
  {
      return view('aircraft-utilization');
  }
}
