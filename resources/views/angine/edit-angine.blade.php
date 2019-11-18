@extends('layouts.master')

@section('title','Edit Angine')


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Angine</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Name</label>
                                            <input type="text" id="company" placeholder="Enter Name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">FH</label>
                                            <input type="number" id="vat" placeholder="Enter FH" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">FT SN</label>
                                            <input type="number" id="vat" placeholder="Enter FT SN" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">FC</label>
                                            <input type="number" id="vat" placeholder="Enter FC" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">FC SN</label>
                                            <input type="number" id="street" placeholder="Enter FC SN" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Billing Basis</label>
                                            <input type="text" id="street" placeholder="Enter Billing Basis" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Billing Rate</label>
                                            <input type="number" id="street" placeholder="Enter Billing Rate" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Amount Due</label>
                                            <input type="number" id="street" placeholder="Enter Amount Due" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Date</label>
                                            <input type="date" id="street" placeholder="Enter Date" class="form-control">
                                        </div>

          <button type="button" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
                                        </div>
                                    </div>
                                </div>
        </div>
    </div>
</div>
@endsection