<?php

namespace App\Http\Controllers;

use App\Maintenance;
use Illuminate\Http\Request;


class MaintenanceController extends Controller
{
  public function index()
  {
    	
    	$maintenance = Maintenance::all();
      return view('maintenance.maintenance', ['maintenance' => $maintenance]);
  }

  public function create()
  {
      return view('maintenance.add-maintenance');
  }

  public function store(Request $request)
  {
      $this->validate($request,[
            
        'maintenance_name' => 'required',
        'maintenance_type' => 'required',
        'implementation' => 'required',
        'payment_type' => 'required',
        'reserve_rate' => 'required',
        'estimed_cost' => 'required'
      ]);

      Maintenance::create([

         'maintenance_name' => $request->maintenance_name,
         'maintenance_type' => $request->maintenance_type,
         'implementation' => $request->implementation,
         'payment_type' => $request->payment_type,
         'reserve_rate' => $request->reserve_rate,
         'estimed_cost' => $request->estimed_cost
      ]);

      return redirect('maintenance');
  }

  public function edit()
  {
   	  return view('maintenance.edit-maintenance');
  }

  public function delete($id)
  {
      $maintenance = Maintenance::find($id);
      $maintenance->delete();
      return redirect('/maintenance');
  }
}
