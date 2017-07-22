<body>
    <!-- Simple header with fixed tabs. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
                   mdl-layout--fixed-tabs">
          <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
              <!-- Title -->
              <span class="mdl-layout-title">Aplikasi CRUD</span>
            </div>
            <!-- Tabs -->
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
              <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Edit</a>
              <a href="#fixed-tab-2" class="mdl-layout__tab">List</a>
            </div>
          </header>
          <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Title</span>
          </div>
          <main class="mdl-layout__content">
            <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
              <div class="page-content" align="center"><br>
              <div class="mdl-cell mdl-cell--8-col mdl-card__supporting-text no-padding">
                <form action="#" id="simpan">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="nama" name="nama">
                    <label class="mdl-textfield__label" for="nama">Nama</label>
                  </div>
                  <br>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="hp" name="hp">
                    <label class="mdl-textfield__label" for="hp">Nomor HP</label>
                    <span class="mdl-textfield__error">Input harus nomor!</span>
                  </div>
                </form>
                  <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--2-col"><a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" id="delete">Hapus</a></div>
                    <div class="mdl-cell mdl-cell--2-col"><a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" id="edit">Simpan</a></div>
                </div>
              </div>
              </div>
            </section>
            <section class="mdl-layout__tab-panel" id="fixed-tab-2">
              <div class="page-content">
                <ul class="demo-list-icon mdl-list" id="datane">
                     
                </ul>
                <div class="mdl-cell mdl-cell--4-col" align="right"><a href="index.html" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Kembali</a></div>
              </div>
            </section>
          </main>
        </div>
</body>
Tambahkan juga fungsi javascript berikut untuk bisa UPDATE dan DELETE.
DATA HOSTED WITH ♥ BY PASTEBIN.COM - DOWNLOAD RAW - SEE ORIGINAL
<!-- Punya Edit -->
    <script>
        $(document).ready(function(){
 
              var id1 = parse("id");
 
        $.post("http://127.0.0.1/crudxdk/edit.php?id1="+id1, function(data){
           
        var note = $.parseJSON(data);
        $('#nama').val(note.nama);
        $('#hp').val(note.hp);
          });
         
          /***************************/
                 
        $("#edit").on('click',function(){
                var edit = $("#simpan").serialize();
                // alert(edit);
 
        $.post("http://127.0.0.1/crudxdk/edit.php?id2="+id1, edit, function(data){
 
                                   if(data.status == "sukses"){
                                         alert('Input Berhasil');
                                         window.location='index.html';
                                    }
                                    else if(data.status == 'gagal'){
                                           alert("Error on query!");
                                    }
 
         });
            }); //onclick edit  
 
        $("#delete").on('click',function(){
                var hapus = $("#simpan").serialize();
 
                 //alert(hapus);
 
        $.post("http://127.0.0.1/crudxdk/delete.php?id1="+id1, hapus, function(data){
 
                                   if(data.status == "sukses"){
                                         alert('Delete Berhasil');
                                         window.location='index.html';
                                    }
                                    else if(data.status == 'gagal'){
                                           alert("Error on query!");
                                    }
         });
            }); //onclick delete          
               });//document ready
 
        /*fungsi untuk mengambil parameter dari link*/    
        function parse(val) {
 
            var result = "Not found",
                tmp = [];
            location.search
            //.replace ( "?", "" )
            // this is better, there might be a question mark inside
            .substr(1)
                .split("&")
                .forEach(function (item) {
                tmp = item.split("=");
                if (tmp[0] === val) result = decodeURIComponent(tmp[1]);
            });
            return result;
        }
    </script>
- See more at: https://www.codepolitan.com/aplikasi-crud-sederhana-menggunakan-intel-xdk-dan-database-mysql#sthash.9yabaDAI.dpuf