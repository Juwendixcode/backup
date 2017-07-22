<?php
 
$user_name = "root";
$password = "";
$database = "praktikum";
$host_name = "localhost"; 
 
$con=mysqli_connect($host_name, $user_name, $password);
 
mysqli_select_db($con, 'praktikum');

 
?>