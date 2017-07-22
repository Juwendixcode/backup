<?php
include 'koneksi.php';

session_start();
echo $_SESSION['username'];
$username = $_SESSION['username'];


$sql = "select * FROM foto where username='$username'";
$tampil = mysqli_query($con,$sql);




while($data=mysqli_fetch_array($tampil)){
echo "<img src='gambar/".$data['url']."'></img>";

}

?>
