<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<style>
			.kotak-friend{
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
				background-color: #3498DB;
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
		<div class="userlog"><h4> userlog </h4></div>
			<a href="home2.php"><div class="menu-sidebar">Home</div></a>
			<a href="index.php"><div class="menu-sidebar">Profil</div></a>
			<a href="friend.php"><div class="menu-sidebar">Friend</div></a>
	</div>
		<div class="container">
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM USER WHERE ID_USER NOT IN( SELECT P.ID_USER FROM USER U JOIN friend T ON U.ID_USER = T.ID_USER JOIN USER P ON T.USERNAME = P.USERNAME WHERE U.username ='$username')and username <> '$username'");
			?>
		
			<div class="kotak-friend">
				<?php 
					while($data = mysqli_fetch_array($query)){
					$query2 = mysqli_query($con, "select * from profil where username = '".$data['username']."' order by id_user desc");
					$dataxx = mysqli_fetch_array($query2);
				?>
				
				<form class="form-friend" method="post" action="tambah-teman.php?user=<?php echo $dataxx['username'];?>">		
				<div class="box-teman">
								
						<div class="back-photo">
							<img class="back" src="img/<?php echo $dataxx['back'];?>" width="100%" height="100%" />
							<img class="foto-frofil" src="gambar/<?php echo $data['photo'];?>" width="50" height="50" />	
						</div>
						
						<div class="captionnya">
							<h4> <?php echo $dataxx['username'];?></h4>
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