<table class="u-full-width">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Bulan</th>
      <th>Total Gaji</th>
      <th>Tanggal Verifikasi</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
include_once("koneksi.php");

$sql_query="SELECT * FROM gaji";
$result=mysqli_query($mysqli, $sql_query);

while($row = mysqli_fetch_array($result))
{
$qPegawai = mysqli_query($mysqli,"SELECT nama_pegawai FROM pegawai WHERE id='$row[id_pegawai]'");
$rowP = mysqli_fetch_array($qPegawai);

	echo "<tr>";
	echo "<td>$row[id]</td>";
	echo "<td>$rowP[nama_pegawai]</td>";
	echo "<td>$row[bulan]</td>";
	echo "<td>$row[total_gaji]</td>";
	echo "<td>$row[tanggal_verifikasi]</td>";
	echo "<td>$row[keterangan]</td>";
}
?>    
  </tbody>
</table>