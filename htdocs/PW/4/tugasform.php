<html>

<head>
	<title></title>
</head>
<body>
<?php
if (isset ($_POST['button'])){
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$counter= 0;

$format = $nama . "|" . $email . "|" . $pesan . "|";


$filename = "chat.txt";

if(preg_match('/[a-z0-9]@[a-z0-9].[a-z0-9]/i', $email)){
	$email = str_replace($email,"<a href='#'>$email</a>",$email);
	$counter ++;
}else{
	echo "<script>alert('email anda salah');javascript:history.back()</script>";
}

$handle = fopen($filename, 'a+');
if($handle) {
	fwrite($handle, $format);
	fclose($handle);
}


}

?>
<form method="POST">
<label for="Nama">Nama</label>
<input type="text" name="nama">
<br>
<label for="Email">Email</label>
<input type="text" name="email">
<br>
<label for="pesan" style="float:left;">pesan</label>
<input type="text" name="pesan">
 <br>
<input type="submit" name="button" value="Process">
<br>Emoticon<br>
:sleep <img src='emoticon/telur.gif' width='30px' height='30px'>
:mmm <img src='emoticon/mmm.gif' width='30px' height='30px'>
:love <img src='emoticon/love.gif' width='30px' height='30px'>
:cupcup <img src='emoticon/cupcup.gif' width='30px' height='30px'>
</form>

<div id="chat">
<?php

$myFile = "chat.txt";
$fh = fopen($myFile, 'r');
$b = fgets($fh);
$telur = "<img src='emoticon/telur.gif' width='30px' height='30px'>";
$mmm = "<img src='emoticon/mmm.gif' width='30px' height='30px'>";
$love = "<img src='emoticon/love.gif' width='30px' height='30px'>";
$cupcup = "<img src='emoticon/cupcup.gif' width='30px' height='30px'>";
		for($i = 0; $i < 1000; $i++)
		{
			$show2 = explode ("|",$b);	
			if($show2[$i]==null){
				break;
			}
			echo "Nama  :$show2[$i] <br>";
			$i++;
			$show2[$i]=str_replace($show2[$i],"<a href='#'>$show2[$i]</a>",$show2[$i]);
			echo "Email :$show2[$i] <br>";
			$i++;
			$show2[$i] = str_replace("shit","sh*t",$show2[$i]);
			$show2[$i] = str_replace(":sleep",$telur,$show2[$i]);
			$show2[$i] = str_replace(":mmm",$mmm,$show2[$i]);
			$show2[$i] = str_replace(":love",$love,$show2[$i]);
			$show2[$i] = str_replace(":cupcup",$cupcup,$show2[$i]);
			echo "Comment :$show2[$i] <br>";
			
			
		}
fclose($fh);



?>
</div>
</body>
</html>