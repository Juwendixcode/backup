<?php
 $host = 'localhost';
 $user = 'root'; //ganti mySQLUserName dengan username dari server mySQL Anda
 $pass = ''; //ganti mySQLPassWord dengan password dari server mySQL Anda
 $database = 'praktikumweb';
 
 $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
 );
 
 $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);


?>

