<?php
include("m_programKerja.php");

class c_programKerja {
  public $model;

  public function __construct(){
     $this->model = new m_programKerja();
  }

  public function invoke() {
     $proker = $this->model->getSemuaPogramKerja();
     Include 'v_programKerja.php';
  }
  
  public function view_editProker(){
  	include "v_editProker.php";
  }
  
  public function editProker(){
  	$this->model->editProker($_POST['momorProgram'],$_POST['namaProgram'],$_POST['suratKeterangan']);
  	header("location:index.php");
  }
  
  public function view_tambahProker(){
  	include "v_tambahProker.php";
  }
   public function tambahProker(){
  	$this->model->setProgramKerja($_POST['nomorProgram'],$_POST['namaProgram'],$_POST['suratKeterangan']);
  	header("location:index.php");
  }
  
  public function hapusProker($nop){
  	$this->model->deleteProker($nop);
  	
  	header("location:index.php");
  }
  
  public function view_login(){
  	include "v_login.php";
  }
  
  public function login(){
  	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  
	  if($this ->model -> validasi($username)){
	  header('Location: index.php');
	  }else{
	  header('Location: login.php');
	  }
  }
  
  public function logout(){
  session_start();
  session_unset();
  session_destroy();	
  header('location:index.php');
  }
}
?>
