<?php
include_once("c_programKerja.php");

$controller = new c_programKerja();
		
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
	else{
		$controller->invoke();
	}
?>

