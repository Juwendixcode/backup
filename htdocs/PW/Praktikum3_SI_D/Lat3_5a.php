<html>
<head>
	<title>Ayo Sis diorder</title>
	 <script>
		function validate()
		{
			var x = document.forms["form2"]["nama"].value;
			var y = document.forms["form2"]["pass"].value;
			if ((x == null || x == "") && (y == null || y == "")) 
			{
				alert("Anda belum memasukkan nama dan password");
				return false;
			}
			else if ((x != "admin") && (y != "admin")) {
				alert("Nama atau password Anda salah");
				return false;
			}
		}
	</script>
</head>
<body>
    <form id="form1" name="form2" method="post" action="Lat3_5b.php" onsubmit="return validate()">
      Nama : <input type="text" name="nama" id="nama" ><br><br>
      Password : <input type="text" name="pass" id="pass" /><br><br>
      <input type="submit" name="button" id="button" value="Sent" />
    </form>
</body>
</html>