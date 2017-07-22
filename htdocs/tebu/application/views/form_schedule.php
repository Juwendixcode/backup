<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Tebu</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url('admin')?>/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('admin')?>/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url('admin')?>/plugins/iCheck/square/blue.css">

        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url('admin')?>/dist/css/skins/_all-skins.css">


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
            <a href="<?php echo site_url('schedule');?>" class="logo">
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
            <?php echo $notification?>
            <div class="login-box-body">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Tebu</h3>
                    </div><!-- /.box-header -->
                    <form role="form" action="<?php echo site_url('schedule/'.$action)?>" method="get">
                         <div class="form-group">
                            <label>Jenis Tebu</label>
                            <select class="form-control" name="jenis" required>
                                 <?php echo $jenis;?>
                            </select>
                        </div>
                          <?php echo $input_tanggal;?>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                                </div><!-- /.col -->
                            </div>
                        </form>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url('admin')?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url('admin')?>/bootstrap/js/bootstrap.min.js"></script>
        <!-- Select2 -->
        <script src="<?php echo base_url('admin')?>/plugins/select2/select2.full.min.js"></script>
        <!-- InputMask -->
        <script src="<?php echo base_url('admin')?>/plugins/input-mask/jquery.inputmask.js"></script>
        <script src="<?php echo base_url('admin')?>/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="<?php echo base_url('admin')?>/plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <!-- bootstrap time picker -->
        <script src="<?php echo base_url('admin')?>/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- iCheck 1.0.1 -->
        <script src="<?php echo base_url('admin')?>/plugins/iCheck/icheck.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url('admin')?>/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('admin')?>/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('admin')?>/dist/js/demo.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
        <script>
          $(function () {
            //Datemask dd/mm/yyyy
            $("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
            //Datemask2 mm/dd/yyyy
            $("#datemask2").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
            //Money Euro
            $("[data-mask]").inputmask();

          });
        </script>
        <?php
        echo $js_notification;
          ?>
    </body>

    <footer class="main-footer">
        <strong>Copyright &copy; 2015<a href="#"> iTEBU </a>.</strong> All rights reserved.
    </footer>


</html>
