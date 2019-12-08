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

                <form method="post" action="/maintenance/update/{{ $maintenance->id }}">
 
                {{ csrf_field() }}
                {{ method_field('PUT') }}
               
                <div class="form-group">
                        <label class=" form-control-label">Maintenance Name</label>
                        <input type="text" name="maintenance_name" placeholder="Enter Maintenance Name" class="form-control" value="{{ $maintenance->maintenance_name }}">
                        @if($errors->has('maintenance_name'))
                                <div class="text-danger">
                                    {{ $errors->first('maintenance_name')}}
                                </div>
                        @endif
                    </div>

                <div class="form-group">
                        <label class=" form-control-label">Maintenance Type</label>
                        <input type="text" name="maintenance_type" placeholder="Enter Maintenance" class="form-control" value="{{ $maintenance->maintenance_type }}">
                        @if($errors->has('maintenance_type'))
                                <div class="text-danger">
                                    {{ $errors->first('maintenance_type')}}
                                </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">Implementation</label>
                        <input type="number" name="implementation" placeholder="Enter Implementation" class="form-control" value="{{ $maintenance->implementation }}">
                        @if($errors->has('implementation'))
                                <div class="text-danger">
                                    {{ $errors->first('implementation')}}
                                </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">Payment Type</label>
                        <input type="text" name="payment_type"placeholder="Enter Payment Rate" class="form-control" value="{{ $maintenance->payment_type }}">
                        @if($errors->has('payment_type'))
                                <div class="text-danger">
                                    {{ $errors->first('payment_type')}}
                                </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">Reserve Rate</label>
                        <input type="text" name="reserve_rate" placeholder="Enter Reserve Rate" class="form-control" value="{{ $maintenance->reserve_rate }}">
                        @if($errors->has('reserve_rate'))
                                <div class="text-danger">
                                    {{ $errors->first('reserve_rate')}}
                                </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">Estimed Cost</label>
                        <input type="number" name="estimed_cost" placeholder="Enter Estimed Cost" class="form-control" value="{{ $maintenance->estimed_cost }}">
                        @if($errors->has('estimed_cost'))
                                <div class="text-danger">
                                    {{ $errors->first('estimed_cost')}}
                                </div>
                        @endif
                    </div>

                    <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3" value="post">Add</button>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection