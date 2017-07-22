<!DOCTYPE html>
<html>
<head>
<script>
function convert(degree) {
    if (degree == "C") {
        F = document.getElementById("c").value * 9 / 5 + 32;
        document.getElementById("f").value = Math.round(F);
    } else	{
        var z='Masukkan Nilainya';
		document.getElementById("c").innerHTML = z;
		
    }
}
</script>
</head>

<body>
<p>Masukkan angka pada masukan berikut:</p>
<input id="c" onkeyup="convert('C')"> derajat Celcius <br>
equals<br> 
<input id="f" onkeyup="convert('F')"> derajat Fahrenheit 

</body>

</html>
