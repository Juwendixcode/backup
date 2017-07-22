<?php
include "controller/controller.php";

$customerSYS = new customerSYS();

	if (isset($_GET['cp'])){
		$customerSYS -> view_cp();
	}elseif (isset($_GET['deepcleing'])){
		$customerSYS -> orderDC($_POST['name'],
								$_POST['address'],
								$_POST['HP'],
								$_POST['merk'],
								$_POST['size'],
								$_POST['oldcolor'],
								$_POST['note']
								);
		// $customerSYS -> orderShoeDC($_POST['merk'],
		// 							$_POST['size'],
		// 							$_POST['oldcolor'],
		// 							$_POST['note']
		// 							);
	}elseif (isset($_GET['reglue'])){
		$customerSYS -> orderRG($_POST['name'],
								$_POST['address'],
								$_POST['HP'],
								$_POST['merk'],
								$_POST['size'],
								$_POST['oldcolor'],
								$_POST['note']
								);
	}elseif (isset($_GET['repainting'])){
		$customerSYS -> orderRP($_POST['name'],
								$_POST['address'],
								$_POST['HP'],
								$_POST['merk'],
								$_POST['size'],
								$_POST['oldcolor'],
								$_POST['newcolor'],
								$_POST['note']
								);
	}
	elseif (isset($_GET['deepcleaning']))	{
		$customerSYS -> transaksi($_POST['name'],$_POST['address'],$_POST['HP'],$_POST['merk'],$_POST['size'],$_POST['oldcolor'],$_POST['note']);
	}

	else {
		$customerSYS -> view_home();
	}
?>
