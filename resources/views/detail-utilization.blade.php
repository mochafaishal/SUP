@extends('layouts.master') @section('title','Detail Aircraft') 

@section('content')
<div class="row m-t-10 m-l-20">
                            <div class="col-md-8">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Aircraft</th>
                                                <th class="text-left">Serial No</th>
                                                <th class="text-left">Registration No</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                            <tr> 
                                                <td>{{$aircraft->asset_name}}</td>
                                                <td class="text-left">{{$aircraft->serial_no}}</td>
                                                    <td class="text-left">{{$aircraft->no_registration}}</td>
                                            </tr>
                                       
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row m-t-10 m-l-20">
                            <div class="col-md-8">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Engine 1</th>
                                                

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <td>Engine Name</td>
                                                <td class="text-left">{{$aircraft->engine1->engine_name}}</td>
                                                
                                               
                                            </tr>
                                            <tr>
                                                <td>No Serial</td>
                                                <td class="text-left">{{$aircraft->engine1->serial_no}}</td>
                                            </tr>
                                            <tr>
                                                <td>No Registration</td>
                                                <td class="text-left">{{$aircraft->engine1->no_registration}}</td>
                                            </tr>
                                            <tr>
                                                <td>FH</td>
                                                <td class="text-left">{{$total->fh}}</td>
                                            </tr>
                                            <tr>
                                                <td>FC</td>
                                                <td class="text-left">{{$total->fc}}</td>
                                            <tr>
                                                <td>TSN</td>
                                                <td class="text-left">{{$total->tsn}}</td>
                                            </tr>
                                            <tr>
                                                <td>CSN</td>
                                                <td class="text-left">{{$total->csn}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>  
                        <div class="row m-t-10 m-l-20">
                            <div class="col-md-8">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Engine 2</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <td>Engine Name</td>
                                                <td class="text-left">{{$aircraft->engine2->engine_name}}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>No Serial</td>
                                                <td class="text-left">{{$aircraft->engine2->serial_no}}</td>
                                            </tr>
                                            <tr>
                                                <td>No Registration</td>
                                                <td class="text-left">{{$aircraft->engine2->no_registration}}</td>
                                            </tr>
                                            <tr> 
                                                <td>FH</td>
                                                <td class="text-left">{{$totalengine2->fh}}</td>
                                            </tr>
                                            <tr>
                                                <td>FC</td>
                                                <td class="text-left">{{$totalengine2->fc}}</td>
                                            </tr>
                                            <tr> 
                                                <td>TSN</td>
                                                <td class="text-left">{{$totalengine2->tsn}}</td>
                                            </tr>
                                            <tr>
                                                <td>CSN</td>
                                                <td class="text-left">{{$totalengine2->csn}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>                      
                        <div class="row m-t-10 m-l-20">
                            <div class="col-md-8">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Airframe</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>No Serial</td>
                                                <td class="text-left">{{$aircraft->airframe->serial_no}}</td>
                                            </tr>
                                            <tr>
                                                <td>No Registration</td>
                                                <td class="text-left">{{$aircraft->airframe->no_registration}}</td>
                                            </tr>
                                            <tr>
                                                <td>FH</td>
                                                <td class="text-left">{{$totalairframe->fh}}</td>
                                            </tr>
                                            <tr>
                                                <td>FC</td>
                                                <td class="text-left">{{$totalairframe->fc}}</td>
                                            </tr>
                                            <tr>
                                                <td>TSN</td>
                                                <td class="text-left">{{$totalairframe->tsn}}</td>
                                            </tr>
                                            <tr>
                                                <td>CSN</td>
                                                <td class="text-left">{{$totalairframe->csn}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>            
                        
                        <div class="row m-t-10 m-l-20">
                            <div class="col-md-8">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>APU</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>No Serial</td>
                                                <td class="text-left">{{$aircraft->apu->serial_no}}</td>
                                            </tr>
                                            <tr>
                                                <td>No Registration</td>
                                                <td class="text-left">{{$aircraft->apu->no_registration}}</td>
                                            </tr>
                                            <tr>
                                                <td>FH</td>
                                                <td class="text-left">{{$totalapu->fh}}</td>
                                            </tr>
                                            <tr>
                                                <td>FC</td>
                                                <td class="text-left">{{$totalapu->fc}}</td>
                                            </tr>
                                            <tr>
                                                <td>TSN</td>
                                                <td class="text-left">{{$totalapu->tsn}}</td>
                                            </tr>
                                            <tr>
                                                <td>CSN</td>
                                                <td class="text-left">{{$totalapu->csn}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

                        <div class="row m-t-10 m-l-20">
                            <div class="col-md-8">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Landing Gear</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>No Serial</td>
                                                <td class="text-left">{{$aircraft->landing->serial_no}}</td>
                                            </tr>
                                            <tr>
                                                <td>No Registration</td>
                                                <td class="text-left">{{$aircraft->landing->no_registration}}</td>
                                            </tr>
                                            <tr>
                                                <td>FH</td>
                                                <td class="text-left">{{$totallanding->fh}}</td>
                                            </tr>
                                            <tr>
                                                <td>FC</td>
                                                <td class="text-left">{{$totallanding->fc}}</td>
                                            </tr>
                                            <tr>
                                                <td>TSN</td>
                                                <td class="text-left">{{$totallanding->tsn}}</td>
                                            </tr>
                                            <tr>
                                                <td>CSN</td>
                                                <td class="text-left">{{$totallanding->csn}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

                        <div class="row m-t-10 m-l-20">
                            <div class="col-md-8">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Maintenance</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Maintenance</td>
                                                <td class="text-left">
                                                @foreach($aircraft->maintenance as $m)
                                                <li>{{$m->maintenance_name}}</li>
                                                @endforeach
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td >Tanggal pesawat masuk :</td>
                                                <td class="text-left">{{$aircraft->start_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal pesawat selesai peminjaman :</td>
                                                <td class="text-left">{{$aircraft->end_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal maintenance selanjutnya :</td>
                            
                                                <td class="text-left">
                                                @foreach($aircraft->maintenance as $m)
                                                    
                                                    @php $b = floor($i/$m->implementation); $c=$m->implementation @endphp
                                                    @for ($a = 0; $a < $b; $a++)
                                                    <li>{{ Carbon\Carbon::parse($aircraft->start_date)->addYear($c)->format('d-m-Y') }} </li>
                                                    @php $c = $c+$m->implementation @endphp
                                                    @endfor
                                                   <br>
                                                @endforeach
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
@endsection