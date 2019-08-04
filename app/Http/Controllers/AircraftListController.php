<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AircraftListController extends Controller
{
  public function index()
  {
      return view('aircraft-list');
  }
}
