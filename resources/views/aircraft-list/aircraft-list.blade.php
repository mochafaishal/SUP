@extends('layouts.master') @section('title','Aircraft List') @section('content')

<html>

<head>
    <!-- Datatable CSS-->
    <link href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">
</head>

</html>

<div class="col-md-12 table-responsive">
    <table id="example" class="table table-borderless table-data3" style="width:100%">
    <a href="/add-aircraft" class="btn btn-info mb-3">Add aircraft</a>

        <thead>
            <tr>
                <th>no</th>
                <th>Asset Name</th>
                <th>Equipment Type</th>
                <th>Serial No</th>
                <th>Registration no</th>
                <th>Lease Status</th>
                <th>lessor</th>
                <!-- <th>Start Date</th>
                <th>End Date</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @php $no = 1; @endphp
            @foreach($aircraft as $a)
                <td>{{ $no++ }}</td>
                <td>{{$a->asset_name}}</td>
                <td>{{$a->equipment_type}}</td>
                <td>{{$a->serial_no}}</td>
                <td>{{$a->no_registration}}</td>
                <td>{{$a->lease_status}}</td>
                <td>{{$a->lessor}}</td>
                
                
                <!-- <td>{{$a->start_date}}</td>
                <td>{{$a->end_date}}</td> -->
                <td>
                    <div class="table-data-feature">
                    <a href="/edit-aircraft/{{ $a->id }}" class="btn btn-info mr-1">Edit</a> <br>
                    <a href="/detail-aircraft/{{ $a->id }}" class="btn btn-success mr-1">Detail</a>
                    <a href="/aircraft-list/delete/{{ $a->id }}" class="btn btn-danger">Hapus</a>
                    </div>
                </td>
            </tr> 
            @endforeach 

        <h1></h1>
            
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