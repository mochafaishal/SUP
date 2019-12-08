@extends('layouts.master') @section('title','Edit Engine') @section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Engine</strong>
                </div>
                <div class="card-body card-block">
                <form method="post" action="/engine/update/{{ $engine1->id }}">
                {{ csrf_field() }}
                        {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="company" class=" form-control-label">Name</label>
                        <input type="text"  name="engine_name" id="company" placeholder="Enter Name" class="form-control" value="{{ $engine1->engine_name }}">
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">No Registration</label>
                        <input type="text" name="no_registration" id="company" placeholder="Enter No Registration" class="form-control" value="{{ $engine1->no_registration }}">
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">No Serial</label>
                        <input type="text" name="serial_no" id="company" placeholder="Enter No Serial" class="form-control" value="{{ $engine1->serial_no }}">
                    </div>
                    <button type="submit" class="bbtn btn-primary btn-lg btn-block mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection