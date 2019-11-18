@extends('layouts.master')

@section('title','Edit Maintenance')


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Maintenance</strong>
                                    </div>
                                    <div class="card-body card-block">
                                    <div class="form-group">
                                            <label for="company" class=" form-control-label">Maintenance Name</label>
                                            <input type="text" id="company" placeholder="Enter Maintenance" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Maintenance Type</label>
                                            <input type="text" id="company" placeholder="Enter Maintenance" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Implementation</label>
                                            <input type="text" id="vat" placeholder="Enter Implementation" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Payment Rate</label>
                                            <input type="text" id="vat" placeholder="Enter Payment Rate" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Reserve Rate</label>
                                            <input type="text" id="vat" placeholder="Enter Reserve Rate" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Estimed Cost</label>
                                            <input type="number" id="street" placeholder="Enter Estimed Cost" class="form-control">
                                        </div>
          <button type="button" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
                                        </div>
                                    </div>
                                </div>
        </div>
    </div>
</div>
@endsection