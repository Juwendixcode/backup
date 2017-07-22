var arr;
var kostna = [];
    $.post("http://www.rabicuse.com/papb/php/data.php",function(response){
        arr = $.parseJSON(response);
            for (var i = 0; i < arr.length; i++) {
            //kostna.push([arr[i].id,arr[i].langtitude,arr[i].longtitude])
            kostna[i]=[arr[i].namakost,Number(arr[i].langtitude),Number(arr[i].longtitude),'mapinfo.html?id='+arr[i].id];
            }
    });
var suc = function(p) {
            console.log("geolocation success", 4);
            //Draws the map initially
            currentLatitude = p.coords.latitude;
            currentLongitude = p.coords.longitude;
            var latlng = new google.maps.LatLng(currentLatitude, currentLongitude);
            var mapOptions = {
                zoom: 17,
                center: latlng,
                zoomControl: true,
                zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL,
                position: google.maps.ControlPosition.LEFT_TOP
                },
                streetViewControl:true,
                streetViewControlOptions:{
                position: google.maps.ControlPosition.RIGHT_TOP
                }
            }
            var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon:"images/meicon.png",
                animation: google.maps.Animation.DROP,
                title : "its you"
            });
            for (var i = 0; i < kostna.length; i++) {
                var kost = kostna[i];
                var marker = new google.maps.Marker({
                    position: {lat: kost[1], lng: kost[2]},
                    icon:"images/kosticon.png",
                    url: kost[3],
                    map: map
                });
                google.maps.event.addListener(marker, 'click', function() {
                    window.location.href = this.url;
                });
            }      
    };
var fail = function() {
        console.log("Geolocation failed. \nPlease enable GPS in Settings.", 1);
    };
var getLocation = function() {
        console.log("in getLocation", 4);
    };    
function onDeviceReady() {
    try {
        if (navigator.geolocation !== null) {
            navigator.geolocation.watchPosition(suc, fail);
        }
        else {
            alert("navigator.geolocation == null")
        }
    } catch (e) {
        alert(e.message);
    }
    try {
        //hide splash screen
        navigator.splashscreen.hide(); 
    } catch (e) {}
}
document.addEventListener("deviceready", onDeviceReady, false);
