@extends('layouts.master') @section('title','Edit Aircraft') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Aircraft</h4>
                </div>
                <div class="card-body">
                    <div class="default-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="nav-aircraft-tab" data-toggle="tab" href="#nav-aircraft" role="tab" aria-controls="nav-aircraft" aria-selected="true">Aircraft</a>
                                <a class="nav-item nav-link" id="nav-engine1-tab" data-toggle="tab" href="#nav-engine1" role="tab" aria-controls="nav-engine1" aria-selected="true">Engine 1</a>
                                <a class="nav-item nav-link" id="nav-engine2-tab" data-toggle="tab" href="#nav-engine2" role="tab" aria-controls="nav-engine2" aria-selected="true">Engine 2</a>
                                <a class="nav-item nav-link" id="nav-airframe-tab" data-toggle="tab" href="#nav-airframe" role="tab" aria-controls="nav-airframe" aria-selected="false">airframe</a>
                                <a class="nav-item nav-link" id="nav-apu-tab" data-toggle="tab" href="#nav-apu" role="tab" aria-controls="nav-apu" aria-selected="false">APU</a>
                                <a class="nav-item nav-link" id="nav-landing-tab" data-toggle="tab" href="#nav-landing" role="tab" aria-controls="nav-landing" aria-selected="false">Landing Gear</a>
                            </div>
                        </nav>
                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-aircraft" role="tabpanel" aria-labelledby="nav-aircraft-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Aircraft</strong>
                                                </div>
                                                
                                                <form action="/aircraft-list/store" method="post">
                                                
                                                {{ csrf_field() }}
                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">Asset Name</label>
                                                        <input type="text" name="asset_name" placeholder="Enter Asset Name" class="form-control">
                                                        @if($errors->has('asset_name'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('asset_name')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Equipment Type</label>
                                                        <input type="text" name="equipment_type" placeholder="Enter Equipment Type" class="form-control">
                                                        @if($errors->has('equipment_type'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('equipment_type')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Serial No</label>
                                                        <input type="text" name="serial_no" placeholder="Enter Serial No" class="form-control">
                                                        @if($errors->has('serial_no'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('serial_no')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">No Registration</label>
                                                        <input type="text" name="no_registration" placeholder="Enter No Registration" class="form-control">
                                                        @if($errors->has('no_registration'))
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
                                                        <input type="text" name="lessor" placeholder="Enter Lessor" class="form-control">
                                                        @if($errors->has('lessor'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('lessor')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Start Date</label>
                                                        <input type="date" name="start_date" placeholder="date" class="form-control">
                                                        @if($errors->has('start_date'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('start_date')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">End Date</label>
                                                        <input type="date" name="end_date" placeholder="date" class="form-control">
                                                        @if($errors->has('end_date'))
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
                            </div>
                            <div class="tab-pane fade" id="nav-engine1" role="tabpanel" aria-labelledby="nav-engine1">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Engine 1</strong>
                                                </div>
                                                <form action="/engine/store" method="post">
                                                
                                                {{ csrf_field() }}
                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">Engine Name</label>
                                                        <input type="text" name="engine_name" placeholder="Enter Engine Name" class="form-control">
                                                        @if($errors->has('engine_name'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('engine_name')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Serial No</label>
                                                        <input type="text" name="serial_no" placeholder="Enter Serial No" class="form-control">
                                                        @if($errors->has('serial_no'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('serial_no')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">No Registration</label>
                                                        <input type="text" name="no_registration" placeholder="Enter No Registration" class="form-control">
                                                        @if($errors->has('no_registration'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('no_registration')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">TSN</label>
                                                        <input type="text" name="" placeholder="Enter No Registration" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">CSN</label>
                                                        <input type="text" name="" placeholder="Enter No Registration" class="form-control">
                                                    </div>
 
                                                </div>

                                                <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Add</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-engine2" role="tabpanel" aria-labelledby="nav-engine2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Engine 2</strong>
                                                </div>
                                                <form action="/engine/store" method="post">
                                                
                                                {{ csrf_field() }}
                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">Engine Name</label>
                                                        <input type="text" name="engine_name" placeholder="Enter Engine Name" class="form-control">
                                                        @if($errors->has('engine_name'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('engine_name')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Serial No</label>
                                                        <input type="text" name="serial_no" placeholder="Enter Serial No" class="form-control">
                                                        @if($errors->has('serial_no'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('serial_no')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">No Registration</label>
                                                        <input type="text" name="no_registration" placeholder="Enter No Registration" class="form-control">
                                                        @if($errors->has('no_registration'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('no_registration')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">TSN</label>
                                                        <input type="text" name="" placeholder="Enter No Registration" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">CSN</label>
                                                        <input type="text" name="" placeholder="Enter No Registration" class="form-control">
                                                    </div>
 
                                                </div>

                                                <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Add</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-airframe" role="tabpanel" aria-labelledby="nav-airframe-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Airframe</strong>
                                                </div>
                                                <form action="/airframe/store" method="post">
                                                
                                                {{ csrf_field() }}
                                                <div class="card-body card-block">
                                                    
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Serial No</label>
                                                        <input type="text" name="serial_no" placeholder="Enter Serial No" class="form-control">
                                                        @if($errors->has('serial_no'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('serial_no')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">No Registration</label>
                                                        <input type="text" name="no_registration" placeholder="Enter No Registration" class="form-control">
                                                        @if($errors->has('no_registration'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('no_registration')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">TSN</label>
                                                        <input type="text" name="" placeholder="Enter No Registration" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">CSN</label>
                                                        <input type="text" name="" placeholder="Enter No Registration" class="form-control">
                                                    </div>
 
                                                </div>

                                                <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-apu" role="tabpanel" aria-labelledby="nav-apu-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add APU</strong>
                                                </div>
                                                <form action="/apu/store" method="post">
                                                
                                                {{ csrf_field() }}
                                                <div class="card-body card-block">
                                                    
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Serial No</label>
                                                        <input type="text" name="serial_no" placeholder="Enter Serial No" class="form-control">
                                                        @if($errors->has('serial_no'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('serial_no')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">No Registration</label>
                                                        <input type="text" name="no_registration" placeholder="Enter No Registration" class="form-control">
                                                        @if($errors->has('no_registration'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('no_registration')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">TSN</label>
                                                        <input type="text" name="" placeholder="Enter No Registration" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">CSN</label>
                                                        <input type="text" name="" placeholder="Enter No Registration" class="form-control">
                                                    </div>
 
                                                </div>

                                                <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-landing" role="tabpanel" aria-labelledby="nav-landing-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Landing Gear</strong>
                                                </div>
                                                <form action="/landing-gear/store" method="post">
                                                
                                                {{ csrf_field() }}
                                                <div class="card-body card-block">
                                                    
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Serial No</label>
                                                        <input type="text" name="serial_no" placeholder="Enter Serial No" class="form-control">
                                                        @if($errors->has('serial_no'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('serial_no')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">No Registration</label>
                                                        <input type="text" name="no_registration" placeholder="Enter No Registration" class="form-control">
                                                        @if($errors->has('no_registration'))
                                                                <div class="text-danger">
                                                                    {{ $errors->first('no_registration')}}
                                                                </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">TSN</label>
                                                        <input type="text" name="" placeholder="Enter No Registration" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">CSN</label>
                                                        <input type="text" name="" placeholder="Enter No Registration" class="form-control">
                                                    </div>
 
                                                </div>
                                                <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
                                                </form>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>

@endsection