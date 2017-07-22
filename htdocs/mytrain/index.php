<?php
include "controller/controller.php";
// include "view/mapsmenu.php";
// include "view/bigstation.php";
// include "view/smallstation.php";
// include "view/detailstation.php";

//session_start();
$stationLocation = new stationLocation();
// $mapsmenu = new mapsmenu();
// $bigstation = new bigstation();
// $smallstation = new smallstation();
// $detailstation = new detailstation();

	if (isset($_GET['mapsmenu'])){
		$stationLocation -> view_mapsmenu();
		// $mapsmenu->displayBigStationTypeMenu();
		// $mapsmenu->displaySmallStationTypeMenu();
	}elseif (isset($_GET['bigstation'])){
		$stationLocation -> view_bigstation();
	}elseif (isset($_GET['smallstation'])){
		$stationLocation -> view_smallstation();
	}elseif (isset($_GET['detailstation'])){
		$stationLocation -> view_detailstation($_GET['detailstation'],$_GET['distance']);
	//}elseif (isset($_GET['home'])){
	//	$stationLocation -> view_home();
	//}
	//elseif (isset($_GET['logout'])){
	//	$stationLocation -> logout();
	//}
	//elseif (isset($_SESSION['username'])){
	//	$stationLocation -> view_home();
	}
	else {		
	//	$stationLocation -> view_login();
		$stationLocation -> view_mapsmenu();
	}
?>