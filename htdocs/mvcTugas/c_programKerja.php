<?php

include "m_programKerja.php";

class c_programKerja {
  
  public $model;

  public function __construct(){
     $this->model = new m_programKerja();
  }

  public function invoke() {
     $proker = $this->model->getSemuaPogramKerja();
     include 'v_programKerja.php';
  }
  public function invoke2() {
     $proker = $this->model->getSemuaPogramKerja();
     include 'v_programKerja2.php';
  }
  
  public function view_editProker(){
  	include "v_editProker.php";
  }
  
  public function editProker(){
  	$this->model->editProker($_POST['nomorProgram'],$_POST['namaProgram'],$_POST['suratKeterangan']);
  	header("location:index.php");
  }
  
  public function view_tambahProker(){
  	include "v_tambahProker.php";
  }
  
   public function tambahProker(){
   	$nomorProgram =$_POST['nop'];
   	$namaProgram  =$_POST['nam'];
   	$suratKeterangan =$_POST['su'];
  	$tambah = $this->model->setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan);
	
  	header("location:index.php");
  }
  
  public function hapusProker($nop){
  	$this->model->deleteProker($nop);
  	
  	header("location:index.php");
  }
  public function viewLogin()
  {
  	include 'v_login.php';
  }
  public function login()
  {
      $this ->model-> cekLogin($_POST['username'],$_POST['password']);
	  header('location:index.php');	
  }
  public function logout()
  {
      session_unset();	
      session_destroy();
	  header('location:index.php');
  }
 
}
?>
