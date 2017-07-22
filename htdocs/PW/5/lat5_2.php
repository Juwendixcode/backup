<?php
	include "koneksi.php";
	$e = $_GET['e']; 
	if ($e == 0)
		$title = "Tambah User";
	else {
		$title  = "Edit User";
		$q 		= mysqli_query($conn,"SELECT * FROM user WHERE username='$_GET[username]'");
		$data   = mysqli_fetch_array($q);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title><?php echo $title ?></title>
</head>

<body>
<h1><?php echo $title ?> </h1>
<?php 
  if ($e == 0) { ?>
    <form method="post" action="lat5_3.php">
    <input type="hidden" name="e" value="0"/>
      <table border="1">
        <tr>
          <td>Username</td>
          <td><input name="username" type="text" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input name="password" type="text" /></td>
        </tr>
        <tr>
          <td>Level</td>
          <td><input name="level" type="text" /></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Submit" /></td>
        </tr>
      </table>
    </form>
  <?php }else{ ?>
    <form method="post" action="lat5_3.php">
    <input type="hidden" name="e" value="1"/>
      <table border="1">
        <tr>
          <td>Username</td>
          <td><input name="username" type="text" 
             value="<?php echo $data['username'] ?>"/></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input name="password" type="text" 
            value="<?php echo $data['password'] ?>"/></td>
        </tr>
        <tr>
          <td>Level</td>
          <td><input name="level" type="text" 
            value="<?php echo $data['level'] ?>"/></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Submit" /></td>
        </tr>
      </table>
    </form>
  <?php } ?>
</body>
</html>
