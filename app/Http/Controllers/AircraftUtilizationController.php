<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aircraft;
use App\Total;
use Carbon\Carbon;


class AircraftUtilizationController extends Controller
{
  public function index()
  {
      $aircraft = Aircraft ::all();
      
      return view('aircraft-utilization', ['aircraft' => $aircraft]);
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

      return view('detail-utilization', ['aircraft' => $aircraft,'i'=>$i, 'total' => $total, 'totalengine2' => $totalengine2, 'totalairframe' => $totalairframe, 'totalapu' => $totalapu, 'totallanding' => $totallanding]);
  }

}
