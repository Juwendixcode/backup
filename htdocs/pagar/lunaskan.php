<?php
include "data/koneksi.php";

$qCustomer = mysqli_query($mysqli,"SELECT * FROM customer WHERE id='$_GET[id]'");
$rowC = mysqli_fetch_array($qCustomer);

$qBarang = mysqli_query($mysqli,"SELECT barang FROM barang WHERE id='$rowC[id_barang]'");
$rowB = mysqli_fetch_array($qBarang);

$qPegawai = mysqli_query($mysqli,"SELECT nama_pegawai FROM pegawai WHERE id='$rowC[id_pegawai]'");
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
		
		<a class="button button-primary" href="verivikasiLunas.php?id=<?php echo "$rowC[id]"; ?>">Verivikasi</a>
	</p>
</div>
</div>
</body>
</html>