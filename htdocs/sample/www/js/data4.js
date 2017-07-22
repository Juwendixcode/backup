$(document).ready(function(){                                  
            $.post("http://127.0.0.1/kostNgalam/php/data4.php",function(response){             
            // alert(JSON.stringify(response));                
                var arr = $.parseJSON(response); 
                var trHTML = '';                
                $.each(arr, function(ix){                                      
                 trHTML += '<div class="list"><a href="mapinfo.html?id='+arr[ix].id+'"><img src="http://127.0.0.1/kostNgalam/php/img/'+arr[ix].gambar+'" alt="'+arr[ix].gambar+'"  class=""> <div class="isi"></a>'+arr[ix].namakost+'<br>                      '+arr[ix].pemilik+'<br>                            '+arr[ix].notelp+'<br></div></div>'
                });
                  $('.content').append(trHTML).listview("refresh");

            });
            
                      
         });