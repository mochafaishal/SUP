
@extends('layouts.master') @section('title','ADD Maintenance Reserve APU') @section('content')

<div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Edit APU</strong>
                                                </div>
                                                <div class="card-body card-block">
                                                <form action="/maintenance-reserve-apu/update/{{ $total->id }}" method="post">    
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}                 
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Aircraft</label>
                                                        <select name="aircraft_id" id="select" class="form-control">
                                                        
                                                        <option @if($maintenancereserve->aircraft->id ) {{ "selected"}} @endif value="{{$total->aircraft_id}}">{{ $maintenancereserve->aircraft->asset_name }} </option>
                                                        
                                                        </select>
                                                        @if($errors->has('aircraft_id'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('aircraft_id')}}
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">APU Serial No</label>
                                                        <select name="apu_id" id="select" class="form-control">
                                                        
                                                        <option @if($maintenancereserve->aircraft->apu->id ) {{ "selected"}} @endif value="{{$total->apu_id}}">{{ $total->apu->serial_no }} - {{ $total->apu->no_registration }} </option>
                                                        
                                                        </select>
                                                        @if($errors->has('aircraft_id'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('aircraft_id')}}
                                                        </div>
                                                        @endif
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">FH</label>
                                                        <input type="text" id="company" name="fh" placeholder="Enter Engine 1 Flight Hour" class="form-control" value="{{ $total->fh }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">FC</label>
                                                        <input type="text" id="vat" name="fc" placeholder="Enter Engine 1 Flight Time Since New" class="form-control" value="{{ $total->fc }}">
                                                    </div>
                                                </div>

                                                <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Add</button>
                                                </form>                                            </div>
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