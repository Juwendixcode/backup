<html>
<head>
<script>
function pythagoras() {
	var tinggi = document.getElementById("Tinggi").value;
	var alas   = document.getElementById("Alas").value;
	var miring = document.getElementById("SisiMiring").value;
    if (tinggi != ""  && alas != "") {
        var z = parseInt(tinggi) + parseInt(alas);
        document.getElementById("Hasil").innerHTML = "Sisi Miringnya : "+z;
    }
	else if (tinggi != "" && miring != "") {
        var z = parseInt(miring) - parseInt(tinggi);
        document.getElementById("Hasil").innerHTML = "Alasnya "+z;
    }
	else if (alas != "" && miring != ""){
		var z = parseInt(miring) - parseInt(alas);
        document.getElementById("Hasil").innerHTML ="Tingginya"+z ;
	}
	else if(alas != "" && miring != "" && tinggi != ""){
	    document.getElementById("Hasil").innerHTML ="Kebanyakan" ;
	}
	else if(alas != "" || miring != "" || tinggi != ""){
	    document.getElementById("Hasil").innerHTML ="Minimal 2" ;
	}
	else{
	document.getElementById("Hasil").innerHTML ="Isi Minimal 2" ;
	}
}
function hapus(){
document.getElementById("Tinggi").value = "";
document.getElementById("Alas").value = "";
document.getElementById("SisiMiring").value = "";
document.getElementById("Hasil").innerHTML = "";
}
function LuasSegitiga() {
	var tinggi = document.getElementById("Tinggi2").value;
	var alas   = document.getElementById("Alas2").value;
	
    if (tinggi != ""  && alas != "") {
        var z = (parseInt(tinggi) * parseInt(alas))/2;
        document.getElementById("Hasil2").innerHTML = "Luas Segitiga : "+z;
    }
	else if(alas != "" || tinggi != ""){
	    document.getElementById("Hasil2").innerHTML ="Minimal 2" ;
	}
	else{
	document.getElementById("Hasil2").innerHTML ="Isi Minimal 2" ;
	}
}
function hapus2(){
document.getElementById("Tinggi2").value = "";
document.getElementById("Alas2").value = "";
document.getElementById("Hasil2").innerHTML = "";
}
function LuasLingkaran() {
	var jari2 = document.getElementById("Jari2").value;
    if (jari2 != "") {
        var z = Math.PI *(parseInt(jari2))+(parseInt(jari2));
        document.getElementById("Hasil3").innerHTML = "Luas Lingkaran : "+z;
    }
	else{
	document.getElementById("Hasil3").innerHTML ="Isi Jari-jarinya" ;
	}
}
function hapus3(){
document.getElementById("Jari2").value = "";
document.getElementById("Hasil3").innerHTML = "";
}
</script>
</head>

<body>
<p>Rumus Phytagoras</p>

<input id="Tinggi"> Tinggi<br>
<input id="Alas" > Alas<br> 
<input id="SisiMiring"> Sisi Miring<br>
<input type="submit" onclick="pythagoras()" name="Input" value="Input">
<input type="submit" onclick="hapus()" name="Input" value="Reset"><br>
Hasil <div id="Hasil"> </div>
<br>
<br>
<p>Rumus Luas Segitiga</p>

<input id="Tinggi2"> Tinggi<br>
<input id="Alas2" > Alas<br> 
<input type="submit" onclick="LuasSegitiga()" name="Input" value="Input">
<input type="submit" onclick="hapus2()" name="Input" value="Reset"><br>
Hasil <div id="Hasil2"> </div>
<br>
<br>
<p>Rumus Luas Lingkaran</p>

<input id="Jari2"> Jari-Jari<br>
<input type="submit" onclick="LuasLingkaran()" name="Input" value="Input">
<input type="submit" onclick="hapus3()" name="Input" value="Reset"><br>
Hasil <div id="Hasil3"> </div>
</body>

</html>