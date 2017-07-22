<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<title></title>
	
	<style type="text/css">
		body{
			margin:0px;
			padding:0px;
		}
		html,body {
		    height:96%;
		    
		}
		body {
		    overflow:hidden;
		}
	</style>
<?php 
	include "koneksi.php";
	session_start();
	if(isset($_SESSION['username'])){
	$username=$_SESSION['username'];
	}
	?>
</head>
<body>
	<nav class="navbar">
<div class="judul">My Website</div>
	<center><ul>
		<li>Menu1</li>
		<li>Menu2</li>
		<li>Menu3</li>
		
		<?php 
		if(empty($_SESSION['username'])){
			echo "<a href='login.php'><li class='login'>Login</li></a>";
			
		}else{
			echo "<a href='sessiondestroy.php'><li class='login'>Logout</li></a>";
		}
		?>
	</ul>
	</center>
</nav>
	
	<div class="hamburger-menu">
			<img src="img/hamburger1.png" width="30px" height="30px" />
		</div>
	<div class="sidebar">
		
		<img class="photo-profil" src="img/angel.jpg" width="100px" height="100x" />
		<div class="userlog"><h4> userlog </h4></div>
			<a href=""><div class="menu-sidebar">Home</div></a>
			<a href=""><div class="menu-sidebar">Home</div></a>
			<a href=""><div class="menu-sidebar">Home</div></a>
		</div>
	
	<div class="container2">
	<div class="status">
	<p>Status</p>
	<form method="post" enctype="multipart/form-data" action="upload.php">
	<textarea name="status" cols="80" rows="3" placeholder="Create your status"></textarea>
	<hr>
	<span class="upload">
		<input type="file" name="gambar" class="uploadd"/>
	</span>
	<input class="button-ok" type="submit" value="share" name="save"></input>
	</form>
    </div>
		<?php
	include "koneksi.php";
	$sql = "select * FROM foto order by tanggal_posting,jam_posting asc";
	$tampil = mysqli_query($con,$sql);
	$data = mysqli_fetch_array($tampil);
	while($data = mysqli_fetch_array($tampil)){
	$tem= $data['username'];	
	$sql = "select * FROM profil where username='$tem' ";
	$tampil2 = mysqli_query($con,$sql);
	$data2 = mysqli_fetch_array($tampil2);
  ?>

<div class="frame">
	<div class="top-frame">
		<div class="foto-profil" >
<?php echo "<img src='gambar/".$data2['photo']."' width='100%' height='100%'style='border-radius: 100%;' >";?>
		</div>
		<h4><?php echo ucfirst($data['username'])?></h4>
		<p><?php echo $data['tanggal_posting']?></p>
	</div>
<?php
if(!empty($data['url'])){?>
	<div class="upload-foto">
<?php
echo "<img class='foto-upload' src='gambar/".$data['url']."' width='100%' height='100%' >"; 
?>
	</div>
	<?php }else{
}?>
	<div class="menu-foto">
		<img  src="img/tombol.png" width="40px">
		<div class="submenu">
				<li><a href="">Report</a></li>
				<hr>
				<li><a href="hapus.php?&edit=<?php echo $data['id_foto'];?>">Hapus</a></li>
				<hr>
				<li><a href="">Edit</a></li>
		</div>
	</div>
	
	<hr>
	<div class="caption">
		<?php echo $data['caption'];?>
		<ul>
			<li>Comment |</li>
			<li>Like</li>

		</ul>
	</div>
	<div class="komenn">
		Komenn
	</div>
</div>
<div class="modal">
	<div class="text-box">
		
	</div>	
</div>
<?php }?>


</div>
	</div>

<script type="text/javascript" src="js/jquery-2.2.3.min.js">	
</script>
<script type="text/javascript" src="js/main.js">
</script>

</body>
</html>
