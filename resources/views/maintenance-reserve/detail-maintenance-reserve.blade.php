@extends('layouts.master') @section('title','Detail Maintenance Reserve') @section('content')

<div class="col-md-12 table-responsive">
    <h1>Detail maintenance reserve {{$maintenancereserve->aircraft->asset_name}} - {{$maintenancereserve->aircraft->serial_no}} - {{$maintenancereserve->aircraft->no_registration}} </h1>

    <tr>
        <td>Rate adjustment :</td>
        <td> {{$maintenancereserve->date}}</td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <table id="example" class="table table-borderless table-data3" style="width:100%">
        <br>
        <a href="/maintenance-reserve/cetak_pdf/{{$maintenancereserve->id}}" class="btn btn-primary mb-3 mt-3" target="_blank">CETAK PDF</a>
        <a href="/maintenance-reserve-report/export_excel" class="btn btn-success  mb-3 mt-3 ml-3">CETAK EXCEL</a>

        <thead>
            <tr>
                <th>no</th>
                <th>deskripsi</th>
                <th>SN</th>
                <th>Hours/Cycle</th>
                <th>Billing Basis</th>
                <th>Durasi</th>
                <th>Billig rate</th>
                <th>Amount Due</th>
            </tr>
        </thead>
        
        <tr>
            <td>1</td>
            <td>ENGINE 1: {{  $maintenancereserve->aircraft->engine1->engine_name}}</td>
            <td>{{  $maintenancereserve->aircraft->engine1->serial_no}}</td> 
            <td>{{$totalengine1->fh}}</td>
            <td></td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>{{($totalengine1->fh) * ($maintenancereserve->total->billed_rate)}}</td>
        </tr>
        <tr>    
            <td>2</td>
            <td>ENGINE 2: {{  $maintenancereserve->aircraft->engine2->engine_name}}</td>
            <td>{{$maintenancereserve->aircraft->engine2->serial_no}}</td> 
            <td>{{$totalengine2->fh}}</td>
            <td></td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>{{($totalengine2->fh) * ($maintenancereserve->total->billed_rate)}}</td>
        </tr>
        <tr>
            <td>3</td>
            <td>ENGINE LLP 1: {{  $maintenancereserve->aircraft->engine1->engine_name}}</td>
            <td>{{  $maintenancereserve->aircraft->engine1->serial_no}}</td> 
            <td>{{$totalengine1->fc}}</td>
            <td></td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>{{($totalengine1->fc) * ($maintenancereserve->total->billed_rate)}}</td>
        </tr>
        <tr>
            <td>4</td>
            <td>ENGINE LLP 2 : {{  $maintenancereserve->aircraft->engine1->engine_name}}</td>
            <td>{{  $maintenancereserve->aircraft->engine2->serial_no}}</td> 
            <td>{{$totalengine2->fc}}</td>
            <td></td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>{{($totalengine2->fc) * ($maintenancereserve->total->billed_rate)}}</td>
        </tr>
        <tr>
            <td>5</td>
            <td>AIRFRAME - {{  $maintenancereserve->aircraft->airframe->no_registration}}</td>
            <td>{{  $maintenancereserve->aircraft->airframe->serial_no}}</td> 
            <td>{{$totalairframe->fh}}</td>
            <td></td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>{{($totalairframe->fh) * ($maintenancereserve->total->billed_rate) }}</td>
        </tr>
        <tr>
            <td>6</td>
            <td>APU - {{  $maintenancereserve->aircraft->apu->no_registration}}</td>
            <td>{{  $maintenancereserve->aircraft->apu->serial_no}}</td> 
            <td>{{$totalapu->fh}}</td>
            <td></td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>{{($totalapu->fh) * ($maintenancereserve->total->billed_rate)}}</td>
        </tr>
        <tr>
            <td>7</td>
            <td>LANDING GEAR - {{  $maintenancereserve->aircraft->landing->no_registration}}</td>
            <td>{{  $maintenancereserve->aircraft->landing->serial_no}}</td> 
            <td>{{$totallanding->fh}}</td>
            <td></td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>
            {{($totallanding->fh) * ($maintenancereserve->total->billed_rate)}}
            </td>
        </tr>
        <tr>
            <td>8</td>
            <td>
            
                @foreach($maintenancereserve->aircraft->maintenance as $m)
                {{$m->maintenance_name}} <br>
                @endforeach
                
            </ul>
            
            
            </td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td>
            @foreach($maintenancereserve->aircraft->maintenance as $m)
                {{$m->estimed_cost}} <br>
            @endforeach
            </td> 
            <td></td>
        </tr>

        
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td ><b>TOTAL </b></td>
            <td> <b> 
            
            {{

                ($totallanding->fh) * ($maintenancereserve->total->billed_rate) +
                ($totalapu->fh) * ($maintenancereserve->total->billed_rate) +
                ($totalairframe->fh) * ($maintenancereserve->total->billed_rate) +

                ($totalengine1->fh) * ($maintenancereserve->total->billed_rate) +
                ($totalengine2->fh) * ($maintenancereserve->total->billed_rate) +

                ($totalengine1->fc) * ($maintenancereserve->total->billed_rate) +
                ($totalengine2->fc) * ($maintenancereserve->total->billed_rate) 
                

            }}          
            </b>           
            </td>
        </tr>
    </table>
</div>

@endsection