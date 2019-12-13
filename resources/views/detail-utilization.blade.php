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
                                                @if( $total->tsn %17000  == 0)

                                                    <td class="text-left"> {{$total->tsn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                @elseif( $total->tsn %17001  == 0)

                                                    <td class="text-left"> {{$total->tsn}} <span class="badge badge-danger">Maintenance</span> </td>

                                                @else
                                                    <td class="text-left"> {{$total->tsn}} </td>
                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>CSN</td>
                                                @if($total->csn %8000 == 0)
                                                
                                                    <td class="text-left"> {{$total->csn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                
                                                @else
                                                    <td class="text-left"> {{$total->csn}} </td>
                                            
                                                @endif
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
                                                @if($totalengine2->tsn %17000 == 0)
                                                
                                                    <td class="text-left"> {{$totalengine2->tsn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                
                                                @elseif($totalengine2->tsn %17001 == 0)

                                                    <td class="text-left"> {{$totalengine2->tsn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                
                                                @elseif($totalengine2->tsn %17002 == 0)

                                                <td class="text-left"> {{$totalengine2->tsn}} <span class="badge badge-danger">Maintenance</span> </td>

                                                @elseif($totalengine2->tsn %17003 == 0)

                                                <td class="text-left"> {{$totalengine2->tsn}} <span class="badge badge-danger">Maintenance</span> </td>


                                                @else
                                                    <td class="text-left"> {{$totalengine2->tsn}} </td>
                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>CSN</td>
                                                @if($totalengine2->csn %8000 == 0)
                                                
                                                    <td class="text-left"> {{$totalengine2->csn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                
                                                @else
                                                    <td class="text-left"> {{$totalengine2->csn}} </td>
                                                
                                                @endif
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
                                                @if($totalairframe->tsn %17000 == 0)
                                                
                                                    <td class="text-left"> {{$totalairframe->tsn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                
                                                @else
                                                    <td class="text-left"> {{$totalairframe->tsn}} </td>
                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>CSN</td>
                                                @if($totalairframe->csn %8000 == 0)
                                                
                                                    <td class="text-left"> {{$totalairframe->csn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                
                                                @else
                                                    <td class="text-left"> {{$totalairframe->csn}} </td>
                                                
                                                @endif
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
                                                @if($totalapu->tsn %17000 == 0)
                                                
                                                    <td class="text-left"> {{$totalapu->tsn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                
                                                @else
                                                    <td class="text-left"> {{$totalapu->tsn}} </td>
                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>CSN</td>
                                                @if($totalapu->csn %8000 == 0)
                                                
                                                    <td class="text-left"> {{$totalapu->csn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                
                                                @else
                                                    <td class="text-left"> {{$totalapu->csn}} </td>
                                                
                                                @endif
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
                                                @if($totallanding->tsn %17000 == 0)
                                                
                                                    <td class="text-left"> {{$totallanding->tsn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                
                                                @else
                                                    <td class="text-left"> {{$totallanding->tsn}} </td>
                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>CSN</td>
                                                @if($totallanding->csn %8000 == 0)
                                                
                                                    <td class="text-left"> {{$totallanding->csn}} <span class="badge badge-danger">Maintenance</span> </td>
                                                
                                                @else
                                                    <td class="text-left"> {{$totallanding->csn}} </td>
                                                
                                                @endif
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
                                                {{$m->maintenance_name}} <br>
                                                @endforeach
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td >Tanggal pesawat masuk :</td>
                                                <td class="text-left">{{ Carbon\Carbon::parse($aircraft->start_date)->format('d M  Y') }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal pesawat selesai peminjaman :</td>
                                                <td class="text-left">{{ Carbon\Carbon::parse($aircraft->end_date)->format('d M  Y') }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal maintenance selanjutnya :</td>
                            
                                                <td class="text-left">
                                                @foreach($aircraft->maintenance as $m)
                                                {{$m->maintenance_name}} : <br> <br>
                                                    @php $b = floor($i/$m->implementation); $c=$m->implementation @endphp
                                                    @for ($a = 0; $a < $b; $a++) 
                                                    
                                                    <input class="btn btn-warning mb-3" type="reset" value="{{ Carbon\Carbon::parse($aircraft->start_date)->addYear($c)->format('d M  Y') }} "> <br>
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