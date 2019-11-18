<?php

namespace App\Http\Controllers;
use App\Engine1;
use App\Total;
use Illuminate\Http\Request;

class Engine1Controller extends Controller
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
        'no_registration' => 'required'

      ]);

      $a = Engine1::create([

         'engine_name' => $request->engine_name,
         'aircraft_id' => $request->aircraft_id,
         'serial_no' => $request->serial_no,
         'no_registration' => $request->no_registration,
         'created_at' => $request->created_at,
         'updated_at' => $request->updated_at
        
      ]);

      // Total::create([
      //   'engine1_id'=>$a->id,
      //   'aircraft_id' => $request->aircraft_id,
      //   'csn' => $request->csn,
      //   'tsn' => $request->tsn,

      // ]);
        
      return redirect('add-engine2')->with( ['aircraft_id' => $request->aircraft_id] );
  }


  public function edit()
  {
      return view('angine.edit-angine');
  }
}
