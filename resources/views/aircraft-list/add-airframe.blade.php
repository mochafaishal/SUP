@extends('layouts.master') @section('title','Add Aircraft - Add Airframe') @section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Aircraft - Add Airframe</h4>
                </div>
                <div class="card-body card-block">

                    <form action="/airframe/store" method="post">

                        {{ csrf_field() }}

                        <div class="card-body card-block">

                            <div class="form-group">

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

                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Serial No</label>
                                <input type="text" name="serial_no" placeholder="Enter Serial No" class="form-control"> @if($errors->has('serial_no'))
                                <div class="text-danger">
                                    {{ $errors->first('serial_no')}}
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">No Registration</label>
                                <input type="text" name="no_registration" placeholder="Enter No Registration" class="form-control"> @if($errors->has('no_registration'))
                                <div class="text-danger">
                                    {{ $errors->first('no_registration')}}
                                </div>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            //   alert('tes');
            history.go(1);
            alert('Selesaikan Terlebih Dahulu');
        };
    </script>

    @endsection