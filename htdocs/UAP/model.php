<?php
include 'koneksi.php';

class model{

	

	public function __construct(){
	$mysqli = new mysqli('localhost', 'root', 
              '', 'produksi');
	}
	public function execute($query){
			$mysqli = new mysqli('localhost', 'root', 
                       '', 'produksi');
			$rs = $mysqli->query ($query);
			return $rs;
  	}
	public function fetch($var){
			return mysqli_fetch_array($var);
	}
	
	public function cekUser($user,$pass){
   	$ubah = md5($pass);	
   	$query ="Select * from admin where USERNAME_ADM='$user' and PASSWORD_ADM='$ubah' ";
   	return $this->execute($query);
  	}

  	public function cekLogin($user,$pass){	  
	  $cek =  $this->cekUser($user,$pass) ;
	  $data = $this->fetch($cek);
	  if ($data['USERNAME_ADM'] != ''&& $data['PASSWORD_ADM'] != '')
	  {
	  	 $_SESSION['username']=$user;
		 
	  }
  	}
	
	public function tampilbahan(){
		$query = "select * from bahan";
		return $this->execute($query);	
	}
	
	public function tambahBahan($nama,$jenis,$jumlah)
	{
		$query= "insert into bahan(ID_BAHAN,NAMA_BAHAN,JUMLAH_BAHAN) values('$nama',$jenis,$jumlah) ";
		return $this-$execute($query);
	}





	}

?>