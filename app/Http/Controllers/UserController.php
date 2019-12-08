<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

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
  public function store(Request $request)
  {
      $this->validate($request,[
            
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required'
      ]);

      User::create([

         'name' => $request->name,
         'email' => $request->email,
         'password' => Hash::make($request->password),
         'role' => $request->role

      ]);

      return redirect('user');
  }
  public function edit($id)
  {
      $user = User::find($id);
      return view('user.edit-user', ['user' => $user]);
  }

  public function delete($id)
  {
      $user = User::find($id);
      $user->delete();
      return redirect('/user');
  }

  public function update($id, Request $request)
{
    $this->validate($request,[
	 'name' => 'required',
     'email' => 'required',
     'role' => 'required',
     'password' => 'required',
    ]);
 
    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->role = $request->role;
    $user->password = Hash::make($request->password);
    
    $user->save();
    return redirect('/user');
}
}
