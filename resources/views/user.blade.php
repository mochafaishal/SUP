@extends('layouts.master')

@section('title','User SUP')


@section('content')

<div class="container-fluid">
<div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>no</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>created at</th>
                                                <th>update at</th>                                
                                            </tr>
                                        </thead>
                                        <tbody>  
                                            @foreach($users as $users)
                                            <tr>
                                                <td>{{ $users->id }}</td>
                                                <td>{{ $users->name }}</td>
                                                <td>{{ $users->email }}</td>
                                                <td>{{ $users->created_at }}</td>
                                                <td>{{ $users->updated_at }}</td>
                                            <tr>
                                            @endforeach
                                      
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

                    </div>
@endsection
