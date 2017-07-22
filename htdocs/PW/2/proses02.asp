function validasi() {
    var x = document.forms["input"]["nama"].value;
    if (x == null || x == "") {
        document.getElementById("o").innerHTML ="Masukin woy" ;
    }
}