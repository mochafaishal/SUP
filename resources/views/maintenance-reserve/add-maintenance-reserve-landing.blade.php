
@extends('layouts.master') @section('title','ADD Maintenance Reserve Landing') @section('content')

<div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Landing</strong>
                                                </div>
                                                <div class="card-body card-block">
                                                <form action="/add-maintenance-reserve-landing/storelanding" method="post">    
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
                                                        <label for="vat" class=" form-control-label">Landing Gear</label>
                                                        <select name="landing_id" id="select" class="form-control">
                                                        @foreach($landing as $landing)
                                                            <option value="{{ $landing->id }}">{{ $landing->id }} - {{ $landing->serial_no }} - {{ $landing->no_registration }} - {{$landing->aircraft->asset_name}}</option>
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
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">TSN :</label>
                                                        <span class="role member">2567</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">CSN :</label>
                                                        <span class="role member">1343</span>
                                                    </div>
                                                </div>

                                                <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
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