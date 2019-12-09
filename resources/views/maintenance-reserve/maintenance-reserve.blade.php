@extends('layouts.master') @section('title','Maintenance Reserve') @section('content')

<html>

<head>
    <!-- Datatable CSS-->
    <link href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">

</head>

</html>


<div class="col-md-12">
    <table id="example" class="table table-borderless table-data3" style="width:100%">
    @if (Auth::check() && Auth::user()->role == 'manager')
    <a href="/add-maintenance-reserve" class="btn btn-info mb-3">add maintenance reserve</a>
    @endif

    @if (Auth::check() && Auth::user()->role == 'admin')
    <a href="/add-maintenance-reserve" class="btn btn-info mb-3">add maintenance reserve</a>
    @endif
    
        <thead>
            <tr>
                <th>no</th>
                <th>date</th>
                <th>Aircraft Name</th>
                <th>Serial No</th>
                <th>Registration no</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @php $no = 1; @endphp
            @foreach($maintenancereserve as $mr)
                <td>{{ $no++ }}</td>
                <td>{{ Carbon\Carbon::parse($mr->date)->format('d M  Y') }}</td>
                <td>{{$mr->aircraft->asset_name}}</td>
                <td>{{$mr->aircraft->serial_no}}</td>
                <td>{{$mr->aircraft->no_registration}}</td>
                <td>
                    <div class="table-data-feature">
                    @if (Auth::check() && Auth::user()->role == 'admin')
                    <a href="/edit-maintenance-reserve/{{ $mr->id }}" class="btn btn-info mr-1">Edit</a> <br>
                    @endif
                    @if (Auth::check() && Auth::user()->role == 'manager')
                    <a href="/edit-maintenance-reserve/{{ $mr->id }}" class="btn btn-info mr-1">Edit</a> <br>
                    @endif
                    <a href="/detail-maintenance-reserve/{{ $mr->id }}" class="btn btn-success mr-1">Detail</a>
                    @if (Auth::check() && Auth::user()->role == 'admin')
                    <a href="/maintenance-reserve/delete/{{ $mr->id }}" class="btn btn-danger">Hapus</a>
                    @endif
                    @if (Auth::check() && Auth::user()->role == 'manager')
                    <a href="/maintenance-reserve/delete/{{ $mr->id }}" class="btn btn-danger">Hapus</a>
                    @endif
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