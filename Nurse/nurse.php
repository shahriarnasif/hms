<?php
session_start();


?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse Dashboard</title>

    <link rel="stylesheet" type="text/css"href=
 "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 
 <script type="text/javascript" src=""></script>


 <script src="https://code.jquery.com/jquery-3.6.0.slim.js" 
 integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
 <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css"href=
"https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"></script>

</head>

<body>
   
<?php
include("../include/header.php");
?>



    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;">
                    
                    <!--side nav-->
                    <div class="list-group bg-info"  style="height: 90px;">
                        <a href="" class="list-group-item list-group-item-action bg-info text-center text-white">
                            Dashboard
                        </a>
                        <a href="" class="list-group-item list-group-item-action bg-info text-center text-white">
                            Administrators
                        </a>
                        <a href="" class="list-group-item list-group-item-action bg-info text-center text-white">
                            Doctors
                        </a>
                        <a href="" class="list-group-item list-group-item-action bg-info text-center text-white">
                            Patients
                        </a>

                    </div>
                </div>
                <div class="col-md-10">
                     
                    <h4 class="my-2">Nurse Dashboard</h4>

                    <div class="col-md-12 my-5">
                        <div class="row">
                        <div class="col-md-3 bg-success mx-2" style="height: 130px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="my-2 text-white"
                                        style="font-size: 30px;">0</h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Admin</h5>

                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                            <div class="col-md-3 bg-info mx-2" style="height: 130px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="my-2 text-white"
                                        style="font-size: 30px;">0</h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Doctors</h5>

                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><i class="fa fa-user-md fa-3x my-4" style="color: white;"></i></a>
                                    </div>

                                </div>

                            </div>

                            </div>

                            <div class="col-md-3 bg-warning mx-2" style="height: 130px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="my-2 text-white"
                                        style="font-size: 30px;">0</h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Patients</h5>

                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><i class="fa fa-procedures fa-3x my-4" style="color: white;"></i></a>
                                    </div>

                                </div>

                            </div>

                            </div>
                            <div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="my-2 text-white"
                                        style="font-size: 30px;">0</h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Report</h5>

                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><i class="fa fa-flag fa-3x my-4" style="color: white;"></i></a>
                                    </div>

                                </div>

                            </div>

                            </div>
                            <div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="my-2 text-white"
                                        style="font-size: 30px;">0</h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Job Request</h5>

                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><i class="fa fa-book-open fa-3x my-4" style="color: white;"></i></a>
                                    </div>

                                </div>

                            </div>

                            </div>
                            <div class="col-md-3 bg-success mx-2 my-2" style="height: 130px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="my-2 text-white"
                                        style="font-size: 30px;">0</h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Income</h5>

                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><i class="fa fa-money-check-alt fa-3x my-4" style="color: white;"></i></a>
                                    </div>

                                </div>

                            </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    
</body>
</html>