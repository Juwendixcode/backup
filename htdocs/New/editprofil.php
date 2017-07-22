<html>
<head>

<link rel="stylesheet" type="text/css" href="css/main.css"/>

<style type="text/css">
	
.regis-form{
	width: 400px;
	height: 400px;
	background-color: #FAFAFA;
	display: list-item;
}

input[class=input]{

}



</style>

</head>

<body>

<div class="regis-form">
	Register
	<form method="POST" action="regiscek.php">
		<table>
		<tr>
			<td>
			<label for="User Id">User ID </label>
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
			<input class="input" type="alpassword" name="alpassword" required></input>
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
			<label for="User">Tanggal Lahir </label>
			</td>
			<td style="display: inline;">
			<select>
				<option value="Tanggal">Tanggal</option>
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
				<option value="31">30</option>
				<option value="31">31</option>
			</select>
			
			<select>
				<option value="Bulan">Bulan</option>
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
			</select>
			
			<select>
				<option value="Tahun">Tahun</option>
				<option value="1980">1980</option>
				<option value="1981">1981</option>
				<option value="1982">1982</option>
				<option value="1983">1983</option>
				<option value="1984">1984</option>
				<option value="1985">1985</option>
				<option value="1986">1986</option>
				<option value="1987">1987</option>
				<option value="1988">1988</option>
				<option value="1989">1989</option>
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
				<option value="2003">2002</option>
				<option value="2004">2003</option>
				<option value="2005">2004</option>
				<option value="2006">2005</option>
				<option value="2007">2006</option>
				<option value="2008">2007</option>
				<option value="2009">2008</option>
				<option value="2010">2009</option>
				<option value="2011">2010</option>
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
			<label for="Bio" name="bio">Bio </label>
			</td>
			<td>
			<input class="input" type="text" name="bio" required></input>
			</td>
		</tr>
		<tr>
			<td>
			<label for="fp" name="fp">Foto Profil </label>
			</td>
			<td>
			<form method="POST" enctype="multipart/form-data">
			<input class="input" type="file" name="gambar" required /> 
			</form>
			<div class="preview"></div>
			</td>
		</tr>
		<tr>
		<td><div></div></td>
		<td>
		<input class="input" type="submit" value="Register" name="register" style="margin-left:156px; margin-top:30px">
		</td>
		</tr>
		</table>
		
		
	</form>
</div>

</body>

</html>
