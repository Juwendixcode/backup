<?php
if (isset ($_POST['button'])){
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

if(preg_match('/[a-z0-9]@[a-z0-9].[a-z0-9]/i', $email)){
	true;
}else{
	echo "<script>alert('email anda salah');javascript:history.back()</script>";
}

$smile = "<img src='emoticon/smile.gif' width='20px' height='20px'";

$ubah = str_replace("shit","sh*t",$pesan);
$ubah = str_replace("shit",$smile,$pesan);


}
?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
document.getElementById('chat').innerHTML ="k";
</script>
	<title></title>
</head>
<body>
<div id="chat">
	
</div>
</body>
</html>