@extends('layouts.master') @section('title','Maintenance Reserve') @section('content')

<html>

<head>
    <!-- Datatable CSS-->
    <link href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">

</head>

</html>


<div class="col-md-12 table-responsive">
    <table id="example" class="table table-borderless table-data3" style="width:100%">
    <a href="/add-maintenance-reserve" class="btn btn-info mb-3">add maintenance reserve</a>
    
        <thead>
            <tr>
                <th>no</th>
                <th>date</th>
                <th>Aircraft Name</th>
                <th>Serial No</th>
                <th>Registration no</th>
               
                <th>amount due</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($maintenancereserve as $mr)
                <td>{{$mr->id}}</td>
                <td>{{$mr->date}}</td>
                <td>{{$mr->aircraft->asset_name}}</td>
                <td>{{$mr->aircraft->serial_no}}</td>
                <td>{{$mr->aircraft->no_registration}}</td>
                <td></td>
                <td>
                    <div class="table-data-feature">
                    <a href="/edit-maintenance-reserve" class="btn btn-info mr-1">Edit</a> <br>
                    <a href="/detail-maintenance-reserve/{{ $mr->id }}" class="btn btn-success mr-1">Detail</a>
                    <a href="/maintenance-reserve/delete/" class="btn btn-danger">Hapus</a>
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