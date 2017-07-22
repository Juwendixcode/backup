<?php
	include 'model/model.php';
	ob_start();
	class adminSYS {
		public $status;
		public $tabel;
		public $dashboard;
		//public $admin;

		public function __construct(){
			$this->status = new status();
			$this->tabel = new tabel();
			$this->dashboard = new dashboard();
			//$this->admin = new admin();
		}

		public function view_login(){
			include 'view/login.php';
		}

		public function ceklogin()
		{
			if(isset($_POST['login'])){
				if(!empty($_POST['username']) && !empty($_POST['password'])){
			   		$query = $this->dashboard->login($_POST['username'],$_POST['password']);
			   		$cek   = $this->dashboard->fetch($query);
				   	if($cek['username']==$_POST['username']&&$cek['password']==$_POST['password']){
				    	$_SESSION['username']=$_POST['username'];
			    		header('location:index.php');
				    	exit();
				   	}else{
					    echo "<script type='text/javascript'> alert('username / password anda salah.');
					    									  window.location.href='index.php'; </script>";
					    exit();}
			    }else{
			   		echo "<script type='text/javascript'> alert('Anda harus melengkapi semua form.');
			   											  window.location.href='index.php'; </script>";
			   		exit();
			   	}
				header ('location:index.php');
				exit();
			}
		}

		public function view_dashboard(){
			$query = $this->dashboard->getKomentar();
			include 'view/dashboard.php';
		}

		public function view_tabel(){
			$query = $this->tabel->getTabelLayanan();
			$query2 = $this->tabel->getTabelPemesanan();


			// $query = $this->tabel->getTabelSepatu();
			// $query2 = $this->tabel->getTabelPelanggan();
			// $query3 = $this->tabel->getTabelTransaksi();

			// $cek   = $this->tabel->fetch($query);
			// $cek2   = $this->tabel->fetch($query2);

			include 'view/tabel.php';
		}

		public function delete_order($id_order){
			$delete = $this->tabel->deleteOrder($id_order);
			header('location:index.php?tabel=1');
		}

		// public function get_admin($id_admin){
		// 	$query = $this->admin->getAdmin($id_admin);
		// 	$cek   = $this->admin->fetch($query);
		// }

		public function view_status(){
			$query = $this->status->getStatus();
			$cek   = $this->status->fetch($query);
			include 'view/status.php';
		}

		public function viewlocal(){
			header( 'location:../view/');
		}


		public function edit_status($id_order, $nama_pelanggan, $alamat, $hp, $merk, $ukuran, $pl, $wa, $wb, $catatan, $status, $deskripsi_status){
			if(isset($_POST['edit'])){
				if( !empty($_POST['nama_pelanggan']) && !empty($_POST['alamat']) && !empty($_POST['hp']) && !empty($_POST['merk']) && !empty($_POST['ukuran']) && !empty($_POST['paket_layanan']) && !empty($_POST['warna_awal']) && !empty($_POST['warna_baru']) && !empty($_POST['catatan']) && !empty($_POST['status']) && !empty($_POST['deskripsi_status'])){
					$query = $this->status->editStatus($id_order, $nama_pelanggan, $alamat, $hp, $merk, $ukuran, $pl, $wa, $wb, $catatan, $status, $deskripsi_status);
					header('location:index.php?tabel=1');
					exit();
				}else{
			   		echo "<script type='text/javascript'> alert('Anda harus melengkapi semua form.');
			   						  window.location.href='index.php?status=$id_sepatu'; </script>";
			   		exit();
			   	}
				header ('location:index.php?tabel=1');
				exit();
			}
		}

		// public function edit_status($id_sepatu, $merk, $ukuran, $pl, $wa, $wb, $notes, $status, $deskripsi){
		// 	if(isset($_POST['edit'])){
		// 		if(!empty($_POST['merk']) && !empty($_POST['ukuran']) && !empty($_POST['paket_layanan']) && !empty($_POST['warna_awal']) && !empty($_POST['warna_baru']) && !empty($_POST['notes']) && !empty($_POST['status']) && !empty($_POST['deskripsi'])){
		// 			$query = $this->status->editStatus($id_sepatu, $merk, $ukuran, $pl, $wa, $wb, $notes, $status, $deskripsi);
		// 			header('location:index.php?tabel=1');
		// 			exit();
		// 		}else{
		// 	   		echo "<script type='text/javascript'> alert('Anda harus melengkapi semua form.');
		// 	   											  window.location.href='index.php?status=$id_sepatu'; </script>";
		// 	   		exit();
		// 	   	}
		// 		header ('location:index.php?tabel=1');
		// 		exit();
		// 	}
		// }

		// public function delete_pelanggan($id_pelanggan){
		// 	$delete = $this->tabel->deletePelanggan($id_pelanggan);
		// 	header('location:index.php?tabel=1');
		// }

		// public function view_status_pelanggan($id_pelanggan){
		// 	$query = $this->status->getStatusPelanggan($id_pelanggan);
		// 	$cek   = $this->status->fetch($query);
		// 	include 'view/statusPelanggan.php';
		// }

		// public function edit_status_pelanggan($id_pelanggan, $nama_pelanggan, $alamat, $no_hp){
		// 	if(isset($_POST['edit_pelanggan'])){
		// 		if(!empty($_POST['nama_pelanggan']) && !empty($_POST['alamat']) && !empty($_POST['no_hp']) ){
		// 			$query = $this->status->editStatusPelanggan($id_pelanggan, $nama_pelanggan, $alamat, $no_hp);
		// 			header('location:index.php?tabel=1');
		// 			exit();
		// 		}else{
		// 	   		echo "<script type='text/javascript'> alert('Anda harus melengkapi semua form.');
		// 	   											  window.location.href='index.php?status=$id_pelanggan';</script>";
		// 	   		exit();
		// 	   	}
		// 		header ('location:index.php?tabel=1');
		// 		exit();
		// 	}
		// }

		public function transaksi($name,$address,$HP,$merk,$size,$oldcolor,$note){
			if(isset($_POST['pesan'])){
				$query = $this->status->tambahTransaksi($name,$address,$HP,$merk,$size,$oldcolor,$note,'deepcleaning');
				header('location:/alif/index.php');				
				}
			}
			public function transaksis($name,$address,$HP,$merk,$size,$oldcolor,$note){
				if(isset($_POST['pesan'])){
					$query = $this->status->tambahTransaksi($name,$address,$HP,$merk,$size,$oldcolor,$note,'test');

					header('location:index.php');
					exit();

					}
				}




		public function logout()
	  	{
	      session_unset();
	      session_destroy();
		  header('location:index.php');
		  exit();
	  	}
	}
?>
