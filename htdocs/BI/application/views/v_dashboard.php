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
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url().'index.php'?>">Mang Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url().'assets/images/users/avatar.jpg'?>" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url().'assets/images/users/avatar.jpg'?>" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Mang Jek</div>
                                <div class="profile-data-title">Administrator</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    

                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="<?php echo base_url().'index.php'?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-table"></span> <span class="xn-text">Report</span></a>
                    </li>          
                    <li >
                        <a href="<?php echo base_url(); ?>index.php/C_dashboard/setData"><span class="fa fa-pencil"></span> <span class="xn-text">Set Data</span></a>
                    </li>                    
                    

                    <li class="xn-title">Components</li>
                    <li>
                        <a href="pages-profile.html"><span class="fa fa-user"></span> <span class="xn-text">Profil</span></a>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"> <span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-8">
                            <h3>History Transaction</h3>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>

                    <div class="row">
						<div class="col-md-8">
                            
                            <div id="right"></div>
                                <div id="chart-container1">
                                    <canvas id="mycanvas1"></canvas>
                                </div>
                            <div id="center"></div>
                            
                        </div>

                        <div class="col-md-4">
                            
                            <div class="widget widget-info widget-padding-sm" style="height: 140px;">
                                <div class="widget-big-int plugin-clock" style="margin-top: 25px">00:00</div>
                                <div class="widget-subtitle plugin-date">Loading...</div>                            
                            </div>

                            <div class="widget widget-default widget-item-icon" onclick="location.href='table-datatables.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-bank"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php echo $juml_transaksi[0]['jumlah']; ?></div>
                                    <div class="widget-title">Total Transaction</div>
                                    <table>
                                        <thead>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td><div class="widget-subtitle"><span class="label label-success">&nbsp;Success&nbsp;</span></div></td>
                                                    <td>&nbsp; = <?php echo $juml_transaksi4[0]['jumlah']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="widget-subtitle"><span class="label label-warning">&nbsp;&nbsp;Cancel&nbsp;&nbsp;</span></div></td>
                                                    <td>&nbsp; = <?php echo $juml_transaksi5[0]['jumlah']; ?></td>
                                                </tr>                                                
                                                <tr>
                                                    <td><div class="widget-subtitle"><span class="label label-danger">Rejected</span></div></td>
                                                    <td>&nbsp; = <?php echo $juml_transaksi7[0]['jumlah']; ?></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>      
                                <!-- <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div> -->
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-8">
                            <h1></h1>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <h3>Driver dan Pelanggan Aktif</h3>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-8">

                            <div id="right"></div>
                                <div id="chart-container">
                                    <canvas id="mycanvas"></canvas>
                                </div>
                            <div id="center"></div>
                            
                        </div>

                        <div class="col-md-4">
                            <div class="widget widget-default widget-item-icon" onclick="location.href='table-datatables.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-automobile" aria-hidden="true"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php echo $juml_driver[0]['jumlah']; ?></div>
                                    <div class="widget-title">Total Driver</div>
                                    <table>
                                        <thead>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td><div class="widget-subtitle"><span class="label label-success">&nbsp;&nbsp; &nbsp; Aktif &nbsp; &nbsp;</span></div></td>
                                                    <td>&nbsp; = <?php echo $juml_driver1[0]['jumlah']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="widget-subtitle"><span class="label label-warning">Non-aktif</span></div></td>
                                                    <td>&nbsp; = <?php echo $juml_driver2[0]['jumlah']; ?></td>
                                                </tr>                                                
                                                <tr>
                                                    <td><div class="widget-subtitle"><span class="label label-danger">&nbsp;&nbsp;Banned&nbsp;</span></div></td>
                                                    <td>&nbsp; = <?php echo $juml_driver3[0]['jumlah']; ?></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="widget widget-default widget-item-icon" onclick="location.href='table-datatables.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php echo $juml_pelanggan[0]['jumlah']; ?></div>
                                    <div class="widget-title">Total pelanggan</div>
                                    <table>
                                        <thead>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td><div class="widget-subtitle"><span class="label label-success">&nbsp;&nbsp; &nbsp; Aktif &nbsp; &nbsp;</span></div></td>
                                                    <td>&nbsp; = <?php echo $juml_pelanggan1[0]['jumlah']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="widget-subtitle"><span class="label label-warning">Non-aktif</span></div></td>
                                                    <td>&nbsp; = <?php echo $juml_pelanggan2[0]['jumlah']; ?></td>
                                                </tr>                                                
                                                <tr>
                                                    <td><div class="widget-subtitle"><span class="label label-danger">&nbsp;&nbsp;Banned&nbsp;</span></div></td>
                                                    <td>&nbsp; = <?php echo $juml_pelanggan3[0]['jumlah']; ?></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- START DASHBOARD CHART -->
					<div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
					<div class="block-full-width">
                                                                       
                    </div>                    
                    <!-- END DASHBOARD CHART -->
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Apakah anda ingin keluar?</p>                    
                        <!-- <p>Press No if youwant to continue work. Press Yes to logout current user.</p> -->
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url().'assets/audio/alert.mp3'?>" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url().'assets/audio/fail.mp3'?>" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- CHART JS -->
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/Chart.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/Chart.PieceLabel.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/app.js'?>"></script>

        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/jquery/jquery.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/jquery/jquery-ui.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap.min.js'?>"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/icheck/icheck.min.js'?>"></script>        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/scrolltotop/scrolltopcontrol.js'?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/morris/raphael-min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/morris/morris.min.js'?>"></script>       
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/rickshaw/d3.v3.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/rickshaw/rickshaw.min.js'?>"></script>
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>"></script>
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>"></script>                
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap-datepicker.js'?>"></script>                
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/owl/owl.carousel.min.js'?>"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/moment.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/daterangepicker/daterangepicker.js'?>"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- SET DATA PLUGINS -->
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/icheck/icheck.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/datatables/jquery.dataTables.min.js'?>"></script>    
        <!-- SET DATA PLUGINS -->

        <!-- START TEMPLATE -->
        <!-- <script type="text/javascript" src="<?php //echo base_url().'assets/js/settings.js'?>"></script> -->
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins.js'?>"></script>        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/actions.js'?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/demo_dashboard.js'?>"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






