<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index($id)
  {
      $user = User::find($id);
      return view('user.profile', ['user' => $user]);
  }
}
