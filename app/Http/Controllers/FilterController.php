<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchingController extends Controller
{
  public function index()
  {
      return view('searching');
  }
}
