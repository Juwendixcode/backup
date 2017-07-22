<html>
<head>



<?php 
include "koneksi.php";
session_start();
?>

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">

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
	//$query = "select u.id_user,u.username,u.userid,u.email,u.tanggal_daftar,count(f.username) as posting from foto f join user u on f.username = u.username group by u.id_user,u.username,u.userid,u.email,u.tanggal_daftar";
	$query = "select* from user"; 
	$cek = mysqli_query($con,$query);
?>
<div id="judul"> All User</div>
<div id="table-user">
	<table>
		<th>ID</th><th>Username</th><th>User ID</th><th>Email</th><th>Tanggal Daftar</th><th>Jumlah Posting</th><th>Edit</th><th>Delete</th>
		<?php
			while($data = mysqli_fetch_array($cek)){
				$query2 = "select count(*) from foto where username ='".$data['username']."'"; 
				$cek2 = mysqli_query($con,$query2);
				$data2 = mysqli_fetch_array($cek2);
			?>
		<tr>
			<td><?php echo $data['id_user'];?></td>
			<td><?php echo $data['username'];?></td>
			<td class="kolom"><?php echo $data['userid'];?></td>
			<td class="kol"><?php echo $data['email'];?></td>
			<td><?php echo $data['tanggal_daftar'];?></td>
			<td><span class="edits"><?php echo $data2['count(*)'];?>
	<div class="layar" style="display:none; position: absolute; z-index: 2;">
	<span class="close" style="top:-14px;right:10px; font-size: 12px;">x</span>
	
	<div class="foto-groups" style="width:220px; height: 250px; background-color:white;">
	<div class="headers" style="width: 100%; height: 30px; background-color: #008CC9;float:left; ">
		<center><?php echo $data['username'];?></center>
	</div>
	<div class="box-fotonyaa" style="width: 100%;height:100%;float:left;  overflow: auto;">
	<?php 
		$idtemp = $data['username'];
		$query2 = "select * from foto where username='$idtemp'";
		$cek2 = mysqli_query($con,$query2);
		while($data2 = mysqli_fetch_array($cek2)){
	?>
		<img src="gambar/<?php echo $data2['url'];?>" width="70" height="70" />
	<?php } ?>
	</div>
	</div>
	</div>
			</span>
	
			</td>
			<td><a href="Edit.php?id=<?php echo $data['id_user'];?>"> Edit</a></td>
			<td><a href="#">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
</div>
<div id="judul" style="margin-top:-17px;"> Report</div>
<div class="report">
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

</body>
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script>
$(document).ready(function(){	
	$('.edits').on("click",function(){	
		$(this).find(".layar").fadeToggle("medium");
	});
	
	

});
	
</script>

</html>
