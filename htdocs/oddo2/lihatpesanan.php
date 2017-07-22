<?php
include "conn.php";
include "user.php";

$hostsql = "localhost";
$usernamesql = "root";
$passsql = "";
$databasesql = "temp";
$konek = mysql_connect($hostsql, $usernamesql, $passsql);
mysql_select_db($databasesql, $konek);

$kecantikan = new User($url, $user, $pass, $db);
//$var = $kecantikan->lihatpesanan();
//print_r($var);
//$var2 = $kecantikan->cekdata();
//echo '<br>';
//print_r($var2);
$var =$kecantikan->lihatstatus('INV1482195794');
//print_r($var);
?>
<html>
    <head>
        <title>RUMAH CANTIK CEMPAKA</title>
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">RUMAH CANTIK CEMPAKA</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!-- <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="daftar_pemesanan.php">Daftar Pemesanan</a></li>
                        <li class=""><a href="daftar_tagihan.php">Daftar Tagihan</a></li>
                    </ul> -->
                    
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
<div class="col-md-12">
                        <h3>DAFTAR PEMESANAN</h3>
                        <hr>
                        <table class="table table-striped" cellspacing="0" width="100%" style="font-size:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                   
                                    <th>Status<th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $query = mysql_query("select * from temp_datapending");
                                while ($row = mysql_fetch_array($query)) {
                                    $no++;
                                    ?>
                                    <tr>
                                        
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div> </div>
					<?php 
					//print_r($var);
					//echo $var[0]['state'];