</<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="upload.php" enctype="multipart/form-data">
<td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" name="gambar" required /> | Keterangan : <input type="text" name="keterangan"  /> | 
<input type="submit" value="Upload" name="save"></td>
</form>
<a href="hapus.php">
	Hapus
</a>
<form method="POST" action="tampil.php">
<td colspan="4">Cari Gambar : <input type="text" name="search"/> | 
<input type="submit" value="search" name="save"></td>
</form>
</body>
</html>