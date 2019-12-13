@extends('layouts.master') @section('title','Edit Aircraft - Edit Maintenance') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>EditMaintenance</strong>
                </div>
                <form action="/aircraft-maintenance/update/{{ $aircraft->maintenance }}" method="post">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">Aircraft</label>
                            <select name="aircraft_id" id="select" class="form-control">
                            <option @if($aircraft_id==$aircraft->id ) {{ "selected"}} @endif value="{{$aircraft->id}}">{{$aircraft->id}} - {{$aircraft->asset_name}} </option>
                            </select>
                            @if($errors->has('aircraft_id'))
                            <div class="text-danger">
                                {{ $errors->first('aircraft_id')}}
                            </div>
                            @endif
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Jenis Maintenance saat ini :</label>
                            </div>
                            <br>
                            <div class="col col-md-9">
                                <div class="form-check"> 
                                    @foreach($aircraft->maintenance as $m)
                                    {{ $m->maintenance_name }}  <br>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col col-md-3 mt-3">
                                <label class=" form-control-label">Edit Maintenance Aircraft :</label>
                            </div>
                            <div class="col col-md-9 mt-3" >
                                <div class="form-check">
                                    @foreach($maintenance as $maintenance)
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox" id="checkbox1" name="maintenance_id" value="{{$maintenance->id}}" class="form-check-input">{{$maintenance->maintenance_name}}
                                        </label>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
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