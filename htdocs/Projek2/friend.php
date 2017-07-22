<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<style>
				.kotak-friend{
				width:800px;
				height:auto;							
				box-sizing: border-box;
				margin-top:50px;
				overflow:hidden;
				}
			
			
			
			.kotak-friend-belum{
				width:800px;
				height:500px;
				
				box-sizing: border-box;
				margin-top:50px;
				overflow:hidden;
			}
			.box-teman{
				width:167px;
				height: 218px;
				background-color:#FFFFFF;
				box-sizing: border-box;
				box-shadow: 3px 3px 3px  rgba(0,0,0,0.2);
				position:relative;
			}
			.back-photo{
				width:167px;
				height: 128px;
				background-color: #B1844D;
				position:relative;
			}
			.back{
				z-index: 1;
			}
			.foto-frofil{
				height:50px;
				border-radius: 100%;
				position:absolute;
				bottom:-25px;
				left:10px;
				z-index: 2;
				border:1px #C1C1C1 solid;
				background-color:#FFFFFF;
			}
			.captionnya{
				width: 100%;
				height:70px;
				box-sizing: border-box;				
				padding-top:10px;
			}
			.captionnya h4{
				font-weight:normal;
				color: black;
				padding-left:70px;
				margin-bottom:0px;
			}
			
			.tambah-teman{
				height: 30px;
				width:100%;
				box-sizing: border-box;
				word-wrap: break-word;
				padding-top:5px;
				padding-left:26%;
				display:none;
				background-color:#FFFFFF;
				box-shadow: 3px 3px 3px  rgba(0,0,0,0.2);
				
			}
			.add a{
				text-decoration:none;
				color:#3498DB;
			}
			.add{
				position:absolute;
				bottom:10px;
				left: 40px;
				display: none;
			}
			.box-teman{
				float:left;
				margin:10px;
			}
			input[name="add-friend"]{
				border:0px ;
				background-color:transparent;
				color:#008CC9;
				font-family:Quicksand-Regular;
				font-size:18px;
				margin-left:35px;
				margin-top:10px;
			}
			.form-friend{
				margin:0px;
				padding:0px;
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
		<div class="container">					
			<h2 style="margin-top:30px;"> My Friend</h2>
			<div class="kotak-friend">
				<?php 
					foreach ($sudahquery as $keys) {
					$profilfriendquery=$this->model->profil_user($keys['username']);	
					$profilfriend=$this->model->fetch($profilfriendquery);																
				?>				
				<form class="form-friend" method="post" action="">		
				<input type="hidden" name="username"  value="<?php echo $profilfriend['username']?>"/>
				<div class="box-teman">
								
						<div class="back-photo">
							<img class="back" src="img/<?php echo $profilfriend['back'];?>" width="100%" height="100%" />
							<a href="index.php?profilorang=<?php echo $profilfriend['id_user'];?>">
							<img class="foto-frofil" src="img/<?php echo $profilfriend['photo'];?>" width="50" height="50" />
							</a>	
						</div>
						
						<div class="captionnya">
							<h4> <?php echo $profilfriend['username'];?></h4>							 
						</div>			
						
					</form>
				</div>	
				<?php }?>													
			</div>
					
			
			<h2> Add New Friend</h2>			
			<div class="kotak-friend-belum">
				<?php 
					foreach ($add as $key) {
					$profiladdquery=$this->model->profil_user($key['username']);	
					$profiladd=$this->model->fetch($profiladdquery);																
				?>				
				<form class="form-friend" method="post" action="">		
				<input type="hidden" name="username"  value="<?php echo $profiladd['username']?>"/>
				<div class="box-teman">
								
						<div class="back-photo">
							<img class="back" src="img/<?php echo $profiladd['back'];?>" width="100%" height="100%" />
							<a href="index.php?profilorang=<?php echo $profiladd['id_user'];?>">
							<img class="foto-frofil" src="img/<?php echo $profiladd['photo'];?>" width="50" height="50" />
							</a>	
						</div>
						
						<div class="captionnya">
							<h4> <?php echo $profiladd['username'];?></h4>
							 <input type="submit" name="add-friend" value="Add friend" />
						</div>			
						
					</form>
				</div>	
				<?php }?>	
			</div>	
		</div>
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/main.js"></script>
	<script >
		$('.box-teman').mouseover(function(){
				$(this).find('.add').fadeIn("`medium");
			});
		$('.box-teman').mouseleave(function(){
			$(this).find('.add').fadeOut("medium");
		});
	</script>
	</body>
</html>

<?php
	if(isset($_POST['add-friend'])){ 
		$main = new controller();
		$main->tambahteman();
	}
?>

