@extends('layouts.master') @section('title','Edit Maintenance Reserve') @section('content')



<div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Edit Maintenance</strong>
                                                </div>
                                                <div class="card-body card-block">
                                                <form action="/maintenance/update/{{ $maintenancereserve->id}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                               
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Aircraft Name</label>
                                                        <select name="aircraft_id" id="select" class="form-control">
                                                        <option @if($maintenancereserve->aircraft->id ) {{ "selected"}} @endif value="{{ $maintenancereserve->aircraft->id }}">{{ $maintenancereserve->aircraft->asset_name }} </option>
                                                        </select>
                                                        @if($errors->has('aircraft_id'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('aircraft_id')}}
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Date</label>
                                                        <input type="date" id="date" name="date" placeholder="date" class="form-control" value="{{ $maintenancereserve->date }}">
                                                    </div>
                                                </div>

                                                <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

@endsection