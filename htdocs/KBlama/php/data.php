<?php
ini_set('display_errors', '0');
include "koneksi.php";

$sql = "SELECT * FROM kasir";
$hasil = mysqli_query($mysqli, $sql);
$results = array();

foreach($hasil as $row){
     $results[] = array(          
          'ID_Kasir'=> $row[ID_Kasir],
          'Kasir_username'=> $row[Kasir_Username],
          'Password'=> $row[Password],
          'Nama'=> $row[Nama],
          'ID_Jenis_kelamin'=> $row[ID_Jenis_kelamin],          
     );
}

// while($row = mysqli_fetch_assoc($hasil)){
//  $results[] = array(          
//            'ID_Kasir'=> $row[ID_Kasir],
//            'Kasir_username'=> $row[Kasir_Username],
//            'Password'=> $row[Password],
//            'Nama'=> $row[Nama],
//            'ID_Jenis_kelamin'=> $row[ID_Jenis_kelamin],          
//       );
// }

// $json = json_encode($results, JSON_PRETTY_PRINT);
// header('Content-type: application/json');
// // header('Content-disposition: attachment; filename=kasir.json');
// echo $json;

function save(){
header('Content-type: application/json');
header('Content-disposition: attachment; filename=kasir.json');
echo $json;
}

// if(isset ($_GET['callback']))
// {
//     header("Content-Type: application/json");

//     echo $_GET['callback']."(".json_encode($results).")";

// }

// if(isset($_POST['json'])){
// $jssn = json_encode($results, JSON_PRETTY_PRINT);
// header('Content-type: application/json');
// header('Content-disposition: attachment; filename=file.json');
// }
// elseif(isset($_POST['saveItxml'])){
//     header("Content-type: application/xml");
//     header('Content-Disposition: attachment; filename="'.basename($file).'"'); 
//     header('Content-Length: ' . filesize($file));
//     readfile($file);
// }


?>

<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="save()">
		<input type="submit" name="tampilkan" value="Simpan jadi json" id="tampilkan">
	</form>

</body>
</html>