<?php
  error_reporting(0);
  ini_set('display_errors', '0');

  $name = $_POST['nama'];
    if ($name=="") {
        echo 'gagal';
    }
    else {
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/' . $name . '.png');
        echo 'berhasil';
    }

?>
