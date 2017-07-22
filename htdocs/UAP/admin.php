<?php 
	$controller = new controller();
?>
<html>
<head></head>
<body>
	<a href="index.php?logout=1">LOGOUT</a>
	
	
	<div>
		<form method="post" action="">
			<!--<input type="submit" name="tambahdata" name="tambah" value="Tambah Data"/>-->
			<a href="tambahdata.php">TAMBAH DATA</a>
		</form>
		<table>
			<th>ID_BAHAN</th><th>NAMA_BAHAN</th><th>JENIS_BAHAN</th><th>JUMLAH_BAHAN</th>
			
			<?php foreach ($databahan as $key) {
				
			?>
			<tr>
				<td><?php echo $key['ID_BAHAN']; ?></td>
				<td><?php echo $key['NAMA_BAHAN']; ?></td>
				<td><?php echo $key['JENIS_BAHAN']; ?></td>
				<td><?php echo $key['JUMLAH_BAHAN']; ?></td>
				<td><a href="edit.php?id=<?php	 echo $key['ID_BAHAN'];?> ">EDIT</a></td>
				<td><a href="delete.php?id<? echo $key['ID_BAHAN'];?> ">HAPUS</a></td>				
			</tr>
			<?php }?>
			
			
		</table>
		
	</div>
	
</body>
</html>
