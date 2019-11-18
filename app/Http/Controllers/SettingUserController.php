<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingUserController extends Controller
{
  public function index()
  {
      return view('user.setting-user');
  }
}
