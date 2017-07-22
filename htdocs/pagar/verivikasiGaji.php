<?php
include "data/koneksi.php";

$qPegawai = mysqli_query($mysqli,"SELECT * FROM pegawai WHERE id='$rowC[id_pegawai]'");
$rowP = mysqli_fetch_array($qPegawai);

?>

<html>
<head>
	<?php include "misc/basicHead.php"; ?>
	<title>pelunasan</title>
</head>

<body>
<div class="container">
	<div class="row">
	
	<h4>Pelunasan</h4>
	<p>
		<table class="u-full-width">
		<tr>
			<td>ID</td>
			<td><?php echo "$rowC[id]"; ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo "$rowC[nama_customer]"; ?></td>
		</tr>
		<tr>
			<td>Barang</td>
			<td><?php echo "$rowB[barang]"; ?></td>
		</tr>
		<tr>
			<td>Pegawai</td>
			<td><?php echo "$rowP[nama_pegawai]"; ?></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td><?php echo "$rowC[tanggal]"; ?></td>
		</tr>
		<table>
		
		<a class="button button-primary" href="verivikasiLunas.php?id=$rowC[id]">Verivikasi</a>
	</p>
</div>
</div>
</body>
</html>