<html>
  <head>
    <title>Order Form</title>
  </head>
  <?php
    $num_cd_order = $_POST['cd_order'];
    $num_cd_order = $_POST['dvd_order'];
    ?>
  <body>
    <form action="Lat3_4b.php" method="POST">
      <p> Order CD, amount : 
          <?php echo '<input type="text" name="cd_order" value="0" size="2"   
          maxlength="2" />' ?>      
      </p>      
      <p> Order DVD, amount :
          <input type="text" name="dvd_order" value="0" size="2" 
          maxlength="2" />      
      </p> 
      <input type="submit" value="Add To Cart" name="submit" />        
    </form>
  </body> 
</html>
