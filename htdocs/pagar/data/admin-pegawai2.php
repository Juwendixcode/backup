<table class="u-full-width">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>ID Jabatan</th>
      <th>Gaji</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
include_once("koneksi.php");

$sql_query="SELECT * FROM pegawai";
$result=mysqli_query($mysqli, $sql_query);

$qGaji="SELECT id_pegawai FROM gaji";

while($row = mysqli_fetch_array($result))
{

if(isset($qGaji="SELECT id_pegawai FROM gaji";)){
	$gajian = "sudah";
} else {
	$gajian = "belum";
}

	echo "<tr>";
	echo "<td>$row[id]</td>";
	echo "<td>$row[nama_pegawai]</td>";
	echo "<td>$row[id_jabatan]</td>";
	echo "<td>$gajian</td>";
	echo "<td><a href=\"editPegawai.php?id=$row[id]&e=1\">Edit</a>";
	echo "<td><a href=\"deletePegawai.php?id=$row[id]\">Delete</a>";
	echo "</tr>";
}
?>    
  </tbody>
</table>

<h5><a href="editPegawai.php?e">Tambah Pegawai +</a></h5>