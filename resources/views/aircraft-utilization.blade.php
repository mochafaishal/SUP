@extends('layouts.master') @section('title','Aircraft Utilisation') @section('content')

<html>

<head>
    <!-- Datatable CSS-->
    <link href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">
</head>

</html>

<div class="col-md-12 ">
    <table id="example" class="table table-borderless table-data3" style="width:100%">
        <thead>
            <tr>
                <th>no</th>
                <th>Asset Name</th>
                <th>Serial No</th>
                <th>Registration no</th>
                <th>start date</th>
                <th>end date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @php $no = 1; @endphp
            @foreach($aircraft as $a)
                <td>{{ $no++ }}</td>
                <td>{{$a->asset_name}}</td>
                <td>{{$a->serial_no}}</td>
                <td>{{$a->no_registration}}</td>
                <td>{{ Carbon\Carbon::parse($a->start_date)->format('d M  Y') }}</td>
                <td>{{ Carbon\Carbon::parse($a->end_date)->format('d M  Y') }}</td>
                <td>
                    <div class="table-data-feature">
                    <a href="/detail-aircraft-utilization/{{ $a->id }}" class="btn btn-success mr-1">Lihat Utilisasi</a>
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