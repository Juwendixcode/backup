<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	.gallery{
	position: relative;
	min-width: 200px;
	min-height: 200px;
	max-width: 300px;
	max-height: 300px;
	border: 1px solid #ccc;
	float: left;
	margin-right: 14px;
	margin-top: 9px;
	transition: 0.9s;
	background-color: white;
	padding: 4px;
}

.gallery img{
	transition: 0.9s;
}

.foto-caption{
	text-align: center;
	margin-top: 10px;
	color:#000000;
	font-size:20px;
	
}

.gallery:hover {
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	transition: 0.9s;
	cursor: pointer;	
}
.gallery:hover img{
  	transition: 0.9s;
	cursor: pointer;	
}

.close {
    position: absolute;
    top: 15px;
    
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    z-index: 1;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

</style>
	<title></title>
</head>
<body>
<form method="POST" action="upload.php" enctype="multipart/form-data">
<center><td colspan="4">Upload Gambar : <input type="file" name="gambar" required /> | Keterangan : <input type="text" name="keterangan"  /> | 
<input type="submit" value="Upload" name="save"></td></center>
</form>

<?php
include "koneksi.php";
$sql = "select * FROM gambar ";
$tampil = mysqli_query($con,$sql);
$data = mysqli_fetch_array($tampil);
while($data = mysqli_fetch_array($tampil)){?>




<div class="gallery">
	<div class="foto-upload">
	<img class="gambar" src="gambar/<?php echo $data['gambar'];?>" width="100%" height="100%">
	<div class="foto-caption" id="foto-caption">
	<?php echo $data['keterangan'];	?>
	</div>
	</div>
</div>
<?php 
}
?>
</body>
</html>


