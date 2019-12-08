@extends('layouts.master') @section('title','Add Maintenance') @section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>Add Maintenance</strong>
                </div>
                <div class="card-body card-block">
{{dd($maintenance)}}
                <form method="post" action="/maintenance/store">
 
                {{ csrf_field() }}
               
                <div class="form-group">
                        <label class=" form-control-label">Maintenance Name</label>
                        <input type="text" name="maintenance_name" placeholder="Enter Maintenance Name" class="form-control">
                        @if($errors->has('maintenance_name'))
                                <div class="text-danger">
                                    {{ $errors->first('maintenance_name')}}
                                </div>
                        @endif
                    </div>

                <div class="form-group">
                        <label class=" form-control-label">Maintenance Type</label>
                        <input type="text" name="maintenance_type" placeholder="Enter Maintenance" class="form-control">
                        @if($errors->has('maintenance_type'))
                                <div class="text-danger">
                                    {{ $errors->first('maintenance_type')}}
                                </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">Implementation</label>
                        <input type="number" name="implementation" placeholder="Enter Implementation" class="form-control">
                        @if($errors->has('implementation'))
                                <div class="text-danger">
                                    {{ $errors->first('implementation')}}
                                </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">Payment Type</label>
                        <input type="text" name="payment_type"placeholder="Enter Payment Rate" class="form-control">
                        @if($errors->has('payment_type'))
                                <div class="text-danger">
                                    {{ $errors->first('payment_type')}}
                                </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">Reserve Rate</label>
                        <input type="text" name="reserve_rate" placeholder="Enter Reserve Rate" class="form-control">
                        @if($errors->has('reserve_rate'))
                                <div class="text-danger">
                                    {{ $errors->first('reserve_rate')}}
                                </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class=" form-control-label">Estimed Cost</label>
                        <input type="number" name="estimed_cost" placeholder="Enter Estimed Cost" class="form-control">
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