<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceReserveController extends Controller
{
  public function index()
  {
      return view('maintenance-reserve');
  }
}
