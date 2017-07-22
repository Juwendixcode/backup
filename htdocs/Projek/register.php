<html>
<head>

<link rel="stylesheet" type="text/css" href="css/main.css"/>

<style type="text/css">
	
.regis-form{
	width: 400px;
	background-color: white;
	position:absolute;
	z-index:2;
	box-sizing: border-box;
	padding-left:20px;
	margin-left:35%;
	margin-top:8%;
}

.regis-form td{
	padding:5px;
	
}

.regis-form form{
	margin-top:10px;
}

.regis-form input[type="text"],input[type="password"]{
	padding:10px;
	width:200px;
	}
	.regis-form input[type="submit"]{
	background-color:#008CC9;
	border: 2px;
	color:white;
	height:30px;
	width:80px;
	}



</style>

</head>

<body>
<div class="background" style="background-image: url(img/background.jpg); background-size: cover; position: absolute; z-index: 1; height: 100%; width: 100%; top: 0px; -webkit-filter: opacity(70%) sepia(50%);">
</div>


<div class="regis-form">
	<center><h3>Register</h3></center>
	<form method="POST" action="regiscek.php" enctype="multipart/form-data">
		<table>
		<tr>
			<td>
			<label for="User Id">Nama </label>
			</td>
			<td>
			<input class="input" type="text" name="id_user"></input>
			</td>
		</tr>
		<tr>
			<td>
			<label for="User">Username </label>
			</td>
			<td>
			<input class="input" type="text" name="username"></input>
			</td>
		</tr>
		<tr>
			<td>
			<label for="Password" name="password">Password </label>
			</td>
			<td>
			<input class="input" type="password" name="password" required></input>
			</td>
		</tr>	
		<tr>
			<td>
			<div></div>
			</td>
			<td>
			<input class="input" type="password" name="alpassword" required></input>
			</td>
		</tr>
		<tr>
			<td>
			<label for="Email" name="email">Email </label>
			</td>
			<td>
			<input class="input" type="text" name="email" required></input>
	
			</td>
		</tr>
		<tr>
			<td>
			<label for="Ttl" name="ttl">Tempat Tanggal Lahir</label>
			</td>
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
				<option value="Januar">Januari</option>
				<option value="Februari">Februari</option>
				<option value="Maret">Maret</option>
				<option value="April">April</option>
				<option value="Mei">Mei</option>
				<option value="Juni">Juni</option>
				<option value="Juli">Juli</option>
				<option value="Agustus">Agustus</option>
				<option value="September">September</option>
				<option value="Oktober">Oktober</option>
				<option value="November">November</option>
				<option value="Desember">Desember</option>
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
		</tr>
		<tr>
			<td>
			<label for="fp" name="fp">Foto Profil </label>
			</td>
			<td>			
			<input class="input" type="file" name="gambar" required /> 
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
		</tr>
		<tr>
		<td><div></div></td>
		<td>
		<input class="input" type="submit" value="Register" name="register" style="float:right; margin-right: 40px;">
		</td>
		</tr>
		</table>
	</form>
</div>
<div class="preview"></div>


</body>

</html>
