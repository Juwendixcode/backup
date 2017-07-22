<?php

require "koneksiMVC.php";
include "m_menteri.php";

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
     $rs = $mysqli->query	("INSERT INTO proker VALUES   
								('$nomorProgram’,							 '$namaProgram’,
	 '$suratKeterangan')"							);
	  	return $rs;						
  }
  
  public function editProker($nop,$nap,$sk){
  	$rs = $mysqli->query("UPDATE proker SET namaProgram = '$nop', 
		suratKeterangan = '$nap' WHERE nomorProgram = '$nop'");
  	return $rs;
  }
  
  public function deleteProker($nop){
  	include "koneksiMVC.php";
  	$rs = $mysqli->query("DELETE FROM proker WHERE nomorProgram = '$nop' ");
  	return $rs;
  }
  
  public function cekUser($user){
   include "koneksiMVC.php";
   $rs=$mysqli -> query("Select * from user where username='$user' ");
   return $rs;
  }
  
  public function validasi($user){
	  include "koneksiMVC.php";

	  if ($this->cekUser($user))
	  {
	  	 session_start();
	  	 $_SESSION['username']=$user;
	  }
	  else
	  {
		  echo "Data tidak terdaftar";
	  }
  }
}
?>
