<?php
include "c_programKerja.php";
session_start();
$controller = new c_programKerja();

if (empty($_SESSION['username'])){
	$controller -> viewLogin();
}		

elseif ($_SESSION['username']!='admin') {
	if (isset($_GET['logout'])){
		$controller->logout();
	}	
	else{
		$controller->invoke2();
	}
}
elseif($_SESSION['username']=='admin'){	
	if (isset($_GET['edit'])){
		$controller->view_editProker();
	}
	
	elseif (isset($_GET['add'])){
		$controller->view_tambahProker();
	}
	
	elseif (isset($_GET['delete'])){
		$id = $_GET['delete'];
		$controller->hapusProker($id);
	}
	elseif (isset($_GET['logout'])){
		$controller->logout();
	}
	
	else{
		$controller->invoke();
	}

}
?>
