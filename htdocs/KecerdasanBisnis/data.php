<?php  
include "koneksi.php";


$sql = mysqli_query($con, "SELECT Nama FROM produk");
echo "<option>Silahkan memilih</option>";
while ($row = $sql->fetch_assoc()){	
echo "<option value=\"".$row['Nama']."\">" . $row['Nama'] . "</option>";	
}
?>