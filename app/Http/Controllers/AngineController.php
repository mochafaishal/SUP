<?php

namespace App\Http\Controllers;
use App\Engine;
use Illuminate\Http\Request;

class AngineController extends Controller
{
  public function index()
  {
      return view('angine.angine');
  }

  public function create()
  {
      return view('angine.add-angine');
  }

  public function store(Request $request)
  {
      $this->validate($request,[
            
        'engine_name' => 'required',
        'serial_no' => 'required',
        'no_registration' => 'required',
      ]);

      Engine::create([

         'engine_name' => $request->engine_name,
         'serial_no' => $request->serial_no,
         'no_registration' => $request->no_registration,
         'created_at' => $request->created_at,
         'updated_at' => $request->updated_at
        
      ]);

      return back();
  }

  public function edit()
  {
      return view('angine.edit-angine');
  }
}
