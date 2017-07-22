<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>iTEBU</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('admin')?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('admin')?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('admin')?>/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url('admin')?>/plugins/fullcalendar/fullcalendar.print.css" media="print">
    <link rel="stylesheet" href="<?php echo base_url('admin')?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('admin')?>/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>i</b>T</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">i<b>TEBU</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              <!--<li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">2</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"> 2 pemberitahuan baru </li>
                  <li>
                    
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> Beli Pupuk 
                        </a>
                      </li>
                      
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> Panen Lahan 3
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>-->
              
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> 
                <span>User</span> 
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                <li class="active"><a href="<?php echo site_url('authtentification/logout')?>"><i class="fa fa-circle-o text-red"></i> Logout</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Data Tebu</span>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="<?php echo site_url('info_tebu')?>"><i class="fa fa-circle-o text-red"></i> show data tebu</a></li>
                <li class="active"><a href="<?php echo site_url('info_tebu/show_form_data_tebu')?>"><i class="fa fa-circle-o text-red"></i> Insert data tebu</a></li>
              </ul>
            </li>
            
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Jadwal</span>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="<?php echo site_url('schedule')?>"><i class="fa fa-circle-o text-red"></i> show schedule</a></li>
                <li class="active"><a href="<?php echo site_url('schedule/show_form_schedule')?>"><i class="fa fa-circle-o text-red"></i> Insert data penanaman</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
        <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <h1>
                        Grafik
                      </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Grafik</li>
                  </ol>
                </section>
                <section class="content">
                   <?php echo $notification?>
                    <div class="col-md-12">
                        <div class="box box-danger">
                         <?php echo $cal_dig?>
                     
                        </div>
                    </div>
                </section>
                 <!-- Control Sidebar -->
        </div><!-- ./wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2015<a href="#"> iTEBU </a>.</strong> All rights reserved.
    </footer>
    <!-- jQuery 2.1.4 -->
    
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('admin')?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('admin')?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo base_url('admin')?>/plugins/chartjs/Chart.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('admin')?>/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('admin')?>/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('admin')?>/dist/js/demo.js"></script>
    <!-- page script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url('admin')?>/plugins/fullcalendar/fullcalendar.min.js"></script>
    <?php 
        echo $js_diagram;
        echo $js_calendar;
        echo $js_notification;
          ?>
  </body>
</html>

