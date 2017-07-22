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
		
		.container{
			padding-bottom:100px;
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
		<?php
			$foto = "select * FROM profil where username='$username' ";
			$cek1 = mysqli_query($con,$foto);
			$pp = mysqli_fetch_array($cek1);
		    echo "<img class='photo-profil' src='gambar/".$pp['photo']."' width='100px' height='100x' />";
		    ?>
		<div class="userlog"><h2><?php echo $username;?></h2></div>
			<a href="home2.php"><div class="menu-sidebar">Home</div></a>
			<a href="index.php"><div class="menu-sidebar">Profil</div></a>
			<a href="friend.php"><div class="menu-sidebar">Friend</div></a>
	</div>
	
	<div class="container" style="">
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
		$sql = "select * FROM foto order by id_foto	 desc";
		$tampil = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($tampil)){
		$tem= $data['username'];	
		$sql = "select * FROM profil where username='$tem' ";
		$tampil2 = mysqli_query($con,$sql);
		$data2 = mysqli_fetch_array($tampil2);
  		?>

<div class="frame" style="width:430px; margin-top:20px;margin-left:100px; ">
	<div class="top-frame">
		<div class="foto-profil" >
<?php echo "<img src='gambar/".$data2['photo']."' width='100%' height='100%'style='border-radius: 100%;' >";?>
		</div>
		<h4><?php echo ucfirst($data['username'])?></h4>
		<p><?php echo $data['tanggal_posting']?></p>
	</div>
<?php
if(!empty($data['url'])){?>
	<div class="upload-foto" style="width: auto; height: auto;">
<?php
echo "<img class='foto-upload' src='gambar/".$data['url']."' width='100%' height='auto' >"; 
?>
	</div>
	<?php }else{
}?>
	<div class="menu-foto" style="margin-left:130px;">
		<img  src="img/tombol.png" width="40px">
		<div class="submenu">
				<li><span class="report">Report</span>
					<input class="hidden-id" type="hidden" value="<?php echo $data['id_foto'];?>" />
					
				</li>
				<hr>
				<li><a href="hapus.php?&edit=<?php echo $data['id_foto'];?>">Hapus</a></li>
				<hr>
				<li><a href="">Edit</a></li>
		</div>
	</div>
	
	
	<hr>
	<div class="caption">
		<?php echo $data['caption'];?>
		<ul  style="margin-left: 230px;">
			<?php 
			$tem2 = $data['id_foto'];
			$tess = mysqli_query($con,"select count(*) from comments where id_foto= '$tem2'");
			$tesss = mysqli_fetch_array($tess);
			?>		
			<li class="comm">Comment <?php echo $tesss['count(*)'];?>  |</li>
			<?php 			
			$sqlcek = "select id_foto,username from likes where id_foto = '$tem2' and username = '$username'"; 
			$like = mysqli_query($con,$sqlcek);
			$datas = mysqli_fetch_array($like);
			if($datas['username'] != $username && $datas['id_foto']!=$tem2 ){	
			?>
			<a href="like.php?edit=<?php echo $data['id_foto'];?>&edits=<?php echo $username;?>" 
				style="text-decoration: none"><li class="comm">Like</li></a>
			<?php }else{?>
			<li>Liked</li>
			<?php }?>	
		</ul>
	</div>
	<div class="komenn" style="background-color:;">
		<hr />
		<div class="new-komentar" style="display: table; margin-bottom: 10px;">
			<form action="komentar.php?edit=<?php echo $pp['photo']?>&edits=<?php echo $data['id_foto'];?>" method="POST" style="display: inline; margin-left: 10px;">
			<?php
			echo "<img src='gambar/".$pp['photo']."' width='35px' height='35px' style='display: inline; ' />";
			?>
			<textarea cols="40" rows="2" style="margin-left: 5px;" name="text"></textarea>
			<input type="submit" name="submit" value="submit" style="position:relative; bottom: 15px;"/>
			</form>
		</div>
		<div class="list-komentar" style="box-sizing: border-box; word-wrap: break-word;">
			<?php 
			 include "koneksi.php";
			 $sqlnya = "select * from comments where id_foto='$tem2'order by id desc";	
			 $coba = mysqli_query($con, $sqlnya);
			 while($data3 = mysqli_fetch_array($coba)){
			 echo "<div class='no' style=' margin-top:5px; margin-left:20px; height: 35px; width:35px; display:inline-block; vertical-align: top;'>
				<img  src='gambar/".$data3['url']."' width='35px' height='35px'/>
				</div>";
				
			?>
				<div class='komens'style="width:350px;background-color: #fff;margin-top:5px;display:inline-block;vertical-align: top; margin-left:5px; margin-bottom:5px">
					<span style="color:blue;"><?php echo $data3['username']?></span> <?php echo $data3['text']?><br>
					<span><?php echo $data3['dt']?></span>
				</div>
			<?php }?>
		</div>
		
	</div>
</div>
<div class="modal">
	<div class="text-box">
		
	</div>	
</div>
<?php }?>

</div>
	</div>
<div class="report-luar">	
<div class="report-box">
<span id="closes" class="close">x</span>	
	<?php 
	$queryy = "select * from user where username='$username'";
	$cekk = mysqli_query($con, $queryy);
	$fetch = mysqli_fetch_array($cekk);
	?>
	<form method="post" action="report-kirim.php">
	<table>
	<tr>
			<td>
			<label> Subject</label>
			</td>
			<td>
				<select name="subject">
					<option value="SARA">SARA</option>
					<option value="PORNOGRAFI">PORNOGRAFI</option>
				</select>
			</td>	
	</tr>
	<tr>
			<td>
				<label>Email</label>
			</td>
			<td>
				<label><?php echo $fetch['email'];  ?></label>
			</td>
	</tr>
	<tr>	
			<td>
				<label> Username </label>
			</td>
			<td>
				<label><?php echo $fetch['username'];  ?></label>
			</td>
	</tr>
	</table>
		
			<input name="hidden-id" class="ckck" type="hidden"  value="" />			
			<label>Pesan</label><br>
			<textarea name="pesan" rows="5" cols="50">				
			</textarea>
			<input name="report" type="submit" value="Report" name="report" />
		</form>
</div>
</div>
<script type="text/javascript" src="js/jquery-2.2.3.min.js">	
</script>
<script type="text/javascript" src="js/main.js">
</script>

</body>
</html>