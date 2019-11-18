@extends('layouts.master')

@section('title','Maintenance')


@section('content')
<div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>no</th>
                                                <th>maintenance type</th>
                                                <th>implementation</th>
                                                <th>paymen type</th>
                                                <th>reserve rate</th> 
                                                <th>estimed cost</th>                      
                                            </tr>
                                        </thead>
                                        <tbody>  
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>8 YR STUCTURE</td>
                                                <td>setiap 8 tahun</td>
                                                <td>calender</td>
                                                <td>fix per bulan</td>
                                                <td>$ 500.000</td>
                                            <tr>
                                            <tr>
                                                <td>2</td>
                                                <td>10 YR STUCTURE</td>
                                                <td>setiap 10 tahun</td>
                                                <td>calender</td>
                                                <td>fix per bulan</td>
                                                <td>$ 250.000</td>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

                    </div>
@endsection