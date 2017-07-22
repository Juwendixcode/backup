<?php
	include "data/koneksi.php";
	
	$e = $_GET['e'];
	if ($e==0)
		$title = "Tambah barang";
	else {
		$title  = "Edit barang";
		$q 		= mysqli_query($mysqli,"SELECT * FROM barang WHERE id='$_GET[id]'");
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
	
	<form method="post" action="barang_process.php">
	<input type="hidden" name="e" value="0"/>
	  <table>
		<tr>
		  <td>Nama Barang</td>
		  <td><input name="barang" type="text" /></td>
		</tr>
		<tr>
		  <td>ID Jenis Barang</td>
		  <td><input name="id_jenis_barang" type="text" /></td>
		</tr>
		<tr>
		  <td>Harga Barang</td>
		  <td><input name="harga" type="text" /></td>
		</tr>
		<tr>
		  <td colspan="2"><input type="submit" value="Submit" /></td>
		</tr>
	  </table>
	</form>
	<?php } else {?>
	
	<form method="post" action="barang_process.php">
	<input type="hidden" name="e" value="<?php echo $data['id'] ?>"/>
	  <table>
		<tr>
		  <td>ID Barang</td>
		  <td><input name="id" type="text" 
				   value="<?php echo $data['id'] ?>"/></td>
		</tr>
		<tr>
		  <td>Nama Barang</td>
		  <td><input name="barang" type="text" 
					value="<?php echo $data['barang'] ?>"/></td>
		</tr>
		<tr>
		  <td>ID Jenis Barang</td>
		  <td><input name="id_jenis_barang" type="text" 
					value="<?php echo $data['id_jenis_barang'] ?>"/></td>
		</tr>
		<tr>
		  <td>Harga Barang</td>
		  <td><input name="harga" type="text" 
		  			value="<?php echo $data['harga'] ?>"/></td>
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