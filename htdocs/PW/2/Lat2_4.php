<html>
<head>
<script>
function validasi() {
    var x = document.forms["input"]["nama"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
</head>
<FORM ACTION="" onsubmit="validasi()" NAME="input">
Nama Anda : <input type="text" name="nama">
</br>
<input type="submit" name="Input" value="Input">
<div id="i"></div>
</FORM>
</html>