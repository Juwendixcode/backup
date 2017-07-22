@extends('master')

@section('content')
<!--Simulasi-->
<div class="section scrollspy">
    <div class="container">
        <h2 class="header text_b">Simulasi Pertanian </h2>
        <div class="container">  
        <div class="row">
        {!!Form::open(['url'=>'/simulasi', 'method'=>'POST'])!!}
            <h5>Data lahan <a class="validate green-text">(meter)</a> </h5> 
            <div class="col l4 m4 s16">
                <div class="row">
                    <div class="input-field col s12  {{ $errors->has('panjang') ? 'has-error' : ''}}">
                        <i class="mdi-editor-mode-edit prefix green-text"></i>
                        <input id="icon_prefix" name="panjang" type="text" class="validate green-text">
                        <label for="icon_prefix" class="green-text">Panjang lahan</label>
                        {!! $errors->first('panjang', '<span class="help-block">Panjang lahan :message</span>') !!}
                    </div>
                    <div class="input-field col s12 {{ $errors->has('lebar') ? 'has-error' : ''}}">
                        <i class="mdi-editor-mode-edit prefix green-text"></i>
                        <input id="icon_email" name="lebar" type="text" class="validate green-text">
                        <label for="icon_email" class="green-text">Lebar lahan</label>
                        {!! $errors->first('lebar', '<span class="help-block">Nama lahan :message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="col l4 m4 s16">
                <div class="row">
                    <div  class="col s14 m4 l6">
                        <div class="center promo promo-example">
                            <img class="activator" src="img/lahan.png">
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        <div class="row">
        <h5>Jenis penanaman</h5>
            <div  class="col s14 m4 l6">
                <div class="center promo promo-example">
                    <img class="activator" src="img/legowo.png" width="160px" height="140">
                         <h5 class="validate green-text"> Jajar Legowo</h5>
                        <p><a href="/jajarlegowo">Selengkapnya</a></p>
                </div>
            </div>
           
         
            <div class="col s14 m4 l6">
                <div class="center promo promo-example">
                    <img class="activator" src="img/normal.png" width="160px" height="140">
                        <h5 class="validate green-text"> Konvensional</h5>
                         <p><a href="/konvensional">Selengkapnya</a></p>
                </div>
            </div>
        
            
            <div class="col offset-s4 s5">
                <div class="btn-group">
                    <label class="validate green-text" for="jenispenanaman"><h6>Pilih Jenis Penanaman</h6></label>
                    <select class="form-control" id="jenispenanaman" name="jenispenanaman">
                            <option value="1">Jajar Legowo</option>
                            <option value="2">Konvensional</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <h5>Jenis Tanaman</h5>
            <div  class="col s14 m4 l6">
                <div class="center promo promo-example">
                    <img class="activator" src="img/tanaman.png">
                </div>
            </div>
            <p></p>
            <div  class="col s5 ">
                <div class="btn-group">
                    <label class="validate green-text" for="jenistanaman"><h6>Pilih Jenis Tanaman</h6></label>
                    <select class="form-control" id="jenistanaman" name="jenistanaman">
                        @foreach($tanamans as $tanaman)
                        <option value="{{$tanaman->id}}">{{$tanaman->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<!--Proses-->
<div class="section scrollspy" id="team">
    <div class="container">
        <div class="row">
        <div class="col offset-s2  s7">
        <a class="validate green-text"> klik "Proses" untuk menghitung hasil Simulasi Pertanian</a>
        <p> </p>
            
        </div>
        
        <div class="col offset-s6 s5">
            <button class="btn waves-effect waves-light green darken-1" type="submit">Proses
                <i class="mdi-content-send right white-text"></i>
            </button>
            {!!Form::close()!!}
        </div>
        </div>
    </div>
</div>
@stop