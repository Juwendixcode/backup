<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "misc/basicHead.php"; ?>
</head>

<body>

<!--top bar-->
<div class="container">
	<div class="row">
	</div>

<!--contents-->
<?php 
include "data/koneksi.php";

if(isset($msg)){
	echo $msg;
} 
?>

	<div class="row">
		<div class="one-half column" style="margin-top: 20%">
			<h4>Login</h4>
			<form id='login' action="" method='post' accept-charset='UTF-8'>
			<p>
			<label>Username</label>
      		<input class="u-full-width" placeholder="username" id="username" type="text">
      		</p>
      		<p>
      		<label>Password</label>
      		<input class="u-full-width" placeholder="password" id="password" type="password">
      		</p>
      		<a class="button button-primary" href="logged.php">submit</a>
      		<!--
      		
      		<input class="button-primary" value="Submit" type="submit">
      		-->
      		</form>
		</div>
	</div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

	
<?php 
session_start();
	//kalau submit sudah diklik	
	if(isset($_POST['Submit'])){
		//database abal-abal : array('username', 'password')
		$login = array('raga' => '145150400111074');
		$usr = $_POST['username'];
		$pass = $_POST['password'];
		
		$sql_query="SELECT * FROM user WHERE id=2";
		$result=mysqli_query($mysqli, $sql_query);
		$row = mysqli_fetch_array($result);
		
		if($usr=$row[username] && $pass=$row[password]){
			header("location:logged.php");
			exit;
		} else {
			$msg="<span style='color:red'>username atau password salah</span>";
		}
?>
