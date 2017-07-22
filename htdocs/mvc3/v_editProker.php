<?php
	include "koneksiMVC.php";	
	$title  = "Edit Program Kerja";
	$q 		= mysqli_query($mysqli,"SELECT * FROM proker WHERE nomorProgram='$_GET[edit]'");
	$data   = mysqli_fetch_array($q);
?>

<html>
<head>
	<title><?php echo $title ?></title>
</head>

<body>
	<h1><?php echo $title ?> </h1>
	
	<form method="post" action="m_process.php">
	<input type="hidden" name="e" value="<?php echo $data['nomorProgram'] ?>"/>
	  <table border="1">
		<tr>
		  <td>Nomor Program</td>
		  <td><input name="nomorProgram" type="text" 
				   value="<?php echo $data['nomorProgram'] ?>"/></td>
		</tr>
		<tr>
		  <td>Nama Program</td>
		  <td><input name="namaProgram" type="text" 
					value="<?php echo $data['namaProgram'] ?>"/></td>
		</tr>
		<tr>
		  <td>Surat Keterangan</td>
		  <td><input name="suratKeterangan" type="text" 
					value="<?php echo $data['suratKeterangan'] ?>"/></td>
		</tr>
		<tr>
		  <td colspan="2"><input type="submit" value="Submit" /></td>
		</tr>
	  </table>
	</form>
</body>
</html>

