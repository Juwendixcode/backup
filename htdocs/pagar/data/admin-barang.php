<table class="u-full-width">
  <?php 
                echo "<form action='editBarang.php?e=0' method='POST'>"
               ?> <input class="button button-primary" type='submit' value='Tambah Barang' /><?php
                echo"</form><br/>"; 
  ?>
  <thead>
    <tr>
      <th>ID</th>
      <th>Barang</th>
      <th>ID Jenis</th>
      <th>Harga</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
include_once("koneksi.php");

$sql_query="SELECT * FROM barang";
$result=mysqli_query($mysqli, $sql_query);

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>$row[id]</td>";
	echo "<td>$row[barang]</td>";
	echo "<td>$row[id_jenis_barang]</td>";
	echo "<td>$row[harga]</td>";
	echo "<td><a href=\"editBarang.php?id=$row[id]&e=1\">Edit</a>";
	echo "<td><a href=\"deleteBarang.php?id=$row[id]\">Delete</a>";
	echo "</tr>";
}


?>    
  </tbody>
</table>