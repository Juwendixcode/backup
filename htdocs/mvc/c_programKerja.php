<?php

include_once("m_programKerja.php");

class c_programKerja {
  
  public $model;

  public function __construct(){
     $this->model = new m_programKerja();
     }
  
  public function inputdata(){
  	$input = $this->model->setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan);
	include 'tampil.php';
  }

  public function invoke() {
     $proker = $this->model->getSemuaPogramKerja();
     Include 'v_programKerja.php';
  }

}
?>
