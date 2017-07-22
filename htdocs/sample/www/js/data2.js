$(document).ready(function(){                                  
            $.post("http://www.rabicuse.com/papb/php/data2.php",function(response){            
            // alert(JSON.stringify(response));                
                var arr = $.parseJSON(response); 
                var trHTML = '';                
                $.each(arr, function(ix){                                      
                 trHTML += '<div class="list"><a href="mapinfo.html?id='+arr[ix].id+'"><img src="http://www.rabicuse.com/papb/php/img/'+arr[ix].gambar+'" alt=""  class=""> <div class="isi"></a>'+arr[ix].namakost+'<br>                      '+arr[ix].pemilik+'<br>                            '+arr[ix].notelp+'<br></div></div>'
                });
                  $('.content').append(trHTML).listview("refresh");
            });                                  
         });