<!DOCTYPE >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MyTrain - Book your train ticket easily</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="topPan"> 
    <a href="index.php">
      <img src="images/logo.png" title="MyTrain" alt="Logo MyTrain" width="219" height="58" border="0"  class="logo"/>
    </a>
  <ul>
    <h2>Booked your train ticket easily</h2>
  </ul>
</div>
<div id="bodyPan">
  <div id="rightPan">
    <h3>Menus</h3>
    <ul>
      <li><a href="index.php?home=1">Home</a></li>
      <br>
      <li><a href="#">Booking Ticket</a></li>
      <br>
      <li><a href="#">Booking Check</a></li>
      <br>
      <li><a href="#">History</a></li>
      <br>
      <li><a href="#">Schedule</a></li>
      <br>
      <li><a href="index.php?mapsmenu=1">Maps</a></li>
      <br>
      <li><a href="#">Profile</a></li>
      <br>
      <li><a href="#">About</a></li>
    </ul>
    <form action="index.php?logout=1" method="post" style="margin-left:138px;" class="form3">
      <input name="logout" type="submit" class="button" id="logout" value="LOGOUT" />
    </form>
  </div>
  <div id="leftPan">
    <div id="leftblockonePan">
    <ul>
      <li class="on"><a href="index.php?bigstation=1"><h4>Big Station</h4></a></li>
      <li><a href="index.php?smallstation=1"><h4>Small Station</h4></a></li>
    </ul>
    </div>
    <div id="leftmapPan">
      <div class="biglist">
        <h3 >
        <?php
          foreach ($query as $cek) {
            ?> <a href="index.php?detailstation=<?php echo $cek['city']?>&&distance=<?php echo $cek['distance']?>"> <?php echo $cek['city'].""?></a><?php echo " ".$cek['distance']." km";?>
            <br><br>
            <?php
          }
        ?>
        </h3>
      </div>
    </div>
  </div>
</div>
<div id="footerPan">
  
  <ul>
    <li>|<a href="#">Home</a>|</li>
    <li><a href="#">Booking Ticket</a>|</li>
    <li><a href="#">Booking Check</a>|</li>
    <li><a href="#">History</a>|</li>
    <li><a href="#">Schedule</a>|</li>
    <li><a href="#">Maps</a>|</li>
    <li><a href="#">Profile</a>|</li>
    <li><a href="#">About</a>|</li>
  </ul>
  </br>
  </br>
  <ul style="margin-left:380px;">
    <li>(Source) design :</li>
    <li><a href="http://www.templateworld.com">Template World</a></li>
  </ul>

</div>
</body>
</html>