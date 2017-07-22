<?php 
	if(isset ($_POST['hewan']))
  {  
    setcookie("hewan",$_POST['hewan'],10000);       
    header("Location: proses.php");
  } 
 ?>