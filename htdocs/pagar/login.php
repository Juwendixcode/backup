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
				<form id='login' action="ceklogin.php" method='post' accept-charset='UTF-8'>
					<p>
						<label>Username</label>
      					<input name="username" class="u-full-width" placeholder="username" id="username" type="text">
      				</p>
      				<p>
      					<label>Password</label>
      					<input name="password" class="u-full-width" placeholder="password" id="password" type="password">
      				</p>
      				<!--<input class="button-primary" value="Submit" type="submit">-->
      				<!-- <a class="button button-primary" href="logged.php">submit</a> -->
      				<input class="button button-primary" type="submit" name="Login" value="Login">
      			</form>
		</div>
	</div>	


<?php 
// session_start();
	
// 	//kalau submit sudah diklik	
// 	if(isset($_POST['Submit'])){
// 		//database abal-abal : array('username', 'password')
// 		$login = array('admin' => 'admin');
		
// 		/* Check and assign submitted username and password to new variable */
// 		$username = isset($_POST['username']) ? $_POST['username'] : '';
// 		$password = isset($_POST['password']) ? $_POST['password'] : '';
		
// 		 Check username and password existence in defined array 		
// 		if (isset($login[$username]) && $login[$username] == $password){
// 			/* Success: Set session variables and redirect to Protected page  */
// 			$_SESSION['UserData']['Username']=$login[$username];
// 			header("location:index.php");
// 			exit;
// 		} else {
// 			//salah username atau password
// 			$msg="<span style='color:red'>username atau password salah</span>";
// 		}
// 	}
?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
