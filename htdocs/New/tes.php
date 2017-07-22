<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<title></title>
	<style type="text/css">
	body{
		background-color: black;		
	}
	.gambar{
		width: 180px;
		height: 200px;

		position: relative;
		float: left;
		overflow: hidden;
		border-style: solid;
		border-width: 2px;
		border-color: white;

	}
	.caption{
		height: 20%;
		width: 100%;
		background-color: white;
		filter: opacity(10%);
		visibility: hidden;
		animation: fadeOutDown 2s;
		transition: 2s;
		position: absolute;
		bottom: 0px;
		z-index: 2;
	}

	.gambar:hover .caption{
		visibility: visible;
		animation: fadeInUp 1s;
	}

	.caption {
		text-align: center;
		padding-top: 10px;
	}
	.close {
    position: absolute;
    top: 15px;
    right: 15px;
    color: #000;
    font-size: 11px;
    font-weight: bold;
	}

	</style>
</head>
<body>
<div style="margin-top: 100px">
	<center><a href="coba.php"><input type="button" value="UPLOAD LAGI"></input></a></center>
</div>

<?php
include "koneksi.php";
$sql = "select * FROM foto ";
$tampil = mysqli_query($con,$sql);
$data = mysqli_fetch_array($tampil);
while($data = mysqli_fetch_array($tampil)){?>

<div style="width: 900px; margin-left: 250px">

<div class="gambar">
<span class="close">
<a href="hapus.php?&edit=<?php echo $data['id_foto'];?>" class="hapus" style="text-decoration: none; color: white; font-size: 10px;">
	X</a>
</span>
	
<div>
	<img src="gambar/<?php echo $data['url'];?>" width="180" height="200">
	</div>
	<div class="caption">
		<?php echo $data['caption'];	?>
	</div>
</div>

</div>
<?php 
}
?>

</body>
</html>