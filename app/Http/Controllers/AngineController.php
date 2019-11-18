<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngineController extends Controller
{
  public function index()
  {
      return view('angine');
  }
}
