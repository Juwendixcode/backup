<html>
<head></head>
<body>
<h2> Daftar Program Kerja BEM </h2>
    <table>
        <tbody>
          <tr><td>No</td><td>Nama Program Kerja</td><td>Surat Keterangan</td></tr>
        </tbody>
        <?php

		foreach ($proker as $r) {
            echo "<tr>";
			echo "<td>$r[nomorProgram]</td>";
			echo "<td>$r[namaProgram]</td>";
			echo "<td>$r[suratKeterangan]</td></tr>";
		}
?>
    
</body>
</html>
