<html>
  <head>
    <title>Cari Hewan</title>
    <link rel="stylesheet" type="text/css" href="hewan.css">
  </head>
  <body id="searchhome">
    <form id="formcari" action="proses.php" method="POST">
      <p> Nama Hewan <br>
          <input type="text" name="hewan" />      
      </p>      
      <input type="submit" value="Cari" name="submit" />
      <?php
      if (isset($_GET["kosong"]))
        echo "Kolom wajib diisi";
      ?>     

      <?php 
      if(isset($_GET["salah"])) echo "Pencarian tidak ditemukan" 
      ?> 
    </form>
  </body> 
</html>