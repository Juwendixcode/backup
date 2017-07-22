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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css"> 
        <?php echo $map['js']; ?>

    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url().'index.php/C_dashboard/dash'?>">Mang Admin</a>
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
                                <a href="<?php echo base_url().'index.php/C_dashboard/profil'?>" class="profile-control-left"><span class="fa fa-info"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    

                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="<?php echo base_url().'index.php/C_dashboard/dash'?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-table"></span> <span class="xn-text">Report</span></a>
                    </li>          
                    <li class="xn-openable">                                
                                <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                                <ul>
                                    <li><a href="<?php echo base_url().'index.php/C_dashboard/inbox'?>"><span class="fa fa-inbox"></span> Inbox</a></li>
                                    <li><a href="<?php echo base_url().'index.php/C_dashboard/composed'?>"><span class="fa fa-pencil"></span> Compose</a></li>
                                </ul>
                            </li>
                    <li >
                        <a href="<?php echo base_url().'index.php/C_dashboard/setData'?>"><span class="fa fa-edit"></span> <span class="xn-text">Set Data</span></a>
                    </li>                    
                    

                    <li class="xn-title">Components</li>
                    <li>
                        <a href="<?php echo base_url().'index.php/C_dashboard/profil'?>"><span class="fa fa-user"></span> <span class="xn-text">Profil</span></a>
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

<!--                     <div class="row">
                        <div class="col-md-8">
                            <h3>History Transaction</h3>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div> -->

<!--                     <div class="row">
                        <div class="col-md-8">
                            
                            <div id="right"></div>
                                <div id="chart-container1">
                                    <canvas id="mycanvas1"></canvas>
                                </div>
                            <div id="center"></div>
                            
                        </div>

                    
                    <div class="row">
                        <div class="col-md-8">
                            <h1></h1>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div> -->

<!--                <div class="row">
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

                            <div class="panel panel-default">
                                <div class="panel-heading">                                    
                                    <div class="panel-title-box">
                                        <h2 style="margin: 0">Driver</h2>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li> 
                                    </ul>                                    
                                </div>

                                <div class="widget widget-default widget-item-icon" onclick="location.href='<?php //echo base_url(); ?>index.php/C_dashboard/setData';">
                                    <div class="widget-item-left">
                                        <span class="fa fa-automobile" aria-hidden="true"></span>
                                    </div>                             
                                    <div class="widget-data">
                                        <div class="widget-int num-count"><?php // echo $juml_driver[0]['jumlah']; ?></div>
                                        <div class="widget-title">Total Driver</div>
                                        <table>
                                            <thead>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td><div class="widget-subtitle"><span class="label label-success">&nbsp;&nbsp; &nbsp; Aktif &nbsp; &nbsp;</span></div></td>
                                                        <td>&nbsp; = <?php // echo $juml_driver1[0]['jumlah']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="widget-subtitle"><span class="label label-warning">Non-aktif</span></div></td>
                                                        <td>&nbsp; = <?php // echo $juml_driver2[0]['jumlah']; ?></td>
                                                    </tr>                                                
                                                    <tr>
                                                        <td><div class="widget-subtitle"><span class="label label-danger">&nbsp;&nbsp;Banned&nbsp;</span></div></td>
                                                        <td>&nbsp; = <?php // echo $juml_driver3[0]['jumlah']; ?></td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">                                    
                                    <div class="panel-title-box">
                                        <h2 style="margin: 0">Pelanggan</h2>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    </ul>                                    
                                </div>    

                                <div class="widget widget-default widget-item-icon" onclick="location.href='<?php // echo base_url(); ?>index.php/C_dashboard/setData';">
                                    <div class="widget-item-left">
                                        <span class="fa fa-user" aria-hidden="true"></span>
                                    </div>                             
                                    <div class="widget-data">
                                        <div class="widget-int num-count"><?php // echo $juml_pelanggan[0]['jumlah']; ?></div>
                                        <div class="widget-title">Total pelanggan</div>
                                        <table>
                                            <thead>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td><div class="widget-subtitle"><span class="label label-success">&nbsp;&nbsp; &nbsp; Aktif &nbsp; &nbsp;</span></div></td>
                                                        <td>&nbsp; = <?php // echo $juml_pelanggan1[0]['jumlah']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="widget-subtitle"><span class="label label-warning">Non-aktif</span></div></td>
                                                        <td>&nbsp; = <?php // echo $juml_pelanggan2[0]['jumlah']; ?></td>
                                                    </tr>                                                
                                                    <tr>
                                                        <td><div class="widget-subtitle"><span class="label label-danger">&nbsp;&nbsp;Banned&nbsp;</span></div></td>
                                                        <td>&nbsp; = <?php // echo $juml_pelanggan3[0]['jumlah']; ?></td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                    <div class="row">
                        <div class="col-md-8">                        
                            <!-- START maps -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Persebaran Driver dan Order</h3>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <!-- <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li> -->
                                        <li>
                                            <form role="form" class="form-horizontal" method="post" action="">
                                                <div class="form-group">
                                                    <input style="float: right; margin-top: 0.3em; margin-right: 1em" type="submit" name="submit" value="Go"/>  
                                                    <div class="" style="float: right; margin: 0 1em">
                                                        <select class="form-control select" name="pilih">
                                                            <option value=""><?php echo $kecamatan; ?></option>
                                                            <option value="al">Alang Alang Lebar</option>
                                                            <option value="kn">Kemuning</option>
                                                            <option value="kd">Kalidoni</option>
                                                            <option value="it1">Ilir Timur I</option>
                                                            <option value="it2">Ilir Timur II</option>
                                                            <option value="ib1">Ilir Barat I</option>
                                                            <option value="ib2">Ilir Barat II</option>
                                                            <option value="gd">Gandus</option>
                                                            <option value="bk">Bukit Kecil</option>
                                                            <option value="su1">Seberang Ulu I</option>
                                                            <option value="su2">Seberang Ulu II</option>
                                                            <option value="sk">Sako</option>
                                                            <option value="pj">Plaju</option>
                                                        </select>
                                                    </div>
                                                    <label class="control-label" style="float: right;">Kecamatan</label>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>  
                                </div>
                                <div class="panel-body panel-body-map">
                                    <?php echo $map['html']; ?>
                                    <!-- <?php //echo $map['js']; ?> -->
                                </div>
                            </div>

                            <!-- END maps -->
                        </div>

                        <div class="col-md-4">
                            
                            <!-- <div class="widget widget-info widget-padding-sm" style="height: 80px;">
                                <div class="widget-big-int plugin-clock" style="margin-top: 25px">00:00</div>
                                <div class="widget-subtitle plugin-date">Loading...</div>                            
                            </div> -->

                            <div class="panel panel-default">
                                <div class="panel-heading">                                    
                                    <div class="panel-title-box">
                                        <h2 style="margin: 0">Transaksi</h2>
                                        <!-- <span>Users vs returning</span> -->
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <!-- <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li> -->
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <!-- <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li> -->                                        
                                    </ul>                                    
                                </div>

                                <div class="widget widget-default widget-item-icon" onclick="location.href='<?php echo base_url(); ?>index.php/C_dashboard/setData';">
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
                                                        <td><div class="widget-subtitle"><span class="label label-success">&nbsp;&nbsp;&nbsp;Success&nbsp;&nbsp;</span></div></td>
                                                        <td>&nbsp; = <?php echo $juml_transaksi4[0]['jumlah']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="widget-subtitle"><span class="label label-primary">&nbsp;&nbsp;&nbsp;Cancel&nbsp;&nbsp;&nbsp;&nbsp;</span></div></td>
                                                        <td>&nbsp; = <?php echo $juml_transaksi5[0]['jumlah']; ?></td>
                                                    </tr>                                                
                                                    <tr>
                                                        <td><div class="widget-subtitle"><span class="label label-danger">&nbsp;&nbsp;Rejected&nbsp;&nbsp;</span></div></td>
                                                        <td>&nbsp; = <?php echo $juml_transaksi7[0]['jumlah']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><div class="widget-subtitle"><span class="label label-warning">Contacting</span></div></td>
                                                        <td>&nbsp; = <?php echo $juml_transaksi1[0]['jumlah']; ?></td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>      
                                <!-- <div class="widget-controls">                                 -->
                                    <!-- <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a> -->
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">                                    
                                    <div class="panel-title-box">
                                        <h2 style="margin: 0">Driver</h2>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li> 
                                    </ul>                                    
                                </div>

                                <div class="widget widget-default widget-item-icon" onclick="location.href='<?php //echo base_url(); ?>index.php/C_dashboard/setData';">
                                    <div class="widget-item-left">
                                        <span class="fa fa-automobile" aria-hidden="true"></span>
                                    </div>                             
                                    <div class="widget-data">
                                        <div class="widget-int num-count"><?php // echo $juml_driver[0]['jumlah']; ?></div>
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
                            </div>

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
                        <div class="col-md-12">
                            <!-- <?php //echo $bi[0]['jumlah']; ?> -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3 class="panel-title">Clustering Jumlah Pelanggan by Lokasi Kecamatan</h3>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li>
                                            <button type="button" class="btn btn-info mb-control" data-box="#message-box-info">Info</button>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="panel-body panel-body-map">
                                    <iframe style="width: 100%; height: 750px" src="https://app.powerbi.com/view?r=eyJrIjoiMTUyNGNjOTAtMzQ5OC00MTdkLWI0NjMtYTVhNzM2MzI0Zjg4IiwidCI6IjI4MGRhZjUyLTEzZjYtNDc1ZS1hNDJhLThhNzUxNzU5Zjk3YSIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
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
            <!-- <div id="test">I've been Loaded!</div> -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- info -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        <script type="text/javascript">
            // var hot = document.getElementById("message-box-info");
            var hot = 'info';
            $(document).ready(function(){
                // launchWindow(hot);
                alert (hot);
            });
        </script>
        <!-- tombol info-->
        <div class="message-box message-box-info animated fadeIn" id="message-box-info">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-info"></span> Information</div>
                    <div class="mb-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at tellus sed mauris mollis pellentesque nec a ligula. Quisque ultricies eleifend lacinia. Nunc luctus quam pretium massa semper tincidunt. Praesent vel mollis eros. Fusce erat arcu, feugiat ac dignissim ac, aliquam sed urna. Maecenas scelerisque molestie justo, ut tempor nunc.</p>
                    </div>
                    <div class="mb-footer">
                        <button class="btn btn-default btn-lg pull-right mb-control-close">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end info -->

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
                            <a href="<?php echo base_url().'index.php/C_dashboard/logout'?>" class="btn btn-success btn-lg">Yes</a>
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

        <!-- ALERT -->
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/noty/jquery.noty.js'?>"></script>
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/noty/themes/default.js'?>"></script>
        <!-- END -->

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
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/jvectormap/jquery-jvectormap-europe-mill-en-mill-en.js'?>"></script>                
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap-datepicker.js'?>"></script>                
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/owl/owl.carousel.min.js'?>"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/moment.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/daterangepicker/daterangepicker.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap-datepicker.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap-timepicker.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap-colorpicker.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap-file-input.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap-select.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/tagsinput/jquery.tagsinput.min.js'?>"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- SET DATA PLUGINS -->
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/icheck/icheck.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/datatables/jquery.dataTables.min.js'?>"></script>    
        <!-- SET DATA PLUGINS -->

        <!-- MAPS PLUGINS-->        


        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/icheck/icheck.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'?>"></script>       
        <!-- MAPS PLUGINS-->

        <!-- START TEMPLATE -->
        <!-- <script type="text/javascript" src="<?php //echo base_url().'assets/js/settings.js'?>"></script> -->
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins.js'?>"></script>        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/actions.js'?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/demo_dashboard.js'?>"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






