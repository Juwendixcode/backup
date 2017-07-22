<?php
include "koneksi.php";

class member{
  	
    function __construct(){
  	   $mysqli = new mysqli('localhost', 'root','', 'mytrain');
    }
    
    function execute($query){
  			$mysqli = new mysqli('localhost', 'root','', 'mytrain');
  			$rs = $mysqli->query ($query);
  			return $rs;
    }
    
    public function login($user,$pass)
    {
        $query = "CALL sp_login('$user','$pass')";
  	     return $this->execute($query);
    }
      
    public function fetch($var){
  	   return mysqli_fetch_array($var);
    }
}

class googlemaps{
      
    function __construct(){
        $mysqli = new mysqli('localhost', 'root','', 'mytrain');
    }
    
    function execute($query){
        $mysqli = new mysqli('localhost', 'root','', 'mytrain');
        $rs = $mysqli->query ($query);
        return $rs;
    }
      
    public function fetch($var){
        return mysqli_fetch_array($var);
    }

    public function getMaps()
    {
      $query = "SELECT * FROM googlemaps WHERE 1";
      return $this->execute($query);
    }
}

class station
{
    function __construct(){
        $mysqli = new mysqli('localhost', 'root','', 'mytrain');
    }
    
    function execute($query){
        $mysqli = new mysqli('localhost', 'root','', 'mytrain');
        $rs = $mysqli->query ($query);
        return $rs;
    }
      
    public function fetch($var){
        return mysqli_fetch_array($var);
    }

    public function getBigStation()
    {
        $query = "SELECT * FROM station WHERE stationtype='big station' ORDER BY distance ASC";
        return $this->execute($query);
    }

    public function getSmallStation()
    {
        $query = "SELECT * FROM station WHERE stationtype='small station' ORDER BY distance ASC";
        return $this->execute($query);
    }

    public function getDetailStation($detailStation,$distance)
    {
        $query = "SELECT * FROM station WHERE city='$detailStation' and distance='$distance'";
        return $this->execute($query);
    }
}
?>