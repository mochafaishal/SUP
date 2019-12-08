<?php

namespace App\Http\Controllers;
use App\Maintenancereserve;
use App\Maintenance;
use App\Aircraft;
use App\Engine1;
use App\Engine2;
use App\Airframe;
use App\Apu;
use App\Landing;
use App\Total;
use Carbon\Carbon;

use App\Exports\TotalExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use PDF;
use Illuminate\Http\Request;

class MaintenanceReserveController extends Controller
{
  public function index()
  {
      $maintenancereserve = Maintenancereserve::all();
      
      return view('maintenance-reserve.maintenance-reserve', ['maintenancereserve' => $maintenancereserve]);
  }

  public function delete($id)
  {
      $maintenancereserve = Maintenancereserve::find($id);
      $maintenancereserve->delete();
      return redirect('/maintenance-reserve');
  }

  public function create()
  {
      $aircraft = Aircraft::all();
      return view('maintenance-reserve.add-maintenance-reserve', ['aircraft' => $aircraft]);

  }

  
      public function detail($id)
  {
      $maintenancereserve = Maintenancereserve::find($id);
      $airframe = airframe::where('aircraft_id',$maintenancereserve->aircraft_id)->first();
      $totalairframe = Total::where('airframe_id',$airframe->id)->where('maintenancereserve_id',$maintenancereserve->id)->first();
      
      $engine1 = Engine1::where('aircraft_id',$maintenancereserve->aircraft_id)->first();
      $totalengine1 = Total::where('engine1_id',$engine1->id)->where('maintenancereserve_id',$maintenancereserve->id)->first();
      
      $engine2 = Engine2::where('aircraft_id',$maintenancereserve->aircraft_id)->first();
      $totalengine2 = Total::where('engine2_id',$engine2->id)->where('maintenancereserve_id',$maintenancereserve->id)->first();

      $apu = Apu::where('aircraft_id',$maintenancereserve->aircraft_id)->first();
      $totalapu = Total::where('apu_id',$apu->id)->where('maintenancereserve_id',$maintenancereserve->id)->first();

      $landing = Landing::where('aircraft_id',$maintenancereserve->aircraft_id)->first();
      $totallanding = Total::where('landing_id',$landing->id)->where('maintenancereserve_id',$maintenancereserve->id)->first();


      return view('maintenance-reserve.detail-maintenance-reserve', ['maintenancereserve' => $maintenancereserve, 'totalairframe' => $totalairframe, 'totalengine1' => $totalengine1, 'totalengine2' => $totalengine2, 'totalapu' => $totalapu, 'totallanding' => $totallanding]);
  } 

  public function cetak_pdf($id)
  {
      $maintenancereserve = Maintenancereserve::find($id);

      $airframe = airframe::where('aircraft_id',$maintenancereserve->aircraft_id)->first();
      $totalairframe = Total::where('airframe_id',$airframe->id)->where('maintenancereserve_id',$maintenancereserve->id)->first();
      
      $engine1 = Engine1::where('aircraft_id',$maintenancereserve->aircraft_id)->first();
      $totalengine1 = Total::where('engine1_id',$engine1->id)->where('maintenancereserve_id',$maintenancereserve->id)->first();
      
      $engine2 = Engine2::where('aircraft_id',$maintenancereserve->aircraft_id)->first();
      $totalengine2 = Total::where('engine2_id',$engine2->id)->where('maintenancereserve_id',$maintenancereserve->id)->first();

      $apu = Apu::where('aircraft_id',$maintenancereserve->aircraft_id)->first();
      $totalapu = Total::where('apu_id',$apu->id)->where('maintenancereserve_id',$maintenancereserve->id)->first();

      $landing = Landing::where('aircraft_id',$maintenancereserve->aircraft_id)->first();
      $totallanding = Total::where('landing_id',$landing->id)->where('maintenancereserve_id',$maintenancereserve->id)->first();



      $pdf = PDF::setOptions([
        'logOutputFile' => storage_path('logs/log.htm'),
        'tempDir' => storage_path('logs/')
    ])->loadview('maintenance-reserve.maintenancereserve_pdf',['maintenancereserve'=>$maintenancereserve, 'totalairframe' => $totalairframe, 'totalengine1' => $totalengine1, 'totalengine2' => $totalengine2, 'totalapu' => $totalapu, 'totallanding' => $totallanding]);
      return $pdf->download('laporan-maintenancereserve.pdf');
  }

// Add maintenance reserve komponen

  public function store(Request $request)
    {
        $this->validate($request,[
              
          'date' => 'required',
          'aircraft_id' => 'required'
      
        ]);

        $ms =Maintenancereserve::create([

          'date' => $request->date,
          'aircraft_id' => $request->aircraft_id
          
        ]);

        $ms_id = session()->put('maintenancereserve_id', $ms->id);
        return redirect('add-maintenance-reserve-engine1')->with( ['aircraft_id' => $request->aircraft_id] );
    }


    public function engine1()
    {   
      $aircraft = Aircraft::all();
      $id = session()->get('aircraft_id');
      $engine1 = Engine1::all();
      return view('maintenance-reserve.add-maintenance-reserve-engine1', ['aircraft' => $aircraft,'engine1' => $engine1, 'aircraft_id' => $id ]);
    }

    public function storeengine(Request $request)
    {

        $this->validate($request,[
              
          'aircraft_id' => 'required',
          'engine1_id' => 'required',
          'fh' => 'required',
          'fc' => 'required'
      
        ]);

        $i = Total::where('aircraft_id',$request->aircraft_id)->where('engine1_id',$request->engine1_id)->orderBy('id', 'desc')->first();
        
        if($i==null){
          $tsn=0+$request->fh;
          $csn=0+$request->fc;
        }else{
          $tsn=$i->tsn+$request->fh;
          $csn=$i->csn+$request->fc;
        }

        $billed_rate=150;
        $amount_due=$request->fh*$billed_rate;

        $billed_rate_fc=300;
        $amount_due_fc=$request->fc*$billed_rate_fc;


        $ms_id = session()->get('maintenancereserve_id');
        //dd($ms_id);

        Total::create([
  
           'aircraft_id' => $request->aircraft_id,
           'maintenancereserve_id' => $ms_id,
           'engine1_id' => $request->engine1_id,
           'fh' => $request->fh,
           'fc' => $request->fc,
            'csn' => $csn,
            'tsn' => $tsn,
            'billed_rate' =>150,
            'amount_due' => $amount_due,
            'billed_rate_fc' =>300,
            'amount_due_fc' => $amount_due_fc
          
        ]);
  
        return redirect('add-maintenance-reserve-engine2')->with( ['aircraft_id' => $request->aircraft_id] );;
    }
    
    public function engine2()
    {
        $aircraft = Aircraft::all();
        $id = session()->get('aircraft_id');
        $engine2 = Engine2::all();
        return view('maintenance-reserve.add-maintenance-reserve-engine2', ['aircraft' => $aircraft,'engine2' => $engine2, 'aircraft_id' => $id]);
    }
    
    public function storeengine2(Request $request)
    {

        $this->validate($request,[
              
          'aircraft_id' => 'required',
          'engine2_id' => 'required',
          'fh' => 'required',
          'fc' => 'required',
      
        ]);

        $i = Total::where('aircraft_id',$request->aircraft_id)->where('engine2_id',$request->engine2_id)->orderBy('id', 'desc')->first();
        
        if($i==null){
          $tsn=0+$request->fh;
          $csn=0+$request->fc;
        }else{
          $tsn=$i->tsn+$request->fh;
          $csn=$i->csn+$request->fc;
        }
        
        $billed_rate=150;
        $amount_due=$request->fh*$billed_rate;

        $billed_rate_fc=300;
        $amount_due_fc=$request->fc*$billed_rate_fc;

        $ms_id = session()->get('maintenancereserve_id');

        Total::create([
  
           'aircraft_id' => $request->aircraft_id,
           'engine2_id' => $request->engine2_id,
           'maintenancereserve_id' => $ms_id,
           'fh' => $request->fh,
           'fc' => $request->fc,
           'csn' => $csn,
           'tsn' => $tsn,
           'billed_rate' =>150,
           'amount_due' => $amount_due,
           'billed_rate_fc' =>300,
            'amount_due_fc' => $amount_due_fc
          
        ]);
  
        return redirect('add-maintenance-reserve-airframe')->with( ['aircraft_id' => $request->aircraft_id] );;
    }

    

    public function airframe()
    {
        $aircraft = Aircraft::all();
        $id = session()->get('aircraft_id');
        $airframe = Airframe::all();
        return view('maintenance-reserve.add-maintenance-reserve-airframe', ['aircraft' => $aircraft, 'airframe' => $airframe, 'aircraft_id' => $id]);
    }

    public function storeairframe(Request $request)
    {
        $this->validate($request,[
              
          'aircraft_id' => 'required',
          'airframe_id' => 'required',
          'fh' => 'required',
          'fc' => 'required'
      
        ]);

        $i = Total::where('aircraft_id',$request->aircraft_id)->where('airframe_id',$request->airframe_id)->orderBy('id', 'desc')->first();
        
        if($i==null){
          $tsn=0+$request->fh;
          $csn=0+$request->fc;
        }else{
          $tsn=$i->tsn+$request->fh;
          $csn=$i->csn+$request->fc;
        }
        
        $billed_rate=150;
        $amount_due=$request->fh*$billed_rate;

        $billed_rate_fc=300;
        $amount_due_fc=$request->fc*$billed_rate_fc;

        $ms_id = session()->get('maintenancereserve_id');

        Total::create([
  
          'aircraft_id' => $request->aircraft_id,
          'airframe_id' => $request->airframe_id,
          'maintenancereserve_id' => $ms_id,
          'fh' => $request->fh,
          'fc' => $request->fc,
          'csn' => $csn,
          'tsn' => $tsn,
          'billed_rate' =>150,
          'amount_due' => $amount_due,
          'billed_rate_fc' =>300,
            'amount_due_fc' => $amount_due_fc

          
        ]);
  
        return redirect('add-maintenance-reserve-apu')->with( ['aircraft_id' => $request->aircraft_id] );;
    }

    public function apu()
    {   
        $apu = Apu::all();
        $aircraft = Aircraft::all();
        $id = session()->get('aircraft_id');
        return view('maintenance-reserve.add-maintenance-reserve-apu', ['aircraft' => $aircraft, 'apu' => $apu, 'aircraft_id' => $id]);
    }
    public function storeapu(Request $request)
    {
        $this->validate($request,[
              
          'aircraft_id' => 'required',
          'apu_id' => 'required',
          'fh' => 'required',
          'fc' => 'required'
      
        ]);
        $i = Total::where('aircraft_id',$request->aircraft_id)->where('apu_id',$request->apu_id)->orderBy('id', 'desc')->first();
        
        if($i==null){
          $tsn=0+$request->fh;
          $csn=0+$request->fc;
        }else{
          $tsn=$i->tsn+$request->fh;
          $csn=$i->csn+$request->fc;
        }

        $billed_rate=150;
        $amount_due=$request->fh*$billed_rate;

        $billed_rate_fc=300;
        $amount_due_fc=$request->fc*$billed_rate_fc;

        $ms_id = session()->get('maintenancereserve_id');
  
        Total::create([
  
          'aircraft_id' => $request->aircraft_id,
          'apu_id' => $request->apu_id,
          'maintenancereserve_id' => $ms_id,
          'fh' => $request->fh,
          'fc' => $request->fc,
          'csn' => $csn,
          'tsn' => $tsn,
          'billed_rate' =>150,
          'amount_due' => $amount_due,
          'billed_rate_fc' =>300,
            'amount_due_fc' => $amount_due_fc

          
        ]);
  
        return redirect('add-maintenance-reserve-landing')->with( ['aircraft_id' => $request->aircraft_id] );;
    }

    public function landing()
    {
        $aircraft = Aircraft::all();
        $id = session()->get('aircraft_id');
        $landing = Landing::all();

        return view('maintenance-reserve.add-maintenance-reserve-landing', ['aircraft' => $aircraft, 'landing' => $landing, 'aircraft_id' => $id]);
    }

    public function storelanding(Request $request)
    {
        $this->validate($request,[
              
          'aircraft_id' => 'required',
          'landing_id' => 'required',
          'fh' => 'required',
          'fc' => 'required'
      
        ]);
        $i = Total::where('aircraft_id',$request->aircraft_id)->where('landing_id',$request->landing_id)->orderBy('id', 'desc')->first();
        
        if($i==null){
          $tsn=0+$request->fh;
          $csn=0+$request->fc;
        }else{
          $tsn=$i->tsn+$request->fh;
          $csn=$i->csn+$request->fc;
        }

        $billed_rate=150;
        $amount_due=$request->fh*$billed_rate;

        $billed_rate_fc=300;
        $amount_due_fc=$request->fc*$billed_rate_fc;

        $ms_id = session()->get('maintenancereserve_id');
  
        Total::create([
  
          'aircraft_id' => $request->aircraft_id,
          'landing_id' => $request->landing_id,
          'maintenancereserve_id' => $ms_id,
          'fh' => $request->fh,
          'fc' => $request->fc,
          'csn' => $csn,
          'tsn' => $tsn,
          'billed_rate' =>150,
          'amount_due' => $amount_due,
          'billed_rate_fc' =>300,
            'amount_due_fc' => $amount_due_fc

          
        ]);
  
        return redirect('maintenance-reserve');
    }


    // edit maintenance reserve

    public function edit($id)
    {   
        $maintenancereserve = Maintenancereserve::find($id);
        return view('maintenance-reserve.edit-maintenance-reserve', ['maintenancereserve' => $maintenancereserve]);
  
    }
  
    public function update($id, Request $request)
       {
        $this->validate($request,[
          'aircraft_id' => 'required',
          'date' => 'required'
         
        ]);
     
        $maintenancereserve = Maintenancereserve::find($id);
        $maintenancereserve->aircraft_id = $request->aircraft_id;
        $maintenancereserve->date = $request->date;
     
        
        $maintenancereserve->save();
        return redirect()->route('edit-maintenance-reserve-engine1', ['id_maintenancereseve' => $maintenancereserve->id]);  
   
      }

    public function editeengine1($id)
    {   
      $maintenancereserve = Maintenancereserve::find($id);
      $i = Total::where('maintenancereserve_id',$maintenancereserve->id)->where('id',$maintenancereserve->total->id)->first();
      return view('maintenance-reserve.edit-maintenance-reserve-engine1', ['maintenancereserve' => $maintenancereserve, 'total' => $i]);
    }

    public function updateengine1($id, Request $request)
    {
     $this->validate($request,[
       'fh' => 'required',
       'fc' => 'required'
      
     ]);
  
     $total = Total::find($id);
     $total->fh = $request->fh;
     $total->fc = $request->fc;

     if($total==null){
      $total->tsn=0+$request->fh;
      $total->csn=0+$request->fc;
    }else{
      $total->tsn=0+$request->fh;
      $total->csn=0+$request->fc;
    }
     
     $total->save();
     
     return redirect('maintenance-reserve');
     
   }


    // export excel
    public function export()
    {
      $total = Total::all();
      return view('maintenance-reserve.maintenancereserve-export',['total'=>$total]);
    }
   
    public function export_excel()
    {
      return Excel::download(new TotalExport, 'maintenance-reserve.xlsx');
    }
}
