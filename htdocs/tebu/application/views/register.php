<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url('admin') ?>/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('admin') ?>/bootstrap/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url('admin') ?>/bootstrap/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('admin') ?>/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url('admin') ?>/plugins/iCheck/square/blue.css">

        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url('admin') ?>/dist/css/skins/_all-skins.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>



    <body class="hold-transition skin-green login-page">

        <header class="main-header">

            <!-- Logo -->
            <a href="login.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>i</b>T</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">i<b>TEBU</b></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <!--        <nav class="navbar navbar-static-top" role="navigation">
                      
                    </nav>-->
        </header>

        <div class="login-box">

            <div class="login-box-body">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Registrasi</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" action="<?php echo site_url('authtentification/sign_up')?>" method="post">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Nama" name="username" required>
                                <!--<input class="form-control" id="inputEmail" name="fullname" placeholder="Fullname" type="text">-->
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" id="inputPassword" name="password" placeholder="Password" type="password" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" id="inputEmail" name="email" placeholder="Email" type="text" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control" name="kecamatan" required>
                                     <?php echo $kecamatan;?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input class="form-control" id="inputEmail" name="no_telp" placeholder="Nomor Telepon" type="text" required>
                            </div>
                            
                            <input type="submit" class="btn btn-primary btn-block btn-flat" value="Sign In">
                        
                            
                        </form>
                    </div><!-- /.box-body -->
                </div>
                <div class="row">
                    <!--                    <div class="col-xs-8">
                                            
                                        </div> /.col -->
                    <div class="col-xs-4">
                        
                        <!--<button type="submit" class="btn btn-primary btn-block btn-flat">Sumbit</button>-->
                    </div><!-- /.col -->
                </div>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url('admin') ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url('admin') ?>/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('admin') ?>/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>

    <footer class="main-footer">
        <strong>Copyright &copy; 2015<a href="#"> iTEBU </a>.</strong> All rights reserved.
    </footer>


</html>
