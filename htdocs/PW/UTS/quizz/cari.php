<?php
 	if(isset ($_POST['teks']))
  {  
    setcookie("hewan",$_POST['teks'],10000);       
    header("Location: hasil.php");
  }

	



 
?>