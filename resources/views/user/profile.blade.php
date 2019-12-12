@extends('layouts.master') @section('title','Profile User') @section('content') @endsection

<body class="animsition">
    <div class="page-wrapper">

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Detail User</strong>
                                    </div>
                                    <div class="card-body">
                                    <form action="" method="post" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-sm-2">
                                                    <label for="input-normal" class=" form-control-label">Nama : </label>
                                                </div>
                                                <div class="col col-sm-6">
                                                <label for="input-normal" class=" form-control-label">{{ $user->name }}</label>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-2">
                                                    <label for="input-normal" class=" form-control-label">Email : </label>
                                                </div>
                                                <div class="col col-sm-6">
                                                <label for="input-normal" class=" form-control-label">{{ $user->email }}</label>
                                                </div>
                                            </div>
                
                                            <div class="row form-group">
                                                <div class="col col-sm-2">
                                                    <label for="input-normal" class=" form-control-label">Role : </label>
                                                </div>
                                                <div class="col col-sm-6">
                                                <label for="input-normal" class=" form-control-label">{{ $user->role }}</label>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-sm-2">
                                                    <label for="input-normal" class=" form-control-label">Created At : </label>
                                                </div>
                                                <div class="col col-sm-6">
                                                <label for="input-normal" class=" form-control-label">{{ $user->created_at }}</label>
                                                </div>
                                            </div>
                
                                            <div class="row form-group">
                                                <div class="col col-sm-2">
                                                    <label for="input-normal" class=" form-control-label">Updated At : </label>
                                                </div>
                                                <div class="col col-sm-6">
                                                <label for="input-normal" class=" form-control-label">{{ $user->updated_at}}</label>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>