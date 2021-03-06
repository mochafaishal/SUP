
@extends('layouts.master') @section('title','ADD Maintenance Reserve Airfarme') @section('content')

<div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Airframe</strong>
                                                </div>
                                                <div class="card-body card-block">
                                                <form action="/add-maintenance-reserve-airframe/storeairframe" method="post">    
                                                {{ csrf_field() }}                
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Aircraft</label>
                                                        <select name="aircraft_id" id="select" class="form-control">
                                                        @foreach($aircraft as $aircraft)
                                                        <option @if($aircraft_id==$aircraft->id ) {{ "selected"}} @endif value="{{$aircraft->id}}">{{$aircraft->id}} - {{$aircraft->asset_name}} </option>
                                                        @endforeach
                                                        </select>
                                                        @if($errors->has('aircraft_id'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('aircraft_id')}}
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Airframe</label>
                                                        <select name="airframe_id" id="select" class="form-control">
                                                        @foreach($airframe as $airframe)
                                                            <option value="{{ $airframe->id }}">{{ $airframe->id }} - {{ $airframe->serial_no }} - {{ $airframe->no_registration }} - {{$airframe->aircraft->asset_name}}</option>
                                                            @endforeach 
                                                        </select>
                                                        @if($errors->has('aircraft_id'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('aircraft_id')}}
                                                        </div>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">FH</label>
                                                        <input type="text" id="company" name="fh" placeholder="Enter Engine 1 Flight Hour" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">FC</label>
                                                        <input type="text" id="vat" name="fc" placeholder="Enter Engine 1 Flight Time Since New" class="form-control">
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