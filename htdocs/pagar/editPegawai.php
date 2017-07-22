<?php
	include "data/koneksi.php";
	
	$e = $_GET['e'];
	if ($e==0)
		$title = "Tambah pegawai";
	else {
		$title  = "Edit pegawai";
		$q 		= mysqli_query($mysqli,"SELECT * FROM pegawai WHERE id='$_GET[id]'");
		$data   = mysqli_fetch_array($q);
	}
?>
<html>
<head>
	<?php include "misc/basicHead.php"; ?>
	<title><?php echo $title ?></title>
</head>

<body>

<div class="container">
<h1><?php echo $title ?> </h1>
	<div class="row">
	<?php if ($e==0) { ?>
	
	<form method="post" action="pegawai_process.php">
	<input type="hidden" name="e" value="0"/>
	  <table>
		<tr>
		  <td>Nama Pegawai</td>
		  <td><input name="nama_pegawai" type="text" /></td>
		</tr>
		<tr>
		  <td>ID Jabatan</td>
		  <td><input name="id_jabatan" type="text" /></td>
		</tr>
		<tr>
		  <td colspan="2"><input type="submit" value="Submit" /></td>
		</tr>
	  </table>
	</form>
	<?php } else {?>
	
	<form method="post" action="pegawai_process.php">
	<input type="hidden" name="e" value="<?php echo $data['id'] ?>"/>
	  <table>
		<tr>
		  <td>ID</td>
		  <td><input name="id" type="text" 
				   value="<?php echo $data['id'] ?>"/></td>
		</tr>
		<tr>
		  <td>Nama Pegawai</td>
		  <td><input name="nama_pegawai" type="text" 
					value="<?php echo $data['nama_pegawai'] ?>"/></td>
		</tr>
		<tr>
		  <td>ID Jabatan</td>
		  <td><input name="id_jabatan" type="text" 
					value="<?php echo $data['id_jabatan'] ?>"/></td>
		</tr>
		<tr>
		  <td colspan="2"><input type="submit" value="Submit" /></td>
		</tr>
	  </table>
	</form>

	<?php } ?>
</div>
</div>
</body>
</html>