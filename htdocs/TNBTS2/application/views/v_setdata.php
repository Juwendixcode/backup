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
                    <li class="">
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
                    <li class="active">
                        <a href="<?php echo base_url().'index.php/C_dashboard/setData'?>"><span class="fa fa-edit"></span> <span class="xn-text">Set Data</span></a>
                    </li>                    
                    

                    <li class="xn-title">Components</li>
                    <li class="">
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
                    <li class="active">Tables</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-edit"></span> Daftar Tabel</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Semua Driver</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>No KTP</th>
                                                <th>Telepon</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Panel</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allDriver as $key) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $key->nama_depan . " " . $key->nama_belakang; ?></td>
                                                    <!-- <td> -->
                                                        <?php 
                                                        // echo $key->driver_job; 
                                                        ?>
                                                    <!-- </td> -->
                                                    <td><?php
                                            // if ($tittle == 'Sub-Foot' || $tittle == 'M-Service') {
                                            //     echo '-';
                                            // } else {
                                                echo $key->no_ktp;
                                            // }
                                                ?></td>
                                                    <td><?php echo $key->no_telepon; ?></td>
                                                    <td><?php echo $key->email; ?></td>
                                                    <td>
                                                        <!--aktif, non aktif, banned-->
                                                        <?php
                                                        if ($key->status == '1') {
                                                            echo '<span class="label label-success">Aktif</span>';
                                                        } else if ($key->status == '2') {
                                                            echo '<span class="label label-warning">Non Aktif</span>';
                                                        } else if ($key->status == '3') {
                                                            echo '<span class="label label-danger">Banned</span>';
                                                        }
                                                        ?>

                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>index.php/C_dashboard/detailDriver/<?php echo $key->id; ?>">
                                                            <button type="button" class="btn btn-default btn-xs">Detail
                                                            </button>
                                                        </a>
                                                        <a href="<?php echo base_url(); ?>index.php/C_dashboard/resetPassword/<?php echo $key->id; ?>/<?php echo $key->nama_depan; ?>">
                                                            <button type="button" class="btn btn-primary btn-xs" onclick="return confirm('Apakah anda yakin melakukan reset password kepada driver <?php echo $key->nama_depan . " " . $key->nama_belakang; ?> ?')">Reset Password
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                            <!-- START SIMPLE DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Semua Pelanggan</h3>   
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Telepon</th>
                                                <th>Pendaftaran</th>
                                                <th style="width: 180px">Jumlah Transaksi</th>
                                                <th>Panel</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allPelanggan as $key) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $key->nama_depan . " " . $key->nama_belakang; ?></td>
                                                    <td><?php echo $key->alamat; ?></td>
                                                    <td><?php echo $key->no_telepon; ?></td>
                                                    <td><?php echo $key->created_on; ?></td>
                                                    <td><?php echo $key->jumlah_transaksi; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#status<?php echo $key->id; ?>">Ubah Status</button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SIMPLE DATATABLE -->

                        </div>
                    </div>                                
                    
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

        <!-- SET DATA PLUGINS -->
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/icheck/icheck.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/datatables/jquery.dataTables.min.js'?>"></script>    
        <!-- SET DATA PLUGINS -->

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

        <!-- START TEMPLATE -->
        <!-- <script type="text/javascript" src="<?php //echo base_url().'assets/js/settings.js'?>"></script> -->
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins.js'?>"></script>        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/actions.js'?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/demo_dashboard.js'?>"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






