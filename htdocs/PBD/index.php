<?php
include "controller/controller.php";

session_start();
$controller = new controller();


	if (isset($_GET['register'])){
		$controller -> view_register();
	}
	elseif (isset($_GET['home'])){
		$controller -> view_home();
	}
	elseif (isset($_GET['logout'])){
	$controller -> logout();
	}
	elseif (isset($_SESSION['username'])){
		$controller -> view_home();
	}
	
	
	
	else {		
		$controller -> view_login();
	}
	
		

?>
