<?php

namespace App\Http\Controllers;

use App\Aircraft;
use App\Engine;
use App\Maintenance;
use App\Total;
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

  public function edit()
  {
      return view('aircraft-list.edit-aircraft');
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
}
