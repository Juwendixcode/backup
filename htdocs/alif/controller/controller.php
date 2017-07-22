<?php
	include 'model/model.php';
	ob_start();
	class customerSYS {
		public $pesan;
		public $track;

		public function __construct(){
			$this->pesan = new pesan();
			$this->track = new track();
		}

		public function view_home(){
			include 'view/home.php';
		}

		public function view_cp(){
			include 'view/cp.php';
		}

		public function transaksi($name,$address,$HP,$merk,$size,$oldcolor,$note){
			if(isset($_POST['pesan'])){
				$query = $this->status->tambahTransaksi($name,$address,$HP,$merk,$size,$oldcolor,$note,'deepcleaning');
				header('location:/alif/index.php');
				}
			}
		public function orderDC($name, $address, $hp, $merk, $size, $oldcolor, $note){
			if(isset($_POST['pesan'])){
				$query = $this->pesan->setDC($name, $address, $hp, $merk, $size, $oldcolor, $note);
			}
//			echo "<script type='text/javascript'> window.location.href='index.php';
//									alert('Order Succeed. <br> Your Track ID (id_order) <br> PAYMENT <br> Cash on Delivery'); </script>";
		 	exit();
		}

		public function orderRG($name, $address, $hp, $merk, $size, $oldcolor, $note){
			if(isset($_POST['pesan'])){
				$query = $this->pesan->setRG($name, $address, $hp, $merk, $size, $oldcolor, $note);
			}
			// echo "<script type='text/javascript'> window.location.href='index.php';
									// alert('Order Succeed. <br> Your Track ID (id_order) <br> PAYMENT <br> Cash on Delivery'); </script>";
		 	exit();
		}

		public function orderRP($name, $address, $hp, $merk, $size, $oldcolor, $newcolor, $note){
			if(isset($_POST['pesan'])){
				if ($_POST['newcolor']=='Black' || $_POST['newcolor']=='White' || $_POST['newcolor']=='Red' || $_POST['newcolor']=='Green' || $_POST['newcolor']=='Blue' || $_POST['newcolor']=='Yellow') {
					$query = $this->pesan->setRP($name, $address, $hp,$merk, $size, $oldcolor, $newcolor, $note);
					header ('location:index.php');
		 		}else{
		 			echo "<script type='text/javascript'> alert('Your new color input is not valid');
		 	  									window.location.href='index.php'; </script>";
		 	    exit();
		 		}
			// echo "<script type='text/javascript'> window.location.href='index.php';
									// alert('Order Succeed. <br> Your Track ID (id_order) <br> PAYMENT <br> Cash on Delivery'); </script>";
		 	exit();
			}
		}

		// public function orderShoeDC($merk, $size, $oldcolor, $note){
		// 	if(isset($_POST['order'])){
		// 		$query = $this->order->setShoeDC($merk, $size, $oldcolor, $note);
		// 		echo "<script type='text/javascript'> alert('Anda Berhasil Melakukan .');
		//  	   										window.location.href='index.php'; </script>";
		//  	    exit();
		// 	}
		// 	header ('location:index.php');
		// 	exit();
		// }

		// public function orderDC(){
		// 	$query = $this->tabel->setTransaksiDC();
		// 	$cek   = $this->tabel->fetch($query);
		// 	include 'view/home.php';
		// }

		// public function orderServDC(){
		// 	if(isset($_POST['order'])){
		// 		$query = $this->order->setServDC();
		// 		echo "<script type='text/javascript'> alert('Anda Berhasil Melakukan .');
		//  	   										window.location.href='index.php'; </script>";
		//  	   	header ('location:index.php');
		//  	   	exit();
		// 	}
		// 	header ('location:index.php');
		// }

		// public function view_tabel(){
		// 	$query = $this->tabel->getTabelSepatu();
		// 	$cek   = $this->tabel->fetch($query);
		// 	include 'view/tabel.php';
		// }

		// public function delete_sepatu($id_sepatu){
		// 	$delete = $this->tabel->deleteSepatu($id_sepatu);
		// 	header('location:index.php?tabel=1');
		// }

		// public function view_status($id_sepatu){
		// 	$query = $this->status->getStatus($id_sepatu);
		// 	$cek   = $this->status->fetch($query);
		// 	include 'view/status.php';
		// }

		// public function edit_status($id_sepatu, $status, $deskripsi){
		// 	if(isset($_POST['edit'])){
		// 		if(!empty($_POST['status']) && !empty($_POST['deskripsi'])){
		// 			$query = $this->status->editStatus($id_sepatu, $status, $deskripsi);
		// 			header('location:index.php?tabel=1');
		// 			exit();
		// 		}else{
		// 	   		echo "<script type='text/javascript'> alert('Anda harus melengkapi semua form.');
		// 	   											  window.location.href='index.php'; </script>";
		// 	   		exit();
		// 	   	}
		// 		header ('location:index.php?tabel=1');
		// 		exit();
		// 	}
		// }
}
?>
