<?php 
ob_start();
include 'model.php';

class controller{
	public $model;
	
	public function __construct()
	{
		$this->model=new model();
	}
	
	public function viewLogin()
  	{
  	include 'login.php';
	}
	
	public function view_admin()
	{
		$databahan=$this->model->tampilbahan();
		include 'admin.php';
	}
	
	public function login()
  	{
      $cek=$this ->model-> cekLogin($_POST['username'],$_POST['password']);
	 
	 	if($cek){
	 		echo "<script>alert('selamat datang')<script>";
			header('location:index.php');
	 	}else{
	 		echo "<script>alert('gagal')<script>";
	 	}
	 
	 
	  
	  exit();	
  	}
	
	public function logout()
  	{
      session_unset();	
      session_destroy();
	  header('location:index.php');
	  
  	}
	
	public function tambah_bahan($nama,$jenis,$jumlah){
	   $this->model->tambahBahan($nama,$jenis,$jumlah);
	   header('location:index.php');	
	}
	
	public function haltambah(){
		include 'tambahdata.php';
	}
	

	
		
}








?>

