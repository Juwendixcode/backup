$(document).ready(function(){                                  
            $.urlParam = function(name){
	       var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	       return results[1] || 0;
            }
            var x= $.urlParam('harga1');                           
            var y= $.urlParam('harga2');                                           
            $.post("http://www.rabicuse.com/papb/php/data3.php?harga1="+x+"&harga2="+y,function(response){            
            // alert(JSON.stringify(response));                
                var arr = $.parseJSON(response); 
                var trHTML = '';                
                $.each(arr, function(ix){                                      
                 trHTML += '<div class="list"><a href="mapinfo.html?id='+arr[ix].id+'"><img src="http://www.rabicuse.com/papb/php/img/'+arr[ix].gambar+'" alt=""  class=""> <div class="isi"></a>'+arr[ix].namakost+'<br>                      '+arr[ix].pemilik+'<br>                            '+arr[ix].harga+'<br></div></div>'
                });
                  $('.content').append(trHTML).listview("refresh");
                alert(arr);
            });
            
                      
         });