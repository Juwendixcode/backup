<?php
include "controller.php";

session_start();
$controller = new controller();


	if (isset($_GET['register'])){
		$controller -> viewRegister();
	}
	
	
	elseif (empty($_SESSION['username'])){
		$controller -> viewLogin();
	}
	
	elseif ($_SESSION['username']=='admin') {
		if (isset($_GET['logout'])){
			$controller->logout();
		}
		elseif(isset($_GET['edit'])){
			$controller->viewEditAdmin($_GET['edit']);
		}
		elseif(isset($_GET['delete'])){
			$controller->deleteuser($_GET['delete']);
		}
		elseif(isset($_GET['report'])){
			$controller->viewReportAdmin($_GET['report']);
		}
		elseif(isset($_GET['deletepesan'])){
			$controller->deletepesanadmin();
		}
		elseif(isset($_GET['userbaru'])){
			$controller->view_tambahuser();
		}
		elseif(isset($_GET['broadcast'])){
			$controller->broadcast();
		}
		elseif(isset($_GET['crudfoto'])){
			$controller->crudfoto($_GET['crudfoto']);
		}
		
		
		else{
			$controller->view_admin();
		}
	
	}
	
	elseif($_SESSION['username']!='admin'){
		if (isset($_GET['logout'])){
			$controller->logout();
		}	
		elseif (isset($_GET['home'])){
			$controller->view_home();
		}	
		elseif (isset($_GET['friend'])){
			$controller->view_friend();
		}
		elseif (isset($_GET['profilpicture'])){
			$controller->view_profilpicture($_GET['profilpicture']);
		}
		elseif(isset($_GET['profilorang'])){
			$controller->view_profil_orang($_GET['profilorang']);
		}
		elseif(isset($_GET['editprofil'])){
			$controller->vieweditprofil($_GET['editprofil']);
		}
		elseif(isset($_GET['editpicture'])){
			$controller->editpicture($_GET['editpicture']);
		}
		elseif(isset($_GET['pesanprofil'])){
			$controller->viewpesanprofil($_GET['pesanprofil']);
		}
	
	else {
		$controller ->view_index();
	}
		
}
?>