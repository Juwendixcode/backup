<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">
		
		input[value="add friend"]{
			border:0px;
			background-color:transparent;
			color: #3498DB;
			font-size:20px;
			margin-left:60px;
			cursor: pointer;
		}
		input[value="add friend"]:hover{
			color:#FFFFFF;
		}
		.added{
			font-size:20px;
			margin-left:75px;
			color:white;
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
			<img src="img/hamburger1.png" width="30px" height="30px" />
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

<img  class="foto" src="img/<?php echo $profilid['back']; ?>" width="100%" height="80%">

<?php
echo "<img class='user' src='img/".$profilid['photo']."' >";
?>

<h2><?php echo $profilid['username']; ?></h2>
<?php  
	if($profil['id_user']!=$cekteman['id_user']&&$profilid['username']!=$profilid['username']&&$profil['id_user']!=$_SESSION['úsername']){
?>
 
 <form action="" method="post">	
  <input type="submit" name="submit" value="add friend"/>
  <input type="hidden" name="username"  value="<?php echo $profilid['username']?>"/>
 </form>
<?php }else{?> 	
  <span class="added">Berteman</span>
<?php }?>	
</p>

		</div>
	</div>
</div>

<div class="container">
<div class="biodata">
		<h3>Biodata</h3>
		
		<table class="bio">
			<tr>
				<td>Nama</td>
				<td><?php echo $profilid['username'];  ?></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td><?php echo $profilid['tanggal_lahir'];  ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $profilid['email'];  ?></td>
			</tr>
						
			</table>
				<hr />
				<div class="friend">
					<h3>Friend</h3>
					<div class="friend-box">
					<?php
					foreach ($friendphoto as $f) {
					$profiltemanquery=$this->model->profil_photoid($f['username']);	
					$profilteman=$this->model->fetch($profiltemanquery);	
					?>						
						<a href="index.php?profilorang=<?php echo $profilteman['id_user'];?>"><img src="img/<?php echo $profilteman['photo']; ?>" width="60" height="60" /></a>
					<?php } ?>	
					</div>
				</div>	
				</div>
					
				<hr class="batas" />
				<div class="photo-container">
					<h3>Photo</h3>
					<?php
					foreach ($fotosemua as $r) {
					?>
					<div class="img">	
						<div class="cek">
							<img  class="gambar2" src="gambar/<?php echo $r['url']; ?>" width="100%" height="100%"/>
							<div class="modal-menu">
									<center>
									<a href="index.php?profilpicture=<?php echo $r['id_foto']; ?>"><img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/></a>
									</center>
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

<?php
	if(isset($_POST['submit'])){ 
		$main = new controller();
		$main->tambahteman();
	}
?>