
@extends('layouts.master') @section('title','ADD Maintenance Reserve Engine2') @section('content')

<div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Engine 2</strong>
                                                </div>
                                                <div class="card-body card-block">
                                                <form action="/maintenance-reserve-engine2/update/{{ $total->id }}" method="post">    
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}               
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Aircraft</label>
                                                        <select name="aircraft_id" id="select" class="form-control" value="{{ $maintenancereserve->aircraft->id }}"> 
                                                        <option @if($maintenancereserve->aircraft->id ) {{ "selected"}} @endif value="{{$total->aircraft_id}}">{{ $maintenancereserve->aircraft->asset_name }} </option>

                                                        </select>
                                                        @if($errors->has('aircraft_id'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('aircraft_id')}}
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Engine Name</label>
                                                        <select name="engine2_id" id="select" class="form-control" value="{{ $maintenancereserve->aircraft->engine2->id }}"> 
                                                        <option @if($maintenancereserve->aircraft->id ) {{ "selected"}} @endif value="{{$total->engine2_id}}">{{ $maintenancereserve->aircraft->engine2->engine_name }} </option>

                                                        </select>
                                                        <div class="text-danger">
                                                            {{ $errors->first('engine_name')}}
                                                        </div>
                                                        
                                                    </div>
                                                           
                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">FH</label>
                                                        <input type="text" id="company" name="fh" placeholder="Enter Engine 2 Flight Hour" class="form-control" value="{{ $total->fh }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">FC</label>
                                                        <input type="text" id="vat" name="fc" placeholder="Enter Engine 2 Flight Time Since New" class="form-control" value="{{ $total->fc }}">
                                                    </div>
                                                </div>

                                                <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Add</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script> history.pushState(null, null, location.href);
                                window.onpopstate = function () {
                                //   alert('tes');
                                    history.go(1);
                                    alert('Selesaikan Terlebih Dahulu');
                                };
                            </script>
                            @endsection