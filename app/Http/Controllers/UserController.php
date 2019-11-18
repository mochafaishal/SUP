<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function index()
  {   
      $user = User::all();
    	return view('user.user',['user' => $user]);
  }

  public function create()
  {
      return view('user.add-user');
  }

  public function edit()
  {
      return view('user.edit-user');
  }

  public function delete($id)
  {
      $user = User::find($id);
      $user->delete();
      return redirect('/user');
  }
}
