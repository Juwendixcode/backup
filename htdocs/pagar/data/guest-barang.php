<h4>Showcase</h4>

<table class="u-full-width">
  <thead>
    <tr>
      <th>id</th>
      <th>Barang</th>
      <th>Harga</th>
    </tr>
  </thead>
  <tbody>
    
<?php
include_once("koneksi.php");

$sql_query="SELECT id, barang, harga FROM barang";
$result=mysqli_query($mysqli, $sql_query);

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>$row[id]</td>";
	echo "<td>$row[barang]</td>";
	echo "<td>$row[harga]</td>";
	echo "<td><a href=\" \">Beli</a>";
}
?>

    
  </tbody>
</table>