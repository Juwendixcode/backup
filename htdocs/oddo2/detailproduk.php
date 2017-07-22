<?php
include "conn.php";
include "user.php";
$id = $_GET['id'];
$kecantikan = new User($url, $user, $pass, $db);
$var = $kecantikan->PencarianProduk('id',$id);

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
                    <a class="navbar-brand" href="index.php">RUMAH CANTIK CEMPAKA</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <<!-- ul class="nav navbar-nav navbar-right">
			<li class=""><a href="daftar_pemesanan.php">Daftar Pemesanan</a></li>
                        <li class=""><a href="daftar_tagihan.php">Daftar Tagihan</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right"> -->
                        <!--<li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="logout.php">Logout</a></li>
                                <li><a href="ganti_password.php">Pengaturan</a></li>
                        <!--
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        
                        
                    </ul>
                </li>
                        -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div style="margin-top: 70px;">
                <div class='col-sm-offset-3 col-md-6 well' >
                    <?php
                    foreach ($var as $key => $value) {
                        ?>
						<center>
                        
                            <img class="col-md-12" src="data:image/png|jpg;base64,<?php echo $value['image'] ?>">
                       
                       <br>

                            <h3><?php echo $value['display_name']; ?></h3><br> 
                            Harga : <?php echo $value['lst_price']; ?><br>
                            Stock : <?php echo $value['qty_available']; ?> <br>
                            <form class="form-label-left" action="pesan.php" METHOD='POST'>
                                <input type="hidden" name="id" value="<?php echo $id ?>"> <br>
								<input type="hidden" name="nama" value="<?php echo $value['display_name']; ?>"> <br>
                                <input type="hidden" name="stock" value="<?php echo $value['qty_available']; ?>"> <br>
                                <input class="form-control" name="jumlah"  placeholder="Jumlah Pemesanan" required="required" type="number"> <br>
                                
                                    <button class="btn btn-primary">Pesan</button>
                                    <a href="index.php"><input type="button" class="btn btn-danger" value="BATAL"></a>
                                
                            </form>
							</center>
                            <?php
                        }
                        ?>
                    
                </div>

            </div>
        </div>
    </body>
</html>
