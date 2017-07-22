$(document).ready(function(){                                  
            $.urlParam = function(name){
	       var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	       return results[1] || 0;
            }
            var x= $.urlParam('harga');                           
            $.post("http://192.168.1.4/kostNgalam/php/data3.php?"+x,function(response){            
            // alert(JSON.stringify(response));                
                var arr = $.parseJSON(response); 
                var trHTML = '';                
                $.each(arr, function(ix){                                      
                 trHTML += '<div class="list"><a href="mapinfo.html?id='+arr[ix].id+'"><img src="images/'+arr[ix].namafoto+'" alt=""  class=""> <div class="isi"></a>'+arr[ix].namakost+'<br>                      '+arr[ix].pemilik+'<br>                            '+arr[ix].harga+'<br></div></div>'
                });
                  $('.content').append(trHTML).listview("refresh");

            });
            
                      
         });