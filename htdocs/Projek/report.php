<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<style>
	.report-userr{
		border-radius:100%;
	}
	
</style>



<?php 
include "koneksi.php";
session_start();
?>


</head>
<body>

<nav class="navbar">
<div class="judul">My Website</div>
	<ul style="margin-left:40%;">
		<li><a href="admin.php">Home</a></li>
		<li><a href="report.php">Report</a></li>
		
		<?php 
		if(empty($_SESSION['username'])){
			echo "<a href='login.php'><li class='login'>Login</li></a>";
			
		}else{
			echo "<a href='sessiondestroy.php'><li class='login'>Logout</li></a>";
		}
		?>
	</ul>
	
</nav>

<?php
	if(isset($_GET['id'])){ 
	$query = "select * from pesan where id_pesan ='".$_GET['id']."' ";
	$cek = mysqli_query($con, $query);
	$data= mysqli_fetch_array($cek);
	$query2 ="select photo from profil where username ='".$data['pengirim']."'";
	$cek2 = mysqli_query($con, $query2);	
	$data2= mysqli_fetch_array($cek2);
	?>
<div class="box-besar">

<div id="report-box">
	<div class="boxx">
		<div class="pp-user" style="float:left; margin-left:30px; margin-top:30px;">
			<img class="report-userr" src="gambar/<?php echo $data2['photo']; ?>" width="60px" height="60px" />
		</div>
		<div class="user-pesan">
			<h2><?php echo $data['pengirim']; ?></h2>
</div>
</div>
	<hr />
	<div class="pesannya">
		<h4>Subject : <?php echo $data['subject']; ?></h4>
		<?php echo $data['pesan']; ?>
	</div>
</div>
<?php }else{?>

<div class="box-besar">

<div id="report-box">
	<div class="boxx">
		<div class="pp-user" style="float:left; margin-left:30px; margin-top:30px;">
			<img src="" width="60px" height="60px" />
		</div>
		<div class="user-pesan">
			<h2>Pesan</h2>
</div>
</div>
	<hr />
	<div class="pesannya">
		<h4>Subject :Subject</h4>
		
	</div>
</div>	
	
<?php } ?>


<div class="form-balas">
	<h2>Reply</h2>
	<form class="" method="post" action="">
		<textarea rows="10" cols="80"></textarea>
		<br />
		<input type="submit" value="Reply" />
	</form>
</div>

</div>



<div id="judul""> Report</div>
	<div class="report" style="margin-top:0px;">
	<?php 
	$query3 = "select * from pesan order by id_pesan desc";
	$cek3 = mysqli_query($con, $query3);
	while($data3= mysqli_fetch_array($cek3)){
	$query4 ="select photo from profil where username ='".$data3['pengirim']."'";
	$cek4 = mysqli_query($con, $query4);	
	$data4= mysqli_fetch_array($cek4);
	?>
	<a class="link" href="report.php?id=<?php echo $data3['id_pesan']; ?>">
	<div class="box-report">
		<div class="pp-user">
			<img  class="foto-ppnya" src ="gambar/<?php echo $data4['photo']; ?>" width="60px" height="60px" />
		</div>
		<div class="pesan">
			<span><?php echo $data3['pengirim']; ?></span>
			<span><?php echo $data3['tanggal_pesan']; ?></span>
			<span>Subject : <?php echo $data3['subject']; ?></span>
		</div>
	</div>
	</a>	
	<?php } ?>
		</div>
	</div>
	</a>
			
</div>
</body>
</html>