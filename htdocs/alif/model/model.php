<?php
include "koneksi.php";

class pesan{
  	
    function __construct(){
  	   $mysqli = new mysqli('localhost', 'root','', 'mhp');
    }
    
    function execute($query){
  			$mysqli = new mysqli('localhost', 'root','', 'mhp');
  			$rs = $mysqli->query ($query);
  			return $rs;
    }
        
    public function fetch($var){
  	   return mysqli_fetch_array($var);
    }

    public function setDC($name, $address, $hp, $merk, $size, $oldcolor, $note){
        $query = "INSERT into pemesanan (nama_pelanggan, alamat, hp, merk_sepatu, ukuran_sepatu, paket_layanan, warna_awal, warna_baru, catatan, status, deskripsi_status) values ('$name','$address','$hp', '$merk','$size', (SELECT nama_layanan FROM layanan WHERE id_layanan=1), '$oldcolor', '', '$note','Segera Diambil', 'Konfimasi pengambilan akan segera dilakukan via SMS')";
        return $this->execute($query);
    }

    public function setRG($name, $address, $hp, $merk, $size, $oldcolor, $note){
        $query = "INSERT into pemesanan (nama_pelanggan, alamat, hp, merk_sepatu, ukuran_sepatu, paket_layanan, warna_awal, warna_baru, catatan, status, deskripsi_status) values ('$name','$address','$hp', '$merk','$size', (SELECT nama_layanan FROM layanan WHERE id_layanan=2), '$oldcolor', '', '$note','Segera Diambil', 'Konfimasi pengambilan akan segera dilakukan via SMS')";
        return $this->execute($query);
    }

    public function setRP($name, $address, $hp, $merk, $size, $oldcolor, $newcolor, $note){
        $query = "INSERT into pemesanan (nama_pelanggan, alamat, hp, merk_sepatu, ukuran_sepatu, paket_layanan, warna_awal, warna_baru, catatan, status, deskripsi_status) values ('$name','$address','$hp', '$merk','$size', (SELECT nama_layanan FROM layanan WHERE id_layanan=3), '$oldcolor', '$newcolor', '$note','Segera Diambil', 'Konfimasi pengambilan akan segera dilakukan via SMS')";
        return $this->execute($query);
    }

    // public function setCustRP($name, $address, $hp){
    //     $query = "INSERT into pelanggan (nama_pelanggan, alamat, no_hp) values ('$name','$address','$hp')";
    //     return $this->execute($query);
    // }

    // public function setShoeRP($merk, $size, $oldcolor, $newcolor, $note){
    //     $query = "INSERT into sepatu (merk, ukuran, paket_layanan, warna_awal, warna_baru, notes, status, deskripsi) values ('$merk','$size', (SELECT nama_layanan FROM layanan WHERE id_layanan=3), '$oldcolor', '$newcolor', '$note','Segera Diambil', 'Konfimasi pengambilan akan segera dilakukan via SMS')";
    //     return $this->execute($query);
    // }
}

class track{
      
    function __construct(){
        $mysqli = new mysqli('localhost', 'root','', 'mhp');
    }
    
    function execute($query){
        $mysqli = new mysqli('localhost', 'root','', 'mhp');
        $rs = $mysqli->query ($query);
        return $rs;
    }
      
    public function fetch($var){
        return mysqli_fetch_array($var);
    }

    // public function getTabelSepatu()
    // {
    //   $query = "SELECT * FROM sepatu";
    //   return $this->execute($query);
    // }

    // public function deleteSepatu($id_sepatu)
    // {
    //   $query = "DELETE FROM sepatu WHERE id_sepatu='$id_sepatu'";
    //   return $this->execute($query);
    // }    
}

?>