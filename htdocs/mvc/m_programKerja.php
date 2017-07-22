<?php

require "koneksiMVC.php";

class m_programKerja {
  private $nomorProgram; 
  private $namaProgram;
  private $suratKeterangan;
  public $hasil = array();

  public function setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan)
  {
     $rs = $mysqli->query	("INSERT INTO proker VALUES   
								('$this->nomorProgram’,
								 '$this->namaProgram’,
								 '$this->suratKeterangan')
							");
  }

  
  public function getSemuaPogramKerja()
  {
     require "koneksiMVC.php";
	 $rs = $mysqli->query("SELECT * FROM proker");
	 return $rs;
  }

}
?>
