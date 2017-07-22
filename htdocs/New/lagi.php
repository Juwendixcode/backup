<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	
	<title></title>
	
	<style type="text/css">
		body{
			margin:0px;
			padding:0px;
			overflow-y:hidden;
			font-family: Tahoma;
		}
		.sidebar{
			width:20%;
			height:100%;
			background-color:#3498db;
			
			position:fixed;	
		}
		.photo-profil{
			position:relative;
			margin-top:80px;
			margin-left:70px;
			border-radius: 100%;
			border:1px white solid;
		}
		
		.sidebar a{
			text-decoration: none;
			color:#BBBBBB;
		}
		
		.menu-sidebar{
			position:relative;
			padding-left:90px;
			font-size: 25px;
			box-sizing: border-box;		
			padding-top:5px;
			padding-bottom:5px;	
			text-decoration: none;
			transition: 0.5s;		
		}
		.sidebar a:hover .menu-sidebar{
			background-color: #BBBBBB;
			padding-left:100px;
			transition: 0.5s;	
		}
		.sidebar a:hover{
			color:#FFFFFF;
		}
		
		.container2{
			width:80%;
			min-height:643px;	
			background-color:#FFFFFF;
			margin-left:20%;
			padding-left:0px;
			box-sizing: border-box;
		}
		.hamburger-menu img{
			position:absolute;
			left:230px;
			top: 10px;
			cursor:pointer;
			z-index: 99;
		}
		.user{
			box-sizing: border-box;
			padding-left: 100px;
			margin-bottom:70px;
		}
	</style>


</head>
<body>
	<div class="hamburger-menu">
			<img src="img/hamburger1.png" width="30px" height="30px" />
		</div>
	<div class="sidebar">
		
		<img class="photo-profil" src="img/angel.jpg" width="100px" height="100x" />
		<div class="user"><h4> USER </h4></div>
			<a href=""><div class="menu-sidebar">Home</div></a>
			<a href=""><div class="menu-sidebar">Home</div></a>
			<a href=""><div class="menu-sidebar">Home</div></a>
		</div>
	
	<div class="container2">
		<img src="img/macan.jpg" width="330px" height="330px" />
		<img class="foto" src="img/kelinci.jpg" width="330px" height="330px" />
	</div>

<script type="text/javascript" src="js/jquery-2.2.3.min.js">	
</script>
<script type="text/javascript" src="js/main.js">
	
</script>


</body>
</html>
