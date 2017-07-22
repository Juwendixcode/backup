<table class="u-full-width">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>ID Barang</th>
      <th>ID Pegawai</th>
      <th>Tanggal</th>
      <th>Keterangan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
include_once("koneksi.php");

$sql_query="SELECT * FROM customer";
$result=mysqli_query($mysqli, $sql_query);

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>$row[id]</td>";
	echo "<td>$row[nama_customer]</td>";
	echo "<td>$row[id_barang]</td>";
	echo "<td>$row[id_pegawai]</td>";
	echo "<td>$row[tanggal]</td>";
	echo "<td>$row[keterangan]</td>";
	echo "<td><a href=\"lunaskan.php?id=$row[id]\">Lunaskan</a></td>";
	echo "</tr>";
}
?>    
  </tbody>
</table>