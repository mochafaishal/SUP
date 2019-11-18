@extends('layouts.master') @section('title','Edit Maintenance Reserve') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Maintenance Reserve</h4>
                </div>
                <div class="card-body">
                    <div class="default-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="nav-aircraft-tab" data-toggle="tab" href="#nav-aircraft" role="tab" aria-controls="nav-aircraft" aria-selected="true">Aircraft</a>
                                <a class="nav-item nav-link" id="nav-engine1-tab" data-toggle="tab" href="#nav-engine1" role="tab" aria-controls="nav-engine1" aria-selected="false">engine 1</a>
                                <a class="nav-item nav-link" id="nav-engine2-tab" data-toggle="tab" href="#nav-engine2" role="tab" aria-controls="nav-engine2" aria-selected="false">engine 2</a>
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
                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Aircraft Name</label>
                                                        <select name="select" id="select" class="form-control">
                                                            <option value="0">Please select</option>
                                                            <option value="1">Boing 737</option>
                                                            <option value="2">Boing 700</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Date</label>
                                                        <input type="date" id="vat" placeholder="date" class="form-control">
                                                    </div>
                                                </div>

                                                <button type="button" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-engine1" role="tabpanel" aria-labelledby="nav-engine1-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Engine 1</strong>
                                                </div>
                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">Engine 1 Flight Hour</label>
                                                        <input type="text" id="company" placeholder="Enter Engine 1 Flight Hour" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Engine 1 Flight Time Since New</label>
                                                        <input type="text" id="vat" placeholder="Enter Engine 1 Flight Time Since New" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Engine 1 Flight Cycle</label>
                                                        <input type="text" id="vat" placeholder="Enter Engine 1 Flight Cycle" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">Engine 1 Flight Cycle Ssince New</label>
                                                        <input type="text" id="street" placeholder="Enter Engine 1 Flight Cycle Ssince New" class="form-control">
                                                    </div>
                                                </div>

                                                <button type="button" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-engine2" role="tabpanel" aria-labelledby="nav-engine2-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Engine 2</strong>
                                                </div>
                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">Engine 2 Flight Hour</label>
                                                        <input type="text" id="company" placeholder="Enter Engine 2 Flight Hour" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Engine 2 Flight Time Since New</label>
                                                        <input type="text" id="vat" placeholder="Enter Engine 2 Flight Time Since New" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Engine 2 Flight Cycle</label>
                                                        <input type="text" id="vat" placeholder="Enter Engine 2 Flight Cycle" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">Engine 2 Flight Cycle Ssince New</label>
                                                        <input type="text" id="street" placeholder="Enter Engine 2 Flight Cycle Ssince New" class="form-control">
                                                    </div>
                                                </div>

                                                <button type="button" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
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
                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">Airframe Flight Hour</label>
                                                        <input type="text" id="company" placeholder="Enter Airframe Flight Hour" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Airframe Flight Time Since New</label>
                                                        <input type="text" id="vat" placeholder="Enter Airframe Flight Time Since New" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Airframe Flight Cycle</label>
                                                        <input type="text" id="vat" placeholder="Enter Airframe Flight Cycle" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">Airframe Flight Cycle Ssince New</label>
                                                        <input type="text" id="street" placeholder="Enter Airframe Flight Cycle Ssince New" class="form-control">
                                                    </div>
                            

                                                </div>

                                                <button type="button" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
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
                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">APU Flight Hour</label>
                                                        <input type="text" id="company" placeholder="Enter APU Flight Hour" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">APU Flight Time Since New</label>
                                                        <input type="text" id="vat" placeholder="Enter APU Flight Time Since New" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">APU Flight Cycle</label>
                                                        <input type="text" id="vat" placeholder="Enter APU Flight Cycle" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">APU Flight Cycle Ssince New</label>
                                                        <input type="text" id="street" placeholder="Enter APU Flight Cycle Ssince New" class="form-control">
                                                    </div>
                                                    

                                                </div>

                                                <button type="button" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
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
                                                <div class="card-body card-block">
                                                    <div class="form-group">
                                                        <label for="company" class=" form-control-label">Landing Gear Flight Hour</label>
                                                        <input type="text" id="company" placeholder="Enter Landing Gear Flight Hour" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Landing Gear Flight Time Since New</label>
                                                        <input type="text" id="vat" placeholder="Enter Landing Gear Flight Time Since New" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Landing Gear Flight Cycle</label>
                                                        <input type="text" id="vat" placeholder="Enter Landing Gear Flight Cycle" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street" class=" form-control-label">Landing Gear Flight Cycle Ssince New</label>
                                                        <input type="text" id="street" placeholder="Enter Landing Gear Flight Cycle Ssince New" class="form-control">
                                                    </div>
                                                    

                                                </div>

                                                <button type="button" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
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