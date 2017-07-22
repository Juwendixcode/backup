var map;
var hospital = [];
var initMap = function(position){
  //alert(hospital);
    startPos = position;
    currentLatitude = startPos.coords.latitude;
    currentLongitude = startPos.coords.longitude;
    var latlng = new google.maps.LatLng(currentLatitude,currentLongitude);
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 17,
      center: latlng,
      zoomControl: true,
      zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL,
      position: google.maps.ControlPosition.LEFT_BOTTOM
      },
      mapTypeControl: false,
      streetViewControl:true,
      streetViewControlOptions:{
      position: google.maps.ControlPosition.LEFT_BOTTOM
      }
    });
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon:"images/meicon.png",
        animation: google.maps.Animation.DROP,
        title : "its you"
    });

    for (var i = 0; i < hospital.length; i++) {
        var kost = hospital[i];
        var marker = new google.maps.Marker({
            position: {lat: kost[1], lng: kost[2]},
            icon:"images/"+kost[13]+".png",
            id: kost[0],
            namanya : kost[3],
            kontak : kost[4],
            foto : kost[5],
            operasional : kost[6],
            pelayanan : kost[7],
            harga : kost[8],
            alamat : kost[9],
            website : kost[10],
            deskripsi : kost[11],
            gambar : kost[12],            
            map: map
        });
        google.maps.event.addListener(marker, 'click', function() {
          $('#sidebar').animate({ 'width': '25%' }, 'slow', function(){
              $('#sidebar').show("slow");
          });
          $('.ph').attr('src','foto/'+this.gambar);
          $('.one').html(this.namanya);
          $('.two > span').html(this.alamat);
          $('.three > span').html(this.kontak);
          $('.end > span').html(this.operasional);
          $('.infotambahan > span').html(this.deskripsi+'<br>Pelayanan : '+this.pelayanan+'<br>Website : '+this.website);
          $('#showit').animate({ 'right': '25%' }, 'slow', function(){
              $('#showit').css('visibility','hidden');
              $('#showit').css('right','0px');
              $('#hideit').css('visibility','visible');
          });
        });
    }
  }

$(document).ready(function(){  

 $.ajax({
      url: "http://localhost/PGI/php/data.php",
      dataType: "json",
      success: function(data) {
       for (var i = 0; i<data.length; i++){
           hospital[i]=[
             data[i].id_place,
             Number(data[i].latitude),
             Number(data[i].longtitude),
             data[i].nama_tempat,
             data[i].kontak,
             data[i].foto,
             data[i].Operasional,
             data[i].Pelayanan,
             data[i].Harga,
             data[i].Alamat,
             data[i].Website,
             data[i].Deskripsi,
             data[i].foto,
             data[i].kategori];
       }
      }
  })  
navigator.geolocation.getCurrentPosition(initMap);
});