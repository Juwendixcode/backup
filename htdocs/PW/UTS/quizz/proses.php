<?php

$hewan = $_POST['hewan'];



if (empty($hewan)){
	header('location:search.php?kosong');
} else if ($hewan=='kucing'){
	setcookie("kucing",$_POST['hewan'],time()+10);  
	header('location:kucing.php');
} else if ($hewan=='sapi'){
	header('location:sapi.php');
	setcookie("sapi",$_POST['hewan'],time()+10);  
} else if ($hewan=='kelinci'){
	header('location:kelinci.php');
	setcookie("kelinci",$_POST['hewan'],time()+10);  
} else if ($hewan=='semut'){
	header('location:semut.php');
	setcookie("semut",$_POST['hewan'],time()+10);  
} else {
	header('location:search.php?salah');
}

?>