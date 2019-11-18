@extends('layouts.master')

@section('title','Angine')


@section('content')
<div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>no</th>
                                                <th>name</th>
                                                <th>FH</th>
                                                <th>FT SN</th>
                                                <th>FC</th> 
                                                <th>FC SN</th>   
                                                <th>billing basis</th> 
                                                <th>billing rate</th>   
                                                <th>amount due</th>    
                                                <th>date</th>                    
                                            </tr>
                                        </thead>
                                        <tbody>  
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>engine 1</td>
                                                <td>2.987</td>
                                                <td>3.789</td>
                                                <td>7.689</td>
                                                <td>1.745</td>
                                                <td>EFM</td>
                                                <td>180,55</td>
                                                <td>$ 149</td>
                                                <td>1 September 2020</td>
                                            <tr>
                                            <tr>
                                                <td>2</td>
                                                <td>engine 2</td>
                                                <td>2.087</td>
                                                <td>2.789</td>
                                                <td>4.689</td>
                                                <td>1.045</td>
                                                <td>EFM</td>
                                                <td>120,52</td>
                                                <td>$ 249</td>
                                                <td>1 Oktober 2020</td>
                                            <tr>
                                            
                                      
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

                    </div>
@endsection