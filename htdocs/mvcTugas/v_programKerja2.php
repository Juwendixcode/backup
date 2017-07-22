<html>
<head></head>
<body>
<h2> Daftar Program Kerja BEM </h2>
    <table>
        <tbody>
          <tr><td>Nama Program Kerja</td><td>Surat Keterangan</td></tr>
        </tbody>
        <?php
        	include ("koneksiMVC.php");
        	
			echo "<form action=\"index.php?logout=1\" method=\"POST\">
		 		<input type=\"submit\" value=\"logout\" />
		 		</form><br/>";	
		 
		foreach ($proker as $r) {
            echo "<tr>";
			echo "<td>$r[namaProgram]</td>";
			echo "<td>$r[suratKeterangan]</td>";
			
		}
?>
    
</body>
</html>
