<html>
<head>
	<title>Tambah Program Kerja</title>
</head>

<body>
	<h1>Tambah Program Kerja</h1>
	
	<form method="post" action="">
	
	  <table border="1">
		<tr>
		  <td>Nomor Program</td>
		  <td><input name="nop" type="text" 
				   value=""/></td>
		</tr>
		<tr>
		  <td>Nama Program</td>
		  <td><input name="nam" type="text" 
					value=""/></td>
		</tr>
		<tr>
		  <td>Surat Keterangan</td>
		  <td><input name="su" type="text" 
					value=""/></td>
		</tr>
		<tr>
		  <td colspan="2"><input name='submit' type="submit" value="Submit" /></td>
		</tr>
	  </table>
	</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$main = new c_programKerja();
		$main -> tambahProker();
	}

?>