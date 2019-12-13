<?php

namespace App\Http\Controllers;

use App\Aircraft;
use App\Engine;
use App\Engine1;
use App\Engine2;
use App\Airframe;
use App\Apu;
use App\Landing;
use App\Maintenance;
use App\Total;
use App\Maintenanceaircraft;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class AircraftListController extends Controller
{
  public function index()
  {   
      $aircraft = Aircraft::all();
      return view('aircraft-list.aircraft-list', ['aircraft' => $aircraft]);
  }

  public function list()
  {   
      $aircraft = Aircraft::all();
      $id = session()->get('aircraft_id');
      
      return view('aircraft-list.add-airframe', ['aircraft' => $aircraft, 'aircraft_id' => $id]);
  }

  public function listapu()
  {   
      $aircraft = Aircraft::all();
      $id = session()->get('aircraft_id');
      return view('aircraft-list.add-apu', ['aircraft' => $aircraft, 'aircraft_id' => $id]);
  }

  public function listlanding()
  {   
      $aircraft = Aircraft::all();
      $id = session()->get('aircraft_id');
      return view('aircraft-list.add-landing', ['aircraft' => $aircraft, 'aircraft_id' => $id]);
  }

  public function listengine1()
  {   
      $aircraft = Aircraft::all();
      
      $id = session()->get('aircraft_id');
      return view('aircraft-list.add-engine1', ['aircraft' => $aircraft, 'aircraft_id' => $id]);
  }

  public function listengine2()
  {   
      $aircraft = Aircraft::all();

      $id = session()->get('aircraft_id');
      return view('aircraft-list.add-engine2', ['aircraft' => $aircraft, 'aircraft_id' => $id] );
  }

  public function listmaintenance()
  {   
      $aircraft = Aircraft::all();
      $maintenance = Maintenance::All();

      $id = session()->get('aircraft_id');
      return view('aircraft-list.add-maintenance-aircraft', ['aircraft' => $aircraft, 'maintenance' => $maintenance,'aircraft_id' => $id] );
  }
  
  public function create()
  {
      return view('aircraft-list.add-aircraft');
  }

  public function store(Request $request)
  {
      $this->validate($request,[
            
        'asset_name' => 'required',
        'equipment_type' => 'required',
        'serial_no' => 'required',
        'no_registration' => 'required',
        'lease_status' => 'required',
        'lessor' => 'required',
        'start_date' => 'required',
        'end_date' => 'required'
      ]);

      $aircraft = Aircraft::create([

         'asset_name' => $request->asset_name,
         'equipment_type' => $request->equipment_type,
         'serial_no' => $request->serial_no,
         'no_registration' => $request->no_registration,
         'lease_status' => $request->lease_status,
         'lessor' => $request->lessor,
         'start_date' => $request->start_date,
         'end_date' => $request->end_date,
         'updated_at' => $request->updated_at,
         'created_at' => $request->created_at
      ]);
        
      return redirect('add-engine1')->with( ['aircraft_id' => $aircraft->id] );
  }


  public function detail($id)
  {
      
        $aircraft = Aircraft::find($id);
    
        $startdate = new Carbon($aircraft->start_date);
        $enddate = new Carbon($aircraft->end_date);
        $i=$enddate->year-$startdate->year;

        $total = Total::where('aircraft_id',$aircraft->id)->where('engine1_id',$aircraft->engine1->id)->latest()->first();
        $totalengine2 = Total::where('aircraft_id',$aircraft->id)->where('engine2_id',$aircraft->engine2->id)->latest()->first();
        $totalairframe = Total::where('aircraft_id',$aircraft->id)->where('airframe_id',$aircraft->airframe->id)->latest()->first();
        $totalapu = Total::where('aircraft_id',$aircraft->id)->where('apu_id',$aircraft->apu->id)->latest()->first();
        $totallanding= Total::where('aircraft_id',$aircraft->id)->where('landing_id',$aircraft->landing->id)->latest()->first();

        return view('aircraft-list.detail-aircraft',['aircraft' => $aircraft,'i'=>$i, 'total' => $total, 'totalengine2' => $totalengine2, 'totalairframe' => $totalairframe, 'totalapu' => $totalapu, 'totallanding' => $totallanding]);     
  }

  public function delete($id)
  {
      $aircraft = Aircraft::find($id);
      $aircraft->delete();
      return redirect('/aircraft-list');
  }



//   edit aircrfat komponen

    public function edit($id)
    {    
        $aircraft = Aircraft::find($id);
        return view('aircraft-list.edit-aircraft', ['aircraft' => $aircraft]);
    }

      public function update($id, Request $request)
     {
      $this->validate($request,[
        'asset_name' => 'required',
        'equipment_type' => 'required',
        'serial_no' => 'required',
        'no_registration' => 'required',
        'lease_status' => 'required',
        'lessor' => 'required',
        'start_date' => 'required',
        'end_date' => 'required'
      ]);
   
      $aircraft = Aircraft::find($id);
      $aircraft->asset_name = $request->asset_name;
      $aircraft->equipment_type = $request->equipment_type;
      $aircraft->serial_no = $request->serial_no;
      $aircraft->no_registration = $request->no_registration;
      $aircraft->lease_status = $request->lease_status;
      $aircraft->lessor = $request->lessor;
      $aircraft->start_date = $request->start_date;
      $aircraft->end_date = $request->end_date;
      
      $aircraft->save();

      return redirect()->route('edit-aircraft-engine1', ['id_aircraft' => $aircraft->id]);  
    }


    public function editengine1($id)
    {    
        $aircraft = Aircraft::find($id);
        $engine1 = Engine1::find($id);
        $id = session()->get('aircraft_id');
        return view('aircraft-list.edit-aircraft-engine1', ['aircraft' => $aircraft, 'aircraft_id' => $id, 'engine1' => $engine1]);

    }
    public function updateengine1($id, Request $request)
    {
     $this->validate($request,[
       'engine_name' => 'required',
       'serial_no' => 'required',
       'no_registration' => 'required'
      
     ]);
  
     $engine1 = Engine1::find($id);
     $aircraft = Aircraft::find($id);
     $engine1->engine_name = $request->engine_name;
     $engine1->serial_no = $request->serial_no;
     $engine1->no_registration = $request->no_registration;
     
     $engine1->save();

     return redirect()->route('edit-aircraft-engine2', ['id_aircraft' => $engine1->aircraft_id]);  

    }

    public function editengine2($id)
    {    
        $aircraft = Aircraft::find($id);
        $engine2 = Engine2::find($id);
        $id = session()->get('aircraft_id');
        return view('aircraft-list.edit-aircraft-engine2', ['aircraft' => $aircraft, 'aircraft_id' => $id, 'engine2' => $engine2]);

    }
    public function updateengine2($id, Request $request)
    {
     $this->validate($request,[
       'engine_name' => 'required',
       'serial_no' => 'required',
       'no_registration' => 'required'
      
     ]);
  
     $engine2 = Engine2::find($id);
     $engine2->engine_name = $request->engine_name;
     $engine2->serial_no = $request->serial_no;
     $engine2->no_registration = $request->no_registration;
     
     $engine2->save();

     return redirect()->route('edit-aircraft-airframe', ['id_aircraft' => $engine2->aircraft_id]);  
    }



    public function editairframe($id)
    {    
        $aircraft = Aircraft::find($id);
        $airframe = Airframe::find($id);
        $id = session()->get('aircraft_id');
        
        return view('aircraft-list.edit-aircraft-airframe', ['aircraft' => $aircraft, 'aircraft_id' => $id, 'airframe' => $airframe]);

    }
    public function updateairframe($id, Request $request)
    {
     $this->validate($request,[
       'serial_no' => 'required',
       'no_registration' => 'required'
      
     ]);
  
     $airframe = Airframe::find($id);
     $airframe->serial_no = $request->serial_no;
     $airframe->no_registration = $request->no_registration;
     
     $airframe->save();

     return redirect()->route('edit-aircraft-apu', ['id_aircraft' => $airframe->aircraft_id]);  
    }

    public function editapu($id)
    {    
    $aircraft = Aircraft::find($id);
    $apu = Apu::find($id);
    $id = session()->get('aircraft_id');
        
    return view('aircraft-list.edit-aircraft-apu', ['aircraft' => $aircraft, 'aircraft_id' => $id, 'apu' => $apu]);

    }

    public function updateapu($id, Request $request)
    {
     $this->validate($request,[
       'serial_no' => 'required',
       'no_registration' => 'required'
      
     ]);
  
     $apu = Apu::find($id);
     $apu->serial_no = $request->serial_no;
     $apu->no_registration = $request->no_registration;
     
     $apu->save();

     return redirect()->route('edit-aircraft-landing', ['id_aircraft' => $apu->aircraft_id]);  
    }

    public function editlanding($id)
    {    
    $aircraft = Aircraft::find($id);
    $landing = Landing::find($id);
    $id = session()->get('aircraft_id');
            
    return view('aircraft-list.edit-aircraft-landing', ['aircraft' => $aircraft, 'aircraft_id' => $id, 'landing' => $landing]);
    
    }

    public function updatelanding($id, Request $request)
    {
     $this->validate($request,[
       'serial_no' => 'required',
       'no_registration' => 'required'
      
     ]);
  
     $landing = Landing::find($id);
     $landing->serial_no = $request->serial_no;
     $landing->no_registration = $request->no_registration;
     
     $landing->save();

     return redirect()->route('edit-aircraft-maintenance', ['id_aircraft' => $landing->aircraft_id]);  
    }

    public function editmaintenance($id)
    {    
        $aircraft = Aircraft::find($id);
        $maintenance = Maintenance::all();
        $aircraft_maintenance= Maintenanceaircraft::find($id);
        $id = session()->get('aircraft_id');
                
        return view('aircraft-list.edit-aircraft-maintenance', ['aircraft' => $aircraft, 'aircraft_id' => $id, 'maintenance' => $maintenance, 'maintenance_aircraft' => $aircraft_maintenance]);
       
    }

    public function updatemaintenance($id, Request $request)
    {
     $this->validate($request,[
        'aircraft_id' => 'required',
        'maintenance_id' => 'required'
      
     ]);
  
    //  $maintenance = Maintenanceaircraft::find($id);
    //  $maintenance->aircraft_id = $request->aircraft_id;
    //  $maintenance->maintenance_id = $request->maintenance_id;
     
    //  $maintenance->save();

     return redirect('/aircraft-list');
    }

    
}
