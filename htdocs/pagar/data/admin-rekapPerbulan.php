<?php
include "data/koneksi.php";

$pengeluaran = 0;
$pemasukan = 0;

$qPenjualan = mysqli_query($mysqli,"SELECT * FROM penjualan");

while($row = mysqli_fetch_array($qPenjualan))
{
$qBarang = mysqli_query($mysqli,"SELECT harga FROM Barang WHERE id='$row[id_barang]'");
$rowP = mysqli_fetch_array($qPegawai);

$pemasukan += $rowP;
}

//$qGaji = mysqli_query($mysqli,"SELECT sum(total_gaji) FROM //gaji");
//$rowG = mysqli_fetch_array($qGaji);
//$pengeluaran = $rowG;

?>

<div class="container">
	<div class="row">
	<p>
		<table class="u-full-width">
		<tr>
			<td>Pemasukan</td>
			<td><?php echo "$pemasukan"; ?></td>
		</tr>
		<tr>
			<td>Pengeluaran</td>
			<td><?php echo "$pengeluaran"; ?></td>
		</tr>
		<table>
		
		<a class="button button-primary" href="verivikasiLunas.php?id=$rowC[id]">Verivikasi</a>
	</p>
</div>
</div>