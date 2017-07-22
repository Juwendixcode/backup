<html>
	<?php
	include 'koneksi.php';
	$id = $_GET['id']; 	
	$query = "select * from bahan where ID_BAHAN='$id'";
	$tes =mysqli_query($con, $query);
	$data = mysqli_fetch_array($tes);
	?>
<body>
	
	<form method="post" action="editquery.php" >
		<table>
		<tr>
			<td>
			<label for="User">ID_BAHAN </label>
			</td>
			<td>
			<input class="input" type="text" name="idbahan" value="<?php echo $data['ID_BAHAN'];?>"></input>
			</td>
		</tr>
		<tr>
			<td>
			<label for="User">NAMA_BAHAN </label>
			</td>
			<td>
			<input class="input" type="text" name="namabahan" value="<?php echo $data['NAMA_BAHAN'];?>"></input>
			</td>
		</tr>
		<tr>
			<td>
			<label for="Password" name="password">JENIS BAHAN</label>
			</td>
			<td>
			<input class="input" type="text" name="jenisbahan" value="<?php echo $data['JENIS_BAHAN'];?>"></input>
			</td>
		</tr>	
		<tr>
			<td>
			<label>JUMLAH BAHAN </label>
			</td>
			<td>
			<input class="input" type="text" name="jumlahbahan" value="<?php echo $data['JUMLAH_BAHAN'];?>"></input>	
			</td>
		</tr>
		
		
		<tr>
			<td>
				
			</td>
		</tr>
		<tr>
		<td><div></div></td>
		<td>
		<input class="input" type="submit" value="TAMBAH" name="EDIT" style="float:right; margin-right: 40px;">
		</td>
		</tr>
		</table>
	</form>	
</body>		
</html>




