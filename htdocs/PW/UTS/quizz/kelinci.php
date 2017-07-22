<html>
  <head>
    <title>Cari Hewan</title>
    <link rel="stylesheet" type="text/css" href="hewan.css">
    
    <script type="text/javascript">
    setTimeout("location.reload()",10000)
    </script>

  </head>
  <body id="hasilbg">
   <img id="kelinci" src="img/kelinci.jpg">

   <?php 
    if (!isset($_COOKIE['kelinci'])) {
      header('Location: http://localhost:8080/kuis/search.php');
    }
   ?>


  </body> 
</html>