<?php
include "conn.php";
include "user.php";

$kecantikan = new User($url, $user, $pass, $db);
$var = $kecantikan->TampilProduk();

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
                   <!--  <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="daftar_pemesanan.php">Daftar Pemesanan</a></li>
                        <li class=""><a href="daftar_tagihan.php">Daftar Tagihan</a></li>
                    </ul> -->
                    
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="row" style="margin-top: 70px;">
<?php
foreach ($var as $key => $value) {
    ?>
                    <div class='col-md-3 col-xs-12' style='height:400px' >
		<div class='well' >
                    
                            
                                <img style='max-height:200px' class="col-md-12" src="data:image/png|jpg;base64,<?php echo $value['image'] ?>" ><br>
                           <?php echo $value['display_name']; ?>
                           
                                <br>Rp: <?php echo $value['lst_price']; ?><br>
                                Stock : <?php echo $value['qty_available']; ?>
                            
                                <form action="detailproduk.php">
                                    <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                    <button class="btn btn-primary">Pesan</button>
                                </form>
                            
                        </div>
                    </div>
    <?php
	
}
?>
            </div>
        </div>
    </body>
</html>