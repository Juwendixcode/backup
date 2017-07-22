<table class="u-full-width">
  <?php 
                echo "<form action='editPegawai.php?e=0' method='POST'>"
               ?> <input class="button button-primary" type='submit' value='Tambah Pegawai' /><?php
                echo"</form><br/>"; 
  ?>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>ID Jabatan</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
include_once("koneksi.php");

$sql_query="SELECT * FROM pegawai";
$result=mysqli_query($mysqli, $sql_query);

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>$row[id]</td>";
	echo "<td>$row[nama_pegawai]</td>";
	echo "<td>$row[id_jabatan]</td>";
	echo "<td><a href=\"editPegawai.php?id=$row[id]&e=1\">Edit</a>";
	echo "<td><a href=\"deletePegawai.php?id=$row[id]\">Delete</a>";
	echo "</tr>";
}
?>
  </tbody>
</table>