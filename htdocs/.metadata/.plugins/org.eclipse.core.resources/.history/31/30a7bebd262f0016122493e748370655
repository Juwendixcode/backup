<?php
include "koneksi.php";

class model{
  	
  function __construct(){
	$mysqli = new mysqli('localhost', 'root', 
              '', 'photokopi');
  }
  function execute($query){
			$mysqli = new mysqli('localhost', 'root', 
                       '', 'photokopi');
			$rs = $mysqli->query ($query);
			return $rs;
  }

  public function register($username,$email,$password,$pp)	
  {
      	$query = "call p_create_user ('$username','$email','$password','$pp')";			
		return $this->execute($query);
  }
  
  public function profil_user($user)
  {
      $query = "call p_profil('$user')";
      			
	  return $this->execute($query);
  }
  
  public function tampil_foto()
  {
      $query = "call p_tampil_foto()";
	  return $this->execute($query);
  }
  
  public function like($id,$iduser)
  {
      $query = "call p_likes('$id','$iduser')";
	  return $this->execute($query);
  }
  
  public function hapusfoto($id)
  {
      $query = "call p_delete_foto('$id')";
	  return $this->execute($query);
  }
  
  public function liked($id,$iduser)
  {
      $query = "call p_unlike('$id','$iduser')";
	  return $this->execute($query);
  }
  public function ceklike($id,$iduser)
  {
      $query = "call p_ceklike('$id','$iduser')";
	  return $this->execute($query);
  }
  
  
  public function profil2($id)
  {
      $query = "call p_profil2($id)";
	  return $this->execute($query);
  }
  
  public function login($user,$pass)
  {
      $query = "call SP_LOGIN('$user','$pass')";
      			
	  return $this->execute($query);
  }
  
  public function posting($id,$title,$path,$tags)
  {
      $query = "call p_posting_foto('$id','$title','$path','$tags')";
	  return $this->execute($query);
  }  
  
  public function fetch($var){
	return mysqli_fetch_array($var);
  }

  public function userlogin($user){
    $query = "select f_username('$user') username";
    return $this->execute($query);
  }

}
  
 
 
?>