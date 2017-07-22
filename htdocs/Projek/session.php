<?php
 
include "koneksi.php";

if (isset($_GET['delete'])) {  
    $user = $_GET['delete'];  
    $sql = "delete from user where username='$user'";
    $query = mysqli_query($con,$sql);
	echo "<script>alert ('Data berhasil dihapus');</script>";
    echo "<script>window.location.href = 'admin.php';</script>";
}
if (isset($_GET['edit'])) {  
    $user = $_GET['edit'];  
    $sql = "select * from user where username='$user'";
    $query = mysqli_query($con,$sql);
    $hasil = mysqli_fetch_array($query);
    
    session_start();
    $_SESSION['username']="$hasil[username]";
    $_SESSION['password']="$hasil[password]";
    $_SESSION['id']="$hasil[id]";
    header("location:Edit.php");
}
?>
