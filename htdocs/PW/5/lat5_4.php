<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  $mysqli = new mysqli('localhost', 'root','', 'praktikumweb');

  $rs = $mysqli->query( "CALL SP_Login('".$username."','".$password."')" );
  $row = $rs->fetch_object();
  if ($row)
  {
     header("location:lat5_1.php");
  }
  else
  {
      echo "Data tidak terdaftar";  
   	  //nama file form login yang 
                                          //dibuat di Latihan 4
  }
?>
