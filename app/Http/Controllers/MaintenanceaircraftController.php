<?php

namespace App\Http\Controllers;

use App\Maintenanceaircraft;
use Illuminate\Http\Request;

class MaintenanceaircraftController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
              
          'aircraft_id' => 'required',
          'maintenance_id' => 'required'
        ]);
  
        Maintenanceaircraft::create([
  
           'aircraft_id' => $request->aircraft_id,
           'maintenance_id' => $request->maintenance_id
        ]);
  
        return redirect('aircraft-list');
    }
}
