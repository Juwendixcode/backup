@extends('master')

@section('content')
<!--Work-->
<div class="section scrollspy" id="work">
    <div class="container">
        <h2 class="header text_b">PupukPedia </h2>
        <div class="row">
            @foreach($pupuks as $pupuk)
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{url()}}/img/icon_pupuk.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{$pupuk->nama}}<i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="/pupuk/{{$pupuk->slug}}">Selengkapnya</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{$pupuk->nama}}<i class="mdi-navigation-close right"></i></span>
                        <p>{{$pupuk->dsingkat}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop