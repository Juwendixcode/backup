<!DOCTYPE >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MyTrain - Book your train ticket easily</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAA8G9ZUehlmgHFYSk0eHkvMxSMGSzrQzuxP9i0yI8OwKXwu_vyNhQuc40vTW0co5ModYSrK6lCkwof0Q" type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

    var iconBlue = new GIcon(); 
    iconBlue.image = 'http://labs.google.com/ridefinder/images/mm_20_blue.png';
    iconBlue.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconBlue.iconSize = new GSize(12, 20);
    iconBlue.shadowSize = new GSize(22, 20);
    iconBlue.iconAnchor = new GPoint(6, 20);
    iconBlue.infoWindowAnchor = new GPoint(5, 1);

    var iconRed = new GIcon(); 
    iconRed.image = 'http://labs.google.com/ridefinder/images/mm_20_red.png';
    iconRed.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
    iconRed.iconSize = new GSize(12, 20);
    iconRed.shadowSize = new GSize(22, 20);
    iconRed.iconAnchor = new GPoint(6, 20);
    iconRed.infoWindowAnchor = new GPoint(5, 1);

    var customIcons = [];
    customIcons["small station"] = iconBlue;
    customIcons["big station"] = iconRed;
    function loadMap() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(-7.977542, 112.637100), 13);

        GDownloadUrl("googlemaps.php", function(data) {
          var xml = GXml.parse(data);
          var markers = xml.documentElement.getElementsByTagName("marker");
          for (var i = 0; i < markers.length; i++) {
            var nama = markers[i].getAttribute("nama");
            var alamat = markers[i].getAttribute("alamat");
            var tipe = markers[i].getAttribute("tipe");
            var point = new GLatLng(parseFloat(markers[i].getAttribute("lat")),
                                    parseFloat(markers[i].getAttribute("lng")));
            var marker = createMarker(point, nama, alamat, tipe);
            map.addOverlay(marker);
          }
        });
      }
    }

    function createMarker(point, nama, alamat, tipe) {
      var marker = new GMarker(point, customIcons[tipe]);
      var html = "<b>" + nama + "</b> <br/>" + alamat;
      GEvent.addListener(marker, 'click', function() {
        marker.openInfoWindowHtml(html);
      });
      return marker;
    }
    //]]>
  </script>
</head>
<body onload="loadMap()" onunload="GUnload()">
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
      <h3>
        <?php
         echo $cek['stationname']." with the distance"?> <?php echo $cek['distance']." km" 
        ?>
      </h3>
    </div>
    <div id="leftmapPan1">
      <div  id="map" class="map1">
        <img src="" alt="Loading GOOGLE MAPS for location of choosen station (internet connection is reqiured)">
      </div>
      <h3 style="margin-top:10px;">
        <?php
         echo $cek['description']
        ?>
      </h3>
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