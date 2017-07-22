<?php

include "m_kepalaDepartemen.php";

class menteri extends pengurusBEM{
  
  public function __construct($nama){
     $this->nama = $nama;
     }

  function setJabatan($jabatan) { // method
     $this->jabatan = $jabatan;
  }

  public function getJabatan() {
     echo "$this->jabatan";
  }
}
?>
