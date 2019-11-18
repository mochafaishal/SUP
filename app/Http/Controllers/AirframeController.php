<?php

namespace App\Http\Controllers;
use App\Airframe;
use App\Total;
use Illuminate\Http\Request;

class AirframeController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
              
          'serial_no' => 'required',
          'no_registration' => 'required'
          
        ]);

  
        $a = Airframe::create([
            
           'serial_no' => $request->serial_no,
           'no_registration' => $request->no_registration,
           'aircraft_id' => $request->aircraft_id,
           'created_at' => $request->created_at,
           'updated_at' => $request->updated_at
          
        ]);

    //   Total::create([
    //     'airframe_id' => $a->id,
    //     'aircraft_id' => $request->aircraft_id,
    //     'csn' => $request->csn,
    //     'tsn' => $request->tsn
       
    //  ]);
        return redirect('add-apu')->with( ['aircraft_id' => $request->aircraft_id] );

    }

    

    public function index()
    {   
        $airframe = Airframe::all();
        return view('aircraft-list.add-airframe', ['airframe' => $airframe]);
    }
}
