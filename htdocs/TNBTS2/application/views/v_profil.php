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
                        <a href="<?php echo base_url().'index.php/C_dashboard/setData'?>"><span class="fa fa-edit"></span> <span class="xn-text">Set Data</span></a>
                    </li>                    
                    

                    <li class="xn-title">Components</li>
                    <li class="active">
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
                    <li class="active">Profile</li>
                </ul>
                <!-- END BREADCRUMB -->                                                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <div class="panel panel-default">
                                <div class="panel-body profile" style="background: url('<?php echo base_url().'assets/images/gallery/music-2.jpg'?>') center center no-repeat;">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url().'assets/images/users/avatar.jpg'?>" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Mang Admin</div>
                                        <div class="profile-data-title" style="color: #FFF;">Administrator</div>
                                    </div>                                    
                                </div>                                
                                <div class="panel-body list-group border-bottom">
                                    <a href="#" class="list-group-item active"><span class="fa fa-user"></span> Profil</a>
                                    <a href="#" class="list-group-item"><span class="fa fa-cog"></span> Settings</a>
                                </div>
                            </div>                            
                        </div>
                        
                        <div class="col-md-9">

                            <form class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Profile</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <!-- <div class="panel-body">
                                    <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet. Vivamus volutpat erat ac vulputate laoreet. Phasellus eu ipsum massa.</p>
                                </div> -->
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"/>
                                            </div>                                            
                                            <!-- <span class="help-block">Email</span> -->
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                <input type="text" class="form-control"/>
                                            </div>                                            
                                            <!-- <span class="help-block">Email</span> -->
                                        </div>
                                    </div>

                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" class="form-control"/>
                                            </div>            
                                            <!-- <span class="help-block">Password field sample</span> -->
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Datepicker</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" value="2014-11-01">                                            
                                            </div>
                                            <span class="help-block">Click on input field to get datepicker</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Textarea</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" rows="5"></textarea>
                                            <span class="help-block">Default textarea field</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tags</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <input type="text" class="tagsinput" value="First,Second,Third"/>
                                            <span class="help-block">Default textarea field</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Select</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">File</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>
                                            <span class="help-block">Input type file</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Checkbox</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Checkbox title</label>
                                            <span class="help-block">Checkbox sample, easy to use</span>
                                        </div>
                                    </div> -->

                                </div>
                                <div class="panel-footer">
                                    <!-- <button class="btn btn-default">Clear Form</button>                                     -->
                                    <button class="btn btn-primary pull-right">Edit</button>
                                </div>
                            </div>
                            </form>

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
        <!-- END THIS PAGE PLUGINS-->        

        <!-- SET DATA PLUGINS -->
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/icheck/icheck.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/datatables/jquery.dataTables.min.js'?>"></script>    
        <!-- SET DATA PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/icheck/icheck.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js'?>"></script>     
        <script type='text/javascript' src="<?php echo base_url().'assets/js/plugins/icheck/icheck.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'?>"></script>        
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap-datepicker.js'?>"></script>                
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap-file-input.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/bootstrap/bootstrap-select.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/plugins/tagsinput/jquery.tagsinput.min.js'?>"></script>

        <script>            
            document.getElementById('links').onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = {index: link, event: event,onclosed: function(){
                        setTimeout(function(){
                            $("body").css("overflow","");
                        },200);                        
                    }},
                    links = this.getElementsByTagName('a');
                blueimp.Gallery(links, options);
            };
        </script>

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






