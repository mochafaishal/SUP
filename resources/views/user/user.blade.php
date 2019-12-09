@extends('layouts.master') @section('title','User SUP') @section('content')
<html>

<head>
    <!-- Datatable CSS-->
    <link href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">
</head>

</html>

<div class="col-md-12">
    <table id="example" class="table table-borderless table-data3" style="width:100%">
        <button type="button" class="btn btn-primary btn-lg mb-3" onclick="window.location='{{ URL::route('add-user') }}'">Add User</button>

        <thead>
            <tr>
                <th>no</th>
                <th>name</th>
                <th>email</th>
                <th>role</th>
                <th>created at</th>
                <th>updated at</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @php $no = 1; @endphp
            @foreach($user as $user)
                <td>{{ $no++ }}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td>
                    <div class="table-data-feature">
                    <a href="/edit-user/{{ $user->id }}" class="btn btn-info mr-1">Edit</a> <br>
                    <a href="/user/delete/{{ $user->id }}" class="btn btn-danger">Hapus</a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>

    </table>
</div>

<!-- Jquery JS-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

<!-- Datatable-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    var $j = jQuery.noConflict(true);
    $j(document).ready(function() {
        $j('#example').DataTable();
    });
</script>
@endsection