<!DOCTYPE html>
<html>
<style>
body {font-family: "Lato", sans-serif;}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
<body>
<ul class="tab">
  <li><a href="#" class="tablinks" onclick="openCity(event, 'barang')">barang</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'pegawai')">pegawai</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'customer')">customer</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'rekapGaji')">Rekap Gaji</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'rekapPerbulan')">Rekap Perbulan</a></li>
</ul>

<div id="barang" class="tabcontent">
  <h3>Barang</h3>
  <?php include "data/admin-barang.php"; ?>
</div>

<div id="pegawai" class="tabcontent">
  <h3>Pegawai</h3>
  <?php include "data/admin-pegawai.php"; ?>
</div>

<div id="customer" class="tabcontent">
  <h3>Customer</h3>
  <?php include "data/admin-customer.php"; ?>
</div>

<div id="rekapGaji" class="tabcontent">
  <h3>Rekap Gaji Pegawai</h3>
  <?php include "data/admin-rekapGaji.php"; ?>
</div>

<div id="rekapPerbulan" class="tabcontent">
  <h5>Informasi Rekap Pemasukan dan Pengeluaran Keuangan Perbulan</h5>
  <?php include "data/admin-rekapPerbulan.php"; ?>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tabcontent.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 
