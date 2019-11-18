<?php

namespace App\Http\Controllers;
use App\Apu;
use App\Total;
use Illuminate\Http\Request;

class ApuController extends Controller
{



    public function store(Request $request)
    {
        $this->validate($request,[
              
          'serial_no' => 'required',
          'no_registration' => 'required'
        ]);
  
       $a = Apu::create([
            
           'serial_no' => $request->serial_no,
           'no_registration' => $request->no_registration,
           'aircraft_id' => $request->aircraft_id,
           'created_at' => $request->created_at,
           'updated_at' => $request->updated_at
          
        ]); 
      //   Total::create([
      //     'apu_id' => $a->id,
      //     'aircraft_id' => $request->aircraft_id,
      //     'csn' => $request->csn,
      //     'tsn' => $request->tsn
         
      //  ]);
  
        return redirect('add-landing')->with( ['aircraft_id' => $request->aircraft_id] );
    }



}
