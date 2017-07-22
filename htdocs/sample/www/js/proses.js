function login(){
                  // alert('ini jquery');              
                  $("#loginbtn").on("click", function(){
                var data = $("#login").serialize();    
                $.post("http://192.168.1.4/kostNgalam/php/admin.php", data, function(data){
 
                               if(data.status == "sukses"){
                                     alert('Input Berhasil');
                                     window.location='admin.html';
                                }
                                else if(data.status == 'gagal'){
                                       alert("Error on query!");
                                }
                 });
             });//save onclick
        });//dociment ready
