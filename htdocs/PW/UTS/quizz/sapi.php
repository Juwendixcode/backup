<html>
  <head>
    <title>Cari Hewan</title>
    <link rel="stylesheet" type="text/css" href="hewan.css">
    
    <script type="text/javascript">
    setTimeout("location.reload()",10000)
    </script>

  </head>
  <body id="hasilbg">
   <img id="sapi" src="img/sapi.jpg">

   <?php 
    if (!isset($_COOKIE['sapi'])) {
      header('Location: http://localhost:8080/kuis/search.php');
    }
   ?>


  </body> 
</html>