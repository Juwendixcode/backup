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
	if(isset($_GET['idfoto'])){
		$id_foto = $_GET['idfoto'];
	}
	?>
</head>
<body>
	<?php 
		$query_photo = "select * from foto where id_foto = '$id_foto'  ";
		$photo = mysqli_query($con, $query_photo);
		$fetch_photo = mysqli_fetch_array($photo);
	?>
		<div class="luar">
									<div class="box">
											<span id="close" class="close">x</span>
											<img class="gambar" src="gambar/<?php echo $fetch_photo['url']; ?>" width="70%" height="100%"/>
											<div class="com">
	<?php 
		$query_profil = "select * from profil where username = '".$fetch_photo['username']."'";
		$profil = mysqli_query($con, $query_profil);
		$fetch_profil = mysqli_fetch_array($profil);
		$query_profil2 = "select * from profil where username = '$username'";
		$profil2 = mysqli_query($con, $query_profil2);
		$fetch_profil2 = mysqli_fetch_array($profil2);
	?>												
												<div class="caption-modal">
													<img src="img/<?php echo $fetch_profil['photo']; ?>" width="70" height="70"/>
													<span><?php echo $fetch_photo['username']; ?></span><br />
													<span><?php echo $fetch_photo['tanggal_posting']; ?></span><br /><br /><br /><br />
													<span><?php echo $fetch_photo['caption']; ?></span>
												</div>
		<div class="komenlike"><span>Comment | Like  </span></div>
		<div class="table-komen">
	<?php 
		$query_komen = "select * from comments where id_foto = '".$fetch_photo['id_foto']."'";
		$komen = mysqli_query($con, $query_komen);		
		while($fetch_komen = mysqli_fetch_array($komen)){
	?>													
				<div class="box-komen">
					<img src="img/<?php echo $fetch_komen['url']; ?>" width="50" height="50"/>										
				<div class="komentar">
					<?php echo $fetch_komen['username']; ?> 
				    <p style="margin-left: 0px;margin-top:0px;"><?php echo $fetch_komen['text']; ?></p>
				</div>
		</div>
   <?php } ?>																																			
												</div>
												<div class="baru">
														<form method="post" action="komentar.php?edit=<?php echo $fetch_profil2['photo']?>&edits=<?php echo $fetch_photo['id_foto'];?>&hal=profil_picture.php?idfoto=<?php echo $fetch_photo['id_foto'];?>">
															<label>Komen :</label>
															<input class="komen" type="text" name="text" />
															<input type="submit" name="submit" value="ok"></input>
														</form>
													</div>
												</div>
										</div>
		</div>
</body>
<script src="js/jquery-2.2.3.min.js"></script>
<script>
		
	$(".close").click(function(){
	 window.location.href='index.php';	
	});
		
</script>
</html>