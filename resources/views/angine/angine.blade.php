@extends('layouts.master') @section('title','Angine') @section('content')

<html>

<head>
    <!-- Datatable CSS-->
    <link href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">

</head>

</html>
<div class="table-responsive table--no-card m-b-30">
    <div class="col-md-12">
        <table id="example" class="table table-borderless table-data3" style="width:100%">
            <button type="button" class="btn btn-primary btn-lg mb-3" onclick="window.location='{{ URL::route('add-angine') }}'">Add Angine</button>

            <thead>
                <tr>
                    <th>no</th>
                    <th>name</th>
                    <th>no registration</th>
                    <th>no serial</th>
                    <th>FH</th>
                    <th>FT SN</th>
                    <th>FC</th>
                    <th>FC SN</th>
                    <th>billing basis</th>
                    <th>billing rate</th>
                    <th>amount due</th>
                    <th>date</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>engine 1</td>
                    <td>ELP-134</td>
                    <td>BG-678</td>
                    <td>2.987</td>
                    <td>3.789</td>
                    <td>7.689</td>
                    <td>1.745</td>
                    <td>EFM</td>
                    <td>180,55</td>
                    <td>$ 149</td>
                    <td>1 September 2020</td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" onclick="window.location='{{ URL::route('edit-angine') }}'" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>engine 2</td>
                    <td>EP-14</td>
                    <td>BPS-778</td>
                    <td>5.787</td>
                    <td>3.189</td>
                    <td>1.680</td>
                    <td>2.045</td>
                    <td>EFM</td>
                    <td>110,35</td>
                    <td>$ 271</td>
                    <td>1 Oktober 2020</td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" onclick="window.location='{{ URL::route('edit-angine') }}'" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>
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