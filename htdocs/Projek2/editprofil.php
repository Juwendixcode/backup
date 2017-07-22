<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		.regis-form{
	width: 700px;
	background-color: white;
	position:absolute;
	z-index:2;
	box-sizing: border-box;
	padding-left:20px;
	margin-left:7%;
	margin-top:3%;
}

.regis-form td{
	padding:5px;
	
}

.regis-form form{
	margin-top:10px;
}

.regis-form input[type="text"],input[type="password"]{
	padding:10px;	
	}
	.regis-form input[type="submit"]{
	background-color:#B1844D;
	border: 2px;
	color:white;
	height:30px;
	width:80px;
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
	Edit Profil |
	<a href="index.php?pesanprofil=0" >Pesan <?php echo $pesanbaru['jumlah']; ?></a>
</span>
</div>
		
	</div>
</div>
<div class="container">

<div class="regis-form">
	<center><h3>PROFIL</h3></center>
	<form method="POST" action="<?php $this->insertdataprofil(); ?>" enctype="multipart/form-data">	
		<table>		
		<tr>
			<td>
			<label for="User">Username </label>
			</td>
			<td>
			<input class="input" type="text" name="username" value="<?php echo $profil['username'];?>"></input>
			</td>
		</tr>
		<tr>
			<td>
			<label for="Password" name="password">Password</label>
			</td>
			<td>
			<input class="input" type="text" name="password" value="<?php echo $user['password'];?>" required></input>
			</td>
		</tr>	
		<tr>
			<td>
			<label for="Email" name="email" >Email </label>
			</td>
			<td>
			<input class="input" type="text" name="email" value="<?php echo $user['email'];?>" required></input>	
			</td>
		</tr>
		
		<tr>
			<td>
			<label for="Ttl" name="ttl">Tanggal Lahir</label>
			</td>
			<?php if(empty($profil['tanggal_lahir']))  {  ?>	
			<td>			
			<select name="tanggal">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
			<select name="bulan">
				<option value="01">Januari</option>
				<option value="02">Februari</option>
				<option value="03">Maret</option>
				<option value="04">April</option>
				<option value="05">Mei</option>
				<option value="06">Juni</option>
				<option value="07">Juli</option>
				<option value="08">Agustus</option>
				<option value="09">September</option>
				<option value="10">Oktober</option>
				<option value="11">November</option>
				<option value="12">Desember</option>
			</select>
			<select name="tahun">
				<option value="1990">1990</option>
				<option value="1991">1991</option>
				<option value="1992">1992</option>
				<option value="1993">1993</option>
				<option value="1994">1994</option>
				<option value="1995">1995</option>
				<option value="1996">1996</option>
				<option value="1997">1997</option>
				<option value="1998">1998</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
			</select>
			</td>
			<?php }else{ 
				$data =explode("-",$profil['tanggal_lahir']);
				?>
			<td>			
			<select name="tanggal">
				<option value="<?php echo $data[2]; ?>"><?php echo $data[2]; ?></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
			<select name="bulan">
				<option value="<?php echo $data[1]; ?>"><?php echo $this->model->bulan($data[1]); ?></option>
				<option value="01">Januari</option>
				<option value="02">Februari</option>
				<option value="03">Maret</option>
				<option value="04">April</option>
				<option value="05">Mei</option>
				<option value="06">Juni</option>
				<option value="07">Juli</option>
				<option value="08">Agustus</option>
				<option value="09">September</option>
				<option value="10">Oktober</option>
				<option value="11">November</option>
				<option value="12">Desember</option>
			</select>
			<select name="tahun">
				<option value="<?php echo $data[0]; ?>"><?php echo $data[0]; ?></option>
				<option value="1990">1990</option>
				<option value="1991">1991</option>
				<option value="1992">1992</option>
				<option value="1993">1993</option>
				<option value="1994">1994</option>
				<option value="1995">1995</option>
				<option value="1996">1996</option>
				<option value="1997">1997</option>
				<option value="1998">1998</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
			</select>
			</td>
			<?php }?>
		</tr>
		
		
		<tr>
			<td>
			<label for="fp" name="fp">Foto Profil </label>
			</td>
			<td>			
			<input class="input" type="file" name="gambar" id="gambar" value="<?php echo $profil['photo'];?>"/> 
			</td>			
		</tr>
		<tr>
			<td></td>
			<td>				        		
				<?php if (!empty($profil['photo'])){?>
		        <img id="previewgambar" src="img/<?php echo $profil['photo'];?>" alt="your image" width="100px" height="100px" />
		        <?php }else{?>    			
		        <img id="previewgambar" src="img/logo.png" alt="your image" width="100px" height="100px" />
		        <?php }?>
			</td>
		</tr>
		<tr>
			<td>
			<label for="fp" name="fp" >Foto Back </label>
			</td>
			<td>			
			<input class="input" type="file" name="back" id="back" value="<?php echo $profil['back'];?>"/> 
			</td>			
		</tr>
		<tr>
			<td></td>
			<td>
				<?php if (!empty($profil['back'])){?>				        		
		        <img id="previewback" src="img/<?php echo $profil['back'];?>" alt="your image" width="300px" height="100px" />
		        <?php }else{?>
		        	<img id="previewback" src="img/logo.png" alt="your image" width="300px" height="100px" />
		        <?php }?>    			
			</td>
		</tr>
		
		<tr>
			<td>
				
			</td>
		</tr>
		<tr>
		<td><div></div></td>
		<td>
		<input class="input" type="submit" value="SAVE" name="register" >
		</td>
		</tr>
		</table>
	</form>
</div>

</div>
</body>

<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#previewgambar').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURLs(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#previewback').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#gambar").change(function(){
        readURL(this);
    });
    $("#back").change(function(){
        readURLs(this);
    });
	
	
</script>

</html>	