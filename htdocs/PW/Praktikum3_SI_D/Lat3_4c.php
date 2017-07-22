<html> 
  <head> 
    <title>Order Form</title> 
  </head>  
  <body> 
    <p><u>Order Summary</u></p>  
    <?php 
      $num_cd_order = $_COOKIE['cd_order'];  
      $num_dvd_order = $_COOKIE['dvd_order'];  
      echo "Ordered CD : ".$num_cd_order." pieces <br />"; 
      echo "Ordered DVD : ".$num_dvd_order." pieces <br />";   
    ?>
    <br>Ubah Order? <a href = "javascript:history.back()">klik disini!</a><br>
    <form id="form1" name="form1" method="post" action="Lat3_5c.php">
      <input type="submit" name="button" id="button" value="Keluar" />
    </form>
  </body> 
</html>