<?php
include "conn.php";
include "user.php";
$hostsql = "localhost";
$usernamesql = "root";
$passsql = "";
$databasesql = "temp";
$konek = mysql_connect($hostsql, $usernamesql, $passsql);
mysql_select_db($databasesql, $konek);
$jumlah = $_POST['jumlah'];
$nama = $_POST['nama'];
$stock = $_POST['stock'];
$id = intval($_POST['id']);
//echo $id.' '.$stock.' '.$jumlah;
$kecantikan = new User($url, $user, $pass, $db);
$idpemesanan = $kecantikan->buatpesanan(6,$id, $jumlah);
$query = mysql_query("insert into temp_datapending value('".$idpemesanan."','".$nama."','".$jumlah."','draft')");
echo "<script>alert('Pemesanan Berhasil'); location.href='index.php';</script>";