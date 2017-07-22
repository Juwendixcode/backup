<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.css">


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
                        <h3 class="box-title">Register</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form role="form">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>




                            <div class="form-group">
                                <label for="inputEmail3" class="control-label">Email</label>

                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">

                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="control-label">Password</label>

                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">

                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="control-label">Konfirmasi Password</label>

                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>

                            <div class="form-group">

                            </div>


                        </form>

                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Desa</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>



                        </form>
                    </div><!-- /.box-body -->
                </div>
                <div class="row">
                    <!--                    <div class="col-xs-8">
                                            
                                        </div> /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sumbit</button>
                    </div><!-- /.col -->
                </div>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="plugins/iCheck/icheck.min.js"></script>
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
