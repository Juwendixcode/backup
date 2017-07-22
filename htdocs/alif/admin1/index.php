<?php
include "controller/controller.php";

session_start();
$adminSYS = new adminSYS();

	if (isset($_GET['tabel'])){
		$adminSYS -> view_tabel();
		//$adminSYS -> get_admin();
	}elseif (isset($_GET['status'])){
		$adminSYS -> view_status($_GET['status']);
		//$adminSYS -> get_admin();
	}elseif (isset($_GET['delete'])){
		$adminSYS -> delete_order($_GET['delete']);
	}elseif (isset($_GET['edit'])){
		$adminSYS -> edit_status($_POST['id_order'], $_POST['nama_pelanggan'], $_POST['alamat'], $_POST['hp'], $_POST['merk'], $_POST['ukuran'], $_POST['paket_layanan'], $_POST['warna_awal'], $_POST['warna_baru'], $_POST['catatan'], $_POST['status'], $_POST['deskripsi_status']);

	// }elseif (isset($_GET['edit'])){
	// 	$adminSYS -> edit_status($_POST['id_sepatu'], $_POST['merk'], $_POST['ukuran'], $_POST['paket_layanan'], $_POST['warna_awal'], $_POST['warna_baru'], $_POST['notes'], $_POST['status'], $_POST['deskripsi']);

	// }elseif (isset($_GET['status_pelanggan'])) {
	// 	$adminSYS -> view_status_pelanggan($_GET['status_pelanggan']);
	// }elseif (isset($_GET['delete_pelanggan'])) {
	// 	$adminSYS -> delete_sepatu_pelanggan($_GET['delete_pelanggan']);
	// }elseif (isset($_GET['edit_pelanggan'])) {
	// 	$adminSYS -> edit_status_pelanggan($_POST['id_pelanggan'], $_POST['nama_pelanggan'], $_POST['alamat'], $_POST['no_hp']);

	}elseif (isset($_GET['ceklogin'])){
		$adminSYS -> ceklogin($_POST['username'],$_POST['password']);
	}elseif (isset($_GET['logout'])){
		$adminSYS -> logout();
	}elseif (isset($_SESSION['username'])){
		$adminSYS -> view_dashboard();
	}

		//$adminSYS -> get_admin();

	else {
		$adminSYS -> view_login();
	}
?>
