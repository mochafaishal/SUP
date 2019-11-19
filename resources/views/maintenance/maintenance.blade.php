@extends('layouts.master') @section('title','Maintenance') @section('content')

<html>

<head>
    <!-- Datatable CSS-->
    <link href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">

</head>

</html>

<div class="col-md-12">
    <table id="example" class="table table-borderless table-data3" style="width:100%">
        <button type="button" class="btn btn-primary btn-lg mb-3" onclick="window.location='{{ URL::route('add-maintenance') }}'">Add Maintenance</button>

        <thead>
            <tr>
                <th>no</th>
                <th>maintenance name</th>
                <th>maintenance type</th>
                <th>implementation</th>
                <th>paymen type</th>
                <th>reserve rate</th>
                <th>estimed cost</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <tr>	@php $no = 1; @endphp
    @foreach($maintenance as $m)
                <td>{{ $no++ }}</td>
                <td>{{$m->maintenance_name}}</td>
                <td>{{$m->maintenance_type}}</td>
                <td>Setiap {{$m->implementation}} Tahun</td>
                <td>{{$m->payment_type}}</td>
                <td>{{$m->reserve_rate}}</td>
                <td>$ {{ number_format($m->estimed_cost, 2, ',', '.') }}</td>
                <td>
                    <div class="table-data-feature">
                        <a href="/edit-maintenance/{{ $m->id }}" class="btn btn-info mr-1">Edit</a> <br>
                        <a href="/maintenance/delete/{{ $m->id }}" class="btn btn-danger">Hapus</a>
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