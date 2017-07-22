<?php
include "koneksi.php";

/**
*
*/

class dashboard{

    function __construct(){
  	   $mysqli = new mysqli('localhost', 'root','', 'mhp');
    }

    function execute($query){
  			$mysqli = new mysqli('localhost', 'root','', 'mhp');
  			$rs = $mysqli->query ($query);
  			return $rs;
    }

    public function login($user,$pass)
    {
        $query = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
  	     return $this->execute($query);
    }

    public function fetch($var){
  	   return mysqli_fetch_array($var);
    }

    public function getKomentar(){
        $query = "SELECT * FROM komentator";
        return $this->execute($query);
    }
}

class tabel{

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

    public function getTabelPemesanan()
    {
      $query = "SELECT * FROM pemesanan";
      return $this->execute($query);
    }

    // public function getTabelSepatu()
    // {
    //   $query = "SELECT * FROM sepatu";
    //   return $this->execute($query);
    // }

    // public function getTabelPelanggan()
    // {
    //   $query = "SELECT * FROM pelanggan";
    //   return $this->execute($query);
    // }

    // public function deleteSepatu($id_sepatu)
    // {
    //   $query = "DELETE FROM sepatu WHERE id_sepatu='$id_sepatu'";
    //   return $this->execute($query);
    // }

    // public function deletePelanggan($id_pelanggan)
    // {
    //   $query = "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
    //   return $this->execute($query);
    // }

    // public function getTabelTransaksi()
    // {
    //   $query = "SELECT * FROM transaksi t, pelanggan p, sepatu s, layanan l WHERE p.id_pelanggan=t.id_pelanggan AND s.id_sepatu=t.id_sepatu AND s.paket_layanan=l.nama_layanan";
    //   return $this->execute($query);
    // }

    public function getTabelLayanan()
    {
      $query = "SELECT * FROM layanan ";
      return $this->execute($query);
    }

}

class status{

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

    public function getStatus($id_order)
    {
      $query = "SELECT * FROM pemesanan WHERE id_sepatu='$id_order'";
      return $this->execute($query);
    }

    public function tambahTransaksi($name,$address,$HP,$merk,$size,$oldcolor,$note,$layanan){
      $query = "insert into pemesanan (id_order, nama_pelanggan, alamat, hp, merk_sepatu,ukuran_sepatu,paket_layanan, warna_lama, warna_baru, catatan, status, deskripsi_status)values(NULL,'$name', '$address', '$HP', '$merk','$size','$layanan', '$oldcolor','hijau','$note','proses','dalampengerjaan')";
  	  return $this->execute($query);
    }


    // public function getStatusPelanggan($id_pelanggan)
    // {
    //   $query = "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
    //   return $this->execute($query);
    // }

    public function editStatus($id_order, $nama_pelanggan, $alamat, $hp, $merk, $ukuran, $pl, $wa, $wb, $catatan, $status, $deskripsi_status)
    {
      $query = " UPDATE pemesanan SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', hp='$hp, merk_sepatu='$merk', ukuran_sepatu='$ukuran', paket_layanan='$pl', warna_awal='$wa', warna_baru='$wb', catatan='$catatan', status='$status', deskripsi='$deskripsi_status' WHERE id_order='$id_order' ";
      return $this->execute($query);
    }

    // public function editStatus($id_sepatu, $merk, $ukuran, $pl, $wa, $wb, $notes, $status, $deskripsi)
    // {
    //   $query = " UPDATE sepatu SET merk='$merk', ukuran='$ukuran', paket_layanan='$pl', warna_awal='$wa', warna_baru='$wb', notes='$notes', status='$status', deskripsi='$deskripsi' WHERE id_sepatu='$id_sepatu' ";
    //   return $this->execute($query);
    // }

    // public function editStatusPelanggan($id_pelanggan, $nama_pelanggan, $alamat, $no_hp)
    // {
    //   $query = " UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', no_hp='$no_hp' WHERE id_pelanggan='$id_pelanggan' ";
    //   return $this->execute($query);
    // }
}

//class admin{

//   function __construct(){
//        $mysqli = new mysqli('localhost', 'root','', 'mhp');
//     }

//   function execute($query){
//         $mysqli = new mysqli('localhost', 'root','', 'mhp');
//         $rs = $mysqli->query ($query);
//         return $rs;
//     }

//   public function getAdmin(){
//       $query = "SELECT username FROM admin";
//       return $this->execute($query);
//   }
// }
?>
