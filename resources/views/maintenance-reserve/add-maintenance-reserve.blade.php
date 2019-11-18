@extends('layouts.master') @section('title','Add Maintenance Reserve') @section('content')



<div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Add Aircraft</strong>
                                                </div>
                                                <div class="card-body card-block">
                                                <form action="/maintenance-reserve/store" method="post">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Aircraft Name</label>
                                                        <select name="aircraft_id" id="select" class="form-control">
                                                        @foreach($aircraft as $aircraft)
                                                        <option value="{{ $aircraft->id }}">{{ $aircraft->id }} - {{ $aircraft->asset_name }}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vat" class=" form-control-label">Date</label>
                                                        <input type="date" id="date" name="date" placeholder="date" class="form-control">
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