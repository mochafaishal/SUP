<h1>Detail maintenance reserve {{$maintenancereserve->aircraft->asset_name}} - {{$maintenancereserve->aircraft->serial_no}} - {{$maintenancereserve->aircraft->no_registration}} </h1>

    
Rate adjustment : <br>
{{$maintenancereserve->date}}


<table border="1" id="example" class="table table-borderless table-data3" style="width:100%">

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

<tr>
            <td>1</td>
            <td>ENGINE 1: {{  $maintenancereserve->aircraft->engine1->engine_name}}</td>
            <td>{{  $maintenancereserve->aircraft->engine1->serial_no}}</td> 
            <td>{{$totalengine1->fh}}</td>
            <td>Hour</td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>{{$totalengine1->amount_due}}</td>
        </tr>
        <tr>    
            <td>2</td>
            <td>ENGINE 2: {{  $maintenancereserve->aircraft->engine2->engine_name}}</td>
            <td>{{$maintenancereserve->aircraft->engine2->serial_no}}</td> 
            <td>{{$totalengine2->fh}}</td>
            <td>Hour</td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>{{$totalengine2->amount_due}}</td>
        </tr>
        <tr>
            <td>3</td>
            <td>ENGINE LLP 1: {{  $maintenancereserve->aircraft->engine1->engine_name}}</td>
            <td>{{  $maintenancereserve->aircraft->engine1->serial_no}}</td> 
            <td>{{$totalengine1->fc}}</td>
            <td>Cycle</td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate_fc}}</td> 
            <td>{{$totalengine1->amount_due_fc}}</td>
        </tr>
        <tr>
            <td>4</td>
            <td>ENGINE LLP 2 : {{  $maintenancereserve->aircraft->engine1->engine_name}}</td>
            <td>{{  $maintenancereserve->aircraft->engine2->serial_no}}</td> 
            <td>{{$totalengine2->fc}}</td>
            <td>Cycle</td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate_fc}}</td> 
            <td>{{$totalengine2->amount_due_fc}}</td>
        </tr>
        <tr>
            <td>5</td>
            <td>AIRFRAME - {{  $maintenancereserve->aircraft->airframe->no_registration}}</td>
            <td>{{  $maintenancereserve->aircraft->airframe->serial_no}}</td> 
            <td>{{$totalairframe->fh}}</td>
            <td>Hour</td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>{{$totalairframe->amount_due}}</td>
        </tr>
        <tr>
        <td>6</td>
            <td>AIRFRAME - {{  $maintenancereserve->aircraft->airframe->no_registration}}</td>
            <td>{{  $maintenancereserve->aircraft->airframe->serial_no}}</td> 
            <td>{{$totalairframe->fc}}</td>
            <td>Cycle</td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate_fc}}</td> 
            <td>{{$totalairframe->amount_due_fc}}</td>
        </tr>
        <tr>
            <td>7</td>
            <td>APU - {{  $maintenancereserve->aircraft->apu->no_registration}}</td>
            <td>{{  $maintenancereserve->aircraft->apu->serial_no}}</td> 
            <td>{{$totalapu->fh}}</td>
            <td>Hour</td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>{{$totalapu->amount_due}}</td>
        </tr>
        <tr>
            <td>8</td>
            <td>APU - {{  $maintenancereserve->aircraft->apu->no_registration}}</td>
            <td>{{  $maintenancereserve->aircraft->apu->serial_no}}</td> 
            <td>{{$totalapu->fc}}</td>
            <td>Cycle</td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate_fc}}</td> 
            <td>{{$totalapu->amount_due_fc}}</td>
        </tr>
        <tr>
            <td>9</td>
            <td>LANDING GEAR - {{  $maintenancereserve->aircraft->landing->no_registration}}</td>
            <td>{{  $maintenancereserve->aircraft->landing->serial_no}}</td> 
            <td>{{$totallanding->fh}}</td>
            <td>Hour</td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate}}</td> 
            <td>
            {{$totallanding->amount_due}}
            </td>
        </tr>
        <tr>
            <td>10</td>
            <td>LANDING GEAR - {{  $maintenancereserve->aircraft->landing->no_registration}}</td>
            <td>{{  $maintenancereserve->aircraft->landing->serial_no}}</td> 
            <td>{{$totallanding->fc}}</td>
            <td>Cycle</td>
            <td></td>
            <td>{{$maintenancereserve->total->billed_rate_fc}}</td> 
            <td>
            {{$totallanding->amount_due_fc}}
            </td>
        </tr>
        <tr>
            <td>11</td>
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

                ($totalengine1->amount_due)+
                ($totalengine2->amount_due)+
                ($totalairframe->amount_due)+
                ($totalapu->amount_due)+
                ($totallanding->amount_due)+

                ($totalengine1->amount_due_fc)+
                ($totalengine2->amount_due_fc)+
                ($totalairframe->amount_due_fc)+
                ($totalapu->amount_due_fc)+
                ($totallanding->amount_due_fc)

            }}         
            </b>           
            </td>
        </tr>
</table>