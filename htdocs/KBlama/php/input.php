<?php
include "koneksi.php";
error_reporting(0);
ini_set('display_errors', '0');

$nama     = $_POST['namakost'];
$pemilik  = $_POST['pemilik'];
$nohp     = $_POST['nohp'];
$alamat   = $_POST['alamat'];
$harga    = $_POST['harga'];
$kamar    = $_POST['kamar'];
$fasilitas= $_POST['fasilitas'];
$upload_image=$_FILES['gambar']['name'];
$type=substr($upload_image,strpos($upload_image,'.')+1);
$folder="img/";
$lang     = $_POST['lang'];
$long     = $_POST['long'];

if ($nama!="" && $pemilik!='' && $nohp!='' && $alamat!='' && $harga!='' && $fasilitas!=''){
$sql = "INSERT INTO kost VALUES (NULL, '$nama', '$pemilik', '$nohp', '$alamat', '$harga', '$kamar', '$fasilitas',null, '$lang', '$long')";
$hasil = mysqli_query($mysqli, $sql);
    if($hasil){
		$query="select id_kost from kost order by id_kost desc limit 1";
		$ekse=mysqli_query($mysqli,$query);
		$jml=mysqli_num_rows($ekse);
		$j=mysqli_fetch_array($ekse);
		$ganti_nama=$j[id_kost].".".$type;
			 //echo "sukses";
			$update="update kost set gambar=concat('$j[id_kost]','.','$type') where id_kost=$j[id_kost]";
			$ekse2=mysqli_query($mysqli,$update);
			//
			if($ekse2){
			move_uploaded_file($_FILES['gambar']['tmp_name'], "$folder".$ganti_nama);
			  //move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
			 $response_array['status'] = 'sukses'+$j[id_kost];
			 echo "<script>window.history.go(-2);</script>";
			}
			  //$response_array['status'] = 'sukses';
			}
		
    
    else{
        //echo "gagal";
         $response_array['status'] = 'gagal';
    }
	
}else{
         $response_array['status'] = 'kosong';
}




// header('location: {$_SERVER['PHP_SELF']}');
echo json_encode($response_array);
?>
