<?php
include "conn.php";
include "user.php";
$roti = new User($url, $user, $pass, $db);
$kecantikan = new User("http://localhost:8069", "danniarreza@gmail.com", "fin@lidolz", "Database_Cempaka");
//$roti = new User($url, $user, $pass, $db);

$hostsql = "localhost";
$usernamesql = "root";
$passsql = "";
$databasesql = "temp";
$konek = mysql_connect($hostsql, $usernamesql, $passsql);
mysql_select_db($databasesql, $konek);
$query = mysql_query("select id,status from temp_datapending where status='draft' ");
                                while ($row = mysql_fetch_array($query)) {
                                    $state = $kecantikan->cekstate($row['id']);
									$tmp=$state[0]['state'];
									//echo $row['id'];
									//print_r($state);
									if ($tmp!=$row['status']){
										echo 'a';
										if ($tmp=='done'){
											$roti->tambahproduk($row['name'],$row['jumlah']);
										}
										$query2 = mysql_query("UPDATE `temp_datapending` SET `status`='".$tmp."' 
											WHERE `id`='".$row['id']."'");
									}
									}	
echo '<meta http-equiv="refresh" content="3">';									
?>
                                    
             