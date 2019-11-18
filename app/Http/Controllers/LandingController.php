<?php

namespace App\Http\Controllers;
use App\Landing;
use App\Total;
use Illuminate\Http\Request;

class LandingController extends Controller
{   

    public function store(Request $request)
    {
        $this->validate($request,[
              
          'serial_no' => 'required',
          'no_registration' => 'required'
        ]);
  
        $a = Landing::create([
            
           'serial_no' => $request->serial_no,
           'no_registration' => $request->no_registration,
           'aircraft_id' => $request->aircraft_id,
           'created_at' => $request->created_at,
           'updated_at' => $request->updated_at
          
        ]);
      //   Total::create([
      //     'landing_id' => $a->id,
      //     'aircraft_id' => $request->aircraft_id,
      //     'csn' => $request->csn,
      //     'tsn' => $request->tsn
         
      //  ]);
  
        return redirect('add-maintenance-aircraft')->with( ['aircraft_id' => $request->aircraft_id] );
    }
}
