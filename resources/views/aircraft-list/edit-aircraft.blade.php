@extends('layouts.master') @section('title','Edit Aircraft') @section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Aircraft</strong>
                </div> 

                <form action="/aircraft/update/{{ $aircraft->id }}" method="post">

                {{ csrf_field() }}
                {{ method_field('PUT') }}
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="company" class=" form-control-label">Asset Name</label>
                            <input type="text" name="asset_name" placeholder="Enter Asset Name" class="form-control" value="{{ $aircraft->asset_name }}"> @if($errors->has('asset_name'))
                            <div class="text-danger">
                                {{ $errors->first('asset_name')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">Equipment Type</label>
                            <input type="text" name="equipment_type" placeholder="Enter Equipment Type" class="form-control" value="{{ $aircraft->equipment_type }}"> @if($errors->has('equipment_type'))
                            <div class="text-danger">
                                {{ $errors->first('equipment_type')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">Serial No</label>
                            <input type="text" name="serial_no" placeholder="Enter Serial No" class="form-control" value="{{ $aircraft->serial_no }}"> @if($errors->has('serial_no'))
                            <div class="text-danger">
                                {{ $errors->first('serial_no')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="street" class=" form-control-label">No Registration</label>
                            <input type="text" name="no_registration" placeholder="Enter No Registration" class="form-control" value="{{ $aircraft->no_registration }}"> @if($errors->has('no_registration'))
                            <div class="text-danger">
                                {{ $errors->first('no_registration')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">Lease Status</label>
                            <select name="lease_status" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="1">Active</option>
                                <option value="2">Non Active</option>
                            </select>
                            @if($errors->has('lease_status'))
                            <div class="text-danger">
                                {{ $errors->first('lease_status')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="street" class=" form-control-label">Lessor</label>
                            <input type="text" name="lessor" placeholder="Enter Lessor" class="form-control" value="{{ $aircraft->lessor }}"> @if($errors->has('lessor'))
                            <div class="text-danger">
                                {{ $errors->first('lessor')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">Start Date</label>
                            <input type="date" name="start_date" placeholder="date" class="form-control" value="{{ $aircraft->start_date }}"> @if($errors->has('start_date'))
                            <div class="text-danger">
                                {{ $errors->first('start_date')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">End Date</label>
                            <input type="date" name="end_date" placeholder="date" class="form-control" value="{{ $aircraft->end_date }}"> @if($errors->has('end_date'))
                            <div class="text-danger">
                                {{ $errors->first('end_date')}}
                            </div>
                            @endif
                        </div>

                    </div>

                    <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Add</button>
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