<html>
<head></head>
<body>
<h2> Selamat Datang Kepala Departemen </h2>
    <table>
        <tbody>
          <tr><td>No</td><td>Nama Program Kerja</td><td>Surat Keterangan</td></tr>
        </tbody>
        <?php
        	include ("koneksiMVC.php");
        	
			echo "<form action=\"index.php?add=1\" method=\"POST\">
		 		<input type=\"submit\" value=\"tambah proker\" />
		 		</form><br/>";
			echo "<form action=\"index.php?logout=1\" method=\"POST\">
		 		<input type=\"submit\" value=\"logout\" />
		 		</form><br/>";	
		 
		foreach ($proker as $r) {
            echo "<tr>";
			echo "<td>$r[nomorProgram]</td>";
			echo "<td>$r[namaProgram]</td>";
			echo "<td>$r[suratKeterangan]</td>";
			echo "<td><a href=\"index.php?edit=$r[nomorProgram]\">Edit</a>";
			echo "<td><a href=\"index.php?delete=$r[nomorProgram]\">Delete</a></td>";
		}
?>
    
</body>
</html>