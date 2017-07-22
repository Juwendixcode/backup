<?php  
	session_start();
	foreach ($_SESSION["session"] as $val) {
    	echo $val;
    	echo "<br>";
	}
	session_destroy();
?>