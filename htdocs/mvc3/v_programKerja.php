<html>
<head></head>
<body>
<h2> Daftar Program Kerja BEM </h2>
    <table>
        <tbody>
          <tr><td>No</td><td>Nama Program Kerja</td><td>Surat Keterangan</td></tr>
        </tbody>
        <?php
        	include ("koneksiMVC.php");
        	
			echo "<form action='v_tambahProker.php?e=0' method='POST'>
	 		<input type='submit' value='tambah proker' />
	 		</form><br/>";
		 
		foreach ($proker as $r) {
			$rs = mysqli_query ($mysqli, "SELECT * FROM proker");
			$fetched = mysqli_fetch_array($rs);
            echo "<tr>";
			echo "<td>$r[nomorProgram]</td>";
			echo "<td>$r[namaProgram]</td>";
			echo "<td>$r[suratKeterangan]</td>";
			echo "<td><a href= 'index.php?edit=$r[nomorProgram]'>Edit</a>";
			echo "<td><a href='index.php?delete=$r[nomorProgram]'>Delete</a></td>";
		}
?>
    
</body>
</html>
