<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">
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
		<?php
			$foto = "select * FROM profil where username='$username' ";
			$cek1 = mysqli_query($con,$foto);
			$profil = mysqli_fetch_array($cek1);
		    echo "<img class='photo-profil' src='gambar/".$profil['photo']."' width='100px' height='100x' />";
		    ?>
		<div class="userlog"><h4> userlog </h4></div>
			<a href="home2.php"><div class="menu-sidebar">Home</div></a>
			<a href="index.php"><div class="menu-sidebar">Profil</div></a>
			<a href="friend.php"><div class="menu-sidebar">Friend</div></a>
	</div>

<div class="main">
	
<div class="top">

<div class="timeline">

<img  class="foto" src="img/angel.jpg" width="100%" height="80%">

<?php
if(empty($username)) {
echo "<img class='user' src='gambar/Logo.png' >";

}else{
$fotos = "select photo FROM profil where username='$username' ";
$cek2 = mysqli_query($con,$fotos);
$pp = mysqli_fetch_array($cek2);
echo "<img class='user' src='gambar/".$pp['photo']."' >";
}
?>
<h2><?php 
if(empty($username)){
echo  "user";
}else{
echo  $username;
}?></h2>

		</div>
	</div>
</div>

<div class="container">
<div class="biodata">
		<h3>Biodata</h3>
		<?php 
		$sqlnya1 = "select * from profil where username = '$username'";
		?>
		<table class="bio">
			<tr>
				<td>Nama</td>
				<td>Hanif</td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>19 - 20 - 1995</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>hanif@gmail.com</td>
			</tr>
						
			</table>
				<hr />
				<div class="friend">
					<?php
					$query_jumlah =" select count(*) from friend where id_user = '".$profil['id_user']."'"; 					
					$jumlah = mysqli_query($con, $query_jumlah);
					$fetch_jumlah = mysqli_fetch_array($jumlah)
					?>
					<h3>Friend <?php echo $fetch_jumlah['count(*)'];   ?></h3>
					<div class="friend-box">
					<?php 
					$query_friend =" select * from friend where id_user = '".$profil['id_user']."'"; 					
					$friend = mysqli_query($con, $query_friend);

					while($fetch_friend = mysqli_fetch_array($friend)){
						
					$query_friend_photo =" select * from profil where username = '".$fetch_friend['username']."'"; 
					$friend_photo = mysqli_query($con, $query_friend_photo);
					$fetch_friend_photo = mysqli_fetch_array($friend_photo);
					
					?>
						
						<a href="profil_orang.php?iduser=<?php echo $fetch_friend_photo['id_user']; ?>"><img src="img/<?php echo $fetch_friend_photo['photo']; ?>" width="60" height="60" /></a>
					<?php } ?>	
					</div>
				</div>	
				</div>
					
				<hr class="batas" />
				<div class="photo-container">
					<h3>Photo</h3>
					<?php
					$sqlnya = "select * from foto where username='$username' order by id_foto desc";
					$proses = mysqli_query($con, $sqlnya);
					while ($data=mysqli_fetch_array($proses)){ 
					?>
					<div class="img">	
						<div class="cek">
							<img  class="gambar2" src="gambar/<?php echo $data['url']; ?>" width="100%" height="100%"/>
							<div class="modal-menu">
									<a href="profil_picture.php?idfoto=<?php echo $data['id_foto']; ?>"><img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/></a>
									<img class="edit" src="img/icon/png/edit.png"/ width="30px" height="30px"> 
									<img class="hapus" src="img/icon/png/garbage.png"/ width="30px" height="30px">
							</div>
						</div>
					</div>	
					<?php }?>	
				</div>

</div>


<script type="text/javascript" src="js/jquery-2.2.3.min.js">	
</script>
<script src="js/main.js"></script>
<script>
	$(".img").mouseover(function(){
			$(this).find('.modal-menu').fadeIn("slow");
		});
		$(".img").mouseleave(function(){
			$(this).find('.modal-menu').fadeOut("slow");
		});				
</script>

</body>
</html>