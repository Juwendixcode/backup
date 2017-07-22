@extends('master')

@section('content')

@include('pages.hero')
<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h2 class="center header text_h2"> <span class="span_h2"> Arep Nandur  </span> merupakan suatu layanan untuk mempermudah <span class="span_h2"> Petani  </span>dalam mengolah lahannya. <span class="span_h2"> Arep Nandur  </span> menyediakan layanan <span class="span_h2"> Simulasi perhitungan lahan</span> dan  <span class="span_h2"> PupukPedia</span>. </h2>
            </div>

            <div  class="col s14 m4 l6">
                <div class="center promo promo-example">
                    <img class="activator" src="img/icon_simulasi.png">
                    <h5 class="promo-caption">Simulasi</h5>
                    <p class="light center">Petani dapat memprediksikan jumlah bibit yang dibutuhkan untuk mulai bercocok tanam, serta dapat memprediksikan berapa hasil panen yang akan dicapai.</p>
                </div>
            </div>
            <div class="col s14 m4 l6">
                <div class="center promo promo-example">
                    <img class="activator" src="img/icon_pupuk.png">
                    <h5 class="promo-caption">PupukPedia</h5>
                    <p class="light center">Menyediakan layanan terkait pupuk. Mulai dari nama pupuk, jenis pupuk, spesifikasi pupuk, dan harga pupuk di pasaran.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Parallax-->
<div class="parallax-container">
    <div class="parallax" ><img src="img/parallax.jpg"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b"> Our Team </h2>
        <div class="row">
            <div class="col offset-s4 s4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar1.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Auliaur Rasyid <br/>
                            <small><em><a class="red-text text-darken-1">PM</a></em></small>
                        </span>
                    </div>
                </div>
            </div>
            </div>
            </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar2.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Aldy R.K<br/>
                            <small><em><a class="red-text text-darken-1">Sistem Analist</a></em></small>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Imron H. Budi S.<br/>
                            <small><em><a class="red-text text-darken-1">Designer</a></em></small>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar4.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">M. Sharif H.<br/>
                            <small><em><a class="red-text text-darken-1">Programmer</a></em></small>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar2.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Harman A.<br/>
                            <small><em><a class="red-text text-darken-1">Tester</a></em></small>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop