<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Mangjek - Dashboard</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <!-- <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/> -->
        <link href="<?php echo base_url().'assets/css/theme-default.css'?>" rel="stylesheet" type="text/css" />
        <!-- EOF CSS INCLUDE -->           

        <style type="text/css">
            #chart-container {
                width: 640px;
                height: auto;
            }
            #chart-container1{
                width: 640px;
                height: auto;
            }
        </style>

    </head>
    <body>


        <!-- START PAGE CONTAINER -->
        <div class="login-container" style="min-height: 635px">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo" style="margin-bottom:70px ">
                    <img style="width: 100%" src="<?php echo base_url().'assets/images/users/logo.png'?>">
                </div>
                <div class="login-body">
                    <div class="login-title"><strong>Login</strong> Admin MangJek</div>
                    <form action="<?php echo base_url().'index.php/C_dashboard/cekLogin'?>" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input name="email" type="text" class="form-control" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input name="pass" type="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div> -->
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block btn btn-info mb-control" data-box="#message-box-info" style="background: #0D5C7D; border: none;">Log In</button>
                        </div>
                    </div>
                    <!-- <div class="login-or">OR</div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div> -->
<!--                     <div class="login-subtitle">
                        Don't have an account yet? <a href="#">Create an account</a>
                    </div> -->
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2017 Mangjek
                    </div>
                    <!-- <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div> -->
                </div>
            </div>
            
        </div>
    </body>
</html>






