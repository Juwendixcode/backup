<?php
	$controller= new controller();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	

</head>
<body>
		<form method="post" action="">
			<table>
				<tr>
					<td>
						USERNAME
					</td>
					<td>
						<input type="text" name="username" />
					</td>
				</tr>
				<tr>
					<td>
						PASSWORD
					</td>
					<td>
						<input type="password" name="password" />
					</td>
				</tr>
				<td>
				<input type="submit" name="submit" value="submit"/>
				</td>
			</table>
			</form>

</body>
</html>
<?php 
	
	if(isset($_POST['submit'])){
		$controller->login();	
	}
?>


