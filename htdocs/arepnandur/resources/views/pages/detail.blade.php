@extends('master')

@section('content')
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s14 m4 l6">
                <div class="left promo promo-example">
                    <img class="activator" src="{{url()}}/img/icon_pupuk.png" width="300px">
                </div>
            </div>
            <div class="col s14 m4 l6">
                <div class="left promo promo-example">
                    <h3 class="promo-caption">{{$pupuk->nama}}</h3>
                    <h5 class="promo-caption">Harga : Rp. {{number_format ($pupuk->harga, 0, ',', '.')}},-</h5>
                    <h5 class="promo-caption">Jenis : {{$pupuk->jenis}}</h5>
                    <h5 class="promo-caption">Detail  </h5>
                    <p class="light ">{!!nl2br($pupuk->dpanjang)!!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop