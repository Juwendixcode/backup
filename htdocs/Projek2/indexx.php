<?php 
if(!isset($_SESSION['username'])){
				header('Location:index.php');
}

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">
	
	input[type="submit"]{
		margin-top:55px;
		background-color: transparent;		
		background-size:30px 30px;
		background-repeat:no-repeat;
		border:0px;
		width:40px;
		height:40px;
		cursor:pointer;
	}
	input[name="Hapus"]{
		background-image: url(img/icon/png/garbage.png);
	}
	input[name="edit"]{
		background-image: url(img/icon/png/edit.png);		
		padding-left:10px;
		padding-right:10px;
		box-sizing:border-box;
		margin-left:10px;
		
	}
	
	.editprofil{
		width:100%;
		color: #955404;
        margin-left:400px;									
	}
	.editprofil a{
		text-decoration:none;
		color: #955404;			
		text-align:right;		
	}
	.editprofil a:hover{
		text-decoration:underline;
		
	}
	
	</style>
	
</head>
<body>
<nav class="navbar">
<div class="judul">
<img src="img/Iconweb/logo fix sementara.png" width="80" height="80" style="margin-left:50px;"/>
<img src="img/Iconweb/photokopi.png" width="200" height="75" />
</div>
	<center>
		
		<ul style="margin-top:0px;">		 		
		<a href='index.php?logout=1'><li class='login'><img src="img/Iconweb/logout.png" width="40" height="40" /></li></a>		
		</ul>    
	</center>
</nav>

	<div class="hamburger-menu">
			<img src="img/hamburger.png" width="100px" height="150px" />
		</div>
	<div class="sidebar">		
		  <img class='photo-profil' src='img/<?php echo $profil['photo'];?>' width='100px' height='100x' />";		  		
		<div class="userlog"><h4> <?php echo ucfirst($profil['username']); ?></h4></div>
			<a href="index.php?home=1">
			<div class="menu-sidebar" >
				<img src="img/Iconweb/home.png" width="40" height="35" style="	" />
				<span >Home</span>				
			</div>
			</a>
			<a href="index.php">
				<div class="menu-sidebar">
					<img src="img/Iconweb/profil.png" width="40" height="35" style="	" />
					Profil
				</div>
				</a>
			<a href="index.php?friend=1">
				<div class="menu-sidebar">
					<img src="img/Iconweb/friends.png" width="40" height="35" style="	" />
					Friend (<?php echo $teman['jumlah'];?>)
				</div>
			</a>
	</div>

<div class="main">
	
<div class="top">

<div class="timeline">

<img  class="foto" src="img/<?php echo $profil['back']; ?>" width="100%" height="80%">

<?php

echo "<img class='user' src='img/".$profil['photo']."' >";

?>
<h2><?php echo ucfirst($profil['username']); ?></h2>

<span class="editprofil">
	<a href="index.php?editprofil=<?php echo $profil['username'];?>" >Edit Profil</a> |
	<a href="index.php?pesanprofil=0" >Pesan <?php echo $pesanbaru['jumlah']; ?></a>
</span>
</div>
		
	</div>
</div>

<div class="container">
<div class="biodata">
		<h3>Biodata</h3>
		<table class="bio">
			<tr>
				<td>Nama</td>
				<td>: <?php echo ucfirst($profil['username']);   ?></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>: <?php echo $profil['tanggal_lahir'];   ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>: <?php echo $profil['email']; ?></td>
			</tr>
						
			</table>
				<hr/>
				<div class="friend">
					<h3>Friend</h3>
					<div class="friend-box">
					<?php
					foreach ($friendphoto as $f) {
					$profiltemanquery=$this->model->profil_photoid($f['username']);	
					$profilteman=$this->model->fetch($profiltemanquery);	
					?>						
					<a href="index.php?profilorang=<?php echo $profilteman['id_user'];?>"><img  src="img/<?php echo $profilteman['photo']; ?>" width="60" height="60" /></a>
					<?php } ?>	
					</div>
				</div>	
				</div>
					
				<hr class="batas" />
				<div class="photo-container">
					<h3>Photo <?php echo $jumlahfoto['jumlah'];  ?></h3>
					<?php
					foreach ($fotosemua as $r) {
					?>
					<div class="img">	
						<div class="cek">
							<img  class="gambar2" src="gambar/<?php echo $r['url']; ?>" width="100%" height="100%"/>
							<form method="post" action="<?php $this->hapus();?>">
							<div class="modal-menu">
									<input type="hidden" name="hidden_id" value="<?php echo $r['id_foto']; ?>" />
									<a href="index.php?profilpicture=<?php echo $r['id_foto']; ?>"><img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/></a>
									<a href="index.php?editpicture=<?php echo $r['id_foto']; ?>"><img class="view" src="img/icon/png/edit.png" width="30px" height="30px"/></a> 
									<input type="hidden" name="hidden_id" value="<?php echo $r['id_foto']; ?>" />
									<input type="submit" value="" name="Hapus"  />									
							</div>
							</form>
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

<?php 

	if(isset($_POST['hapus'])){
		$this->hapus($_POST['hidden_id']);
	}

	

?>
