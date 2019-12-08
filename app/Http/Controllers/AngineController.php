<?php

namespace App\Http\Controllers;
use App\Engine1;
use Illuminate\Http\Request;

class AngineController extends Controller
{
  public function index()
  {
      $engine1 = Engine1::all();
      return view('angine.engine', ['engine1' => $engine1]);

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

      Engine1::create([

         'engine_name' => $request->engine_name,
         'serial_no' => $request->serial_no,
         'no_registration' => $request->no_registration,
         'created_at' => $request->created_at,
         'updated_at' => $request->updated_at
        
      ]);

      return redirect('/engine');
  }

  public function edit($id)
  {
      $engine1 = Engine1::find($id);
      return view('angine.edit-angine', ['engine1' => $engine1]);
  }

  public function delete($id)
  {
      $engine1 = Engine1::find($id);
      $engine1->delete();
      return redirect('/engine');
  }
  public function update($id, Request $request)
  {
      $this->validate($request,[
        'engine_name' => 'required',
        'serial_no' => 'required',
        'no_registration' => 'required',
      ]);
   
      $engine1 = Engine1::find($id);
      $engine1->engine_name = $request->engine_name;
      $engine1->serial_no = $request->serial_no;
      $engine1->no_registration = $request->no_registration;
      
      $engine1->save();
      return redirect('/engine');
  }
}
