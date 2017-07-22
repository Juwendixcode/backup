<?php

include "koneksiMVC.php";
include "../oop/menteri.php";

class m_programKerja {
  private $nomorProgram; 
  private $namaProgram;
  private $suratKeterangan;
  public $hasil = array();
  
  public function setData($nop, $nap, $sk){
  	$this->nomorProgram = $nop;
  	$this->namaProgram = $nap;
  	$this->suratKeterangan = $sk;
  }
  
  public function getSemuaPogramKerja(){
  	include "koneksiMVC.php";
	$rs = $mysqli->query("SELECT * FROM proker");
	return $rs;
  }
  
  public function setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan){	
    require "koneksiMVC.php";
		$rs = $mysqli->query ("insert into proker values('$nomorProgram','$namaProgram','$suratKeterangan')");
	return $rs;						
  }
 
  public function editProker($nop,$nap,$sk){
  	require 'koneksiMVC.php';	
  	$rs = $mysqli->query("UPDATE proker SET namaProgram = '$nap', 
					 suratKeterangan = '$sk' WHERE nomorProgram = '$nop'");
  	return $rs;
  }
  
  public function deleteProker($nop){
  	include "koneksiMVC.php";
  	$rs = $mysqli->query("DELETE FROM proker WHERE nomorProgram = '$nop' ");
  	return $rs;
  }
  
  public function cekUser($user,$pass){
   include "koneksiMVC.php";
   $rs=$mysqli -> query("Select * from user where username='$user' and password='$pass' ");
   $hasil = mysqli_fetch_array($rs);
   return $hasil;
  }
  
  public function cekLogin($user,$pass){
	  include "koneksiMVC.php";
	  $cek =  $this->cekUser($user,$pass) ;
	  if ($cek != '')
	  {
	  	 $_SESSION['username']=$user;
	  }
	  else
	  {
		 
	  }
  }

}

?>
