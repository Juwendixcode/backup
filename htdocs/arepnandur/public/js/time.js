
function tampilkanjam()
 {
 var waktu = new Date();
 var jam = waktu.getHours();
 var menit = waktu.getMinutes();
 var detik = waktu.getSeconds();
 var teksjam = new String();
 if (jam <= 9 )
 jam = "0" + jam;
 if ( menit <= 9 )
 menit = "0" + menit;
 if ( detik <= 9 )
 detik = "0" + detik;
 teksjam = jam + ":" + menit + ":" + detik;
 tempatjam.innerHTML = teksjam;
 setTimeout ("tampilkanjam()",1000);
 }
 window.onload = tampilkanjam

