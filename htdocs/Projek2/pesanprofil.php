<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">	
	
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
	.boxpesan{
		width:90%;
		height:600px;		
		margin-top:20px;
	}
	.readpesan{
		width:60%;
		
		background-color:white;
		float:left;
		margin-right:50px;
		border-radius: 5px;
		box-sizing: border-box;
					
		padding-bottom:50px;		
	}
	
	.readpesan hr{
		border-color: #C9B499;
	}
	.readpesan h2,span:only-child{
		margin-left:30px;
	}
	
	.timelinepesan{
		width:30%;
		height: 70%;
		background-color: white;
		float:right;
		border-radius: 5px;
		box-sizing: border-box;
		overflow:auto;		
	}	
	.tpesan{
		width: 100%;
		height:20%;
		border-bottom:1px #DCCCB3 solid;
		position:relative;	
	}
	
	.fotopengirim{
		width:30%;
		height:100%;
		float:left;
		box-sizing: border-box;			
	}
	.fotopengirim img{
		margin-left:10px;
		margin-top:5px;
		border-radius:100%;
	}
	
	.pesanpengirim{
		width:70%;
		height:100%;		
		float:left;
		box-sizing: border-box;
		word-wrap: break-word;
		padding-top:8px;
		padding-left:5px;
	}
	.pesanpengirim span:first-child{
		font-size:20px;
	}
	.pesanuser{
		margin-left:50px;
	}
	.statuspesan{
		position:absolute;
		top:0px;
		right:10px;
		font-size:15px;
		color:#C9B499;
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

<img  class="foto" src="img/<?php echo $profil['back']; ?>" width="100%" height="80%">

<?php

echo "<img class='user' src='img/".$profil['photo']."' >";

?>
<h2><?php echo ucfirst($profil['username']); ?></h2>

<span class="editprofil">
	<a href="index.php?editprofil=<?php echo $profil['username'];?>" >Edit Profil</a> |
	Pesan <?php echo $pesanbaru['jumlah'];  ?>
</span>
</div>
		
	</div>
</div>

<div class="container">
	<div class="boxpesan">
		<?php if($_GET['pesanprofil']=='0' ||empty($_GET['pesanprofil']))  {?>
		<div class="readpesan">
			
			<h2>Pesan</h2>
			<hr />			
		</div>
		<?php }else{?>
		<div class="readpesan">			
			<h2>Pesan</h2>
			<hr />
			<span>				
			Dari : 	<?php echo $datapesan['pengirim'];  ?>			
			</span><br />
			<span>
			Subject :	<?php echo $datapesan['subject'];  ?>	<br />	
			</span><br />
			<span>
			Pesan : 
			<img src="gambar/<?php echo $fotopesan['url'];  ?>" height="200" width="200" style="margin-left:120px"  />
			<p><?php echo $datapesan['pesan'];?></p>
			
			</span>
		</div>
		<?php }?>
		<hr class="batas" style="height: 350px;margin-top:30px;" />
		<div class="timelinepesan">
			<?php 
				foreach ($pesanquery as $pesandata) {
					
				$profilqeury=$this->model->profil_user($pesandata['pengirim']);
				$profildata = $this->model->fetch($profilqeury);									
			?>			
			<div class="tpesan">
				<a href="index.php?profilorang=admin">
				<div class="fotopengirim">
					<img src="img/<?php echo $profildata['photo'];?>" width="80%" height="80%" />
				</div>
				</a>
				<a href="index.php?pesanprofil=<?php echo $pesandata['id_pesan'] ?>" style="color: black;">
				<div class="pesanpengirim">
					<span><?php echo $pesandata['pengirim'];?></span><br />
					<span><?php echo $pesandata['subject'];?></span>
				</div>
				<div class="statuspesan">
					<?php echo $pesandata['statuspesan'];?> 
				</div>
				</a>
			</div>
			
			
			
			<?php } ?>
		</div>
		
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
