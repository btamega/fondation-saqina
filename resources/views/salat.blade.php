@extends('layouts.base')

@section('title')
SALAT
@endsection
@section('stylesheet')
<link rel="stylesheet" href="{{asset("css/menuItem.css")}}">
@endsection
@section('body')
<section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:initial">CHAPITRE SUR LA PRIERE</h1> <br>
          <p>La prière est l'un des actes d'adoration le plus important en islam. <br> La prière consiste à montrer à Allah notre soumission, notre dévotion et notre amour que l'on a pour Lui. <br>
            Le musulman doit prier 5 fois par jours, précédée d'une purification rituelle.</p> <br>
            <p>D'après Jabir (qu'Allah l'agrée), le Prophète (que la prière d'Allah et Son salut soient sur lui) a dit: « Certes entre un homme et l'association et la mécréance il y a l'abandon de la prière ». <br>
              (Rapporté par Mouslim dans son Sahih n°82)</p> <br>
            <div style="text-align: justify; margin-right:0">
                <ul>
                    <li>
                        <div>
                          <a style="text-decoration: none;" href="{{URL::to('/salat/1')}}"><img style="width: 18px" src="{{asset("images\pray-solid.svg")}}">&nbsp;Les conditions de validité de la prière</a>
                        </div>
                        <div>
                          <a style="text-decoration: none;" href="{{URL::to("/salats/Horaires")}}"><img style="width: 18px" src="{{asset("images\quran-solid.svg")}}">&nbsp;Le nombre des prières et les horaires</a>
                        </div>
                        <div>
                          <a style="text-decoration: none;" href="{{URL::to("/salat/3")}}"><img style="width: 18px" src="{{asset("images\quran-solid.svg")}}">&nbsp;Les ablutions</a>
                        </div>
                    </li>
                    <li>
                      <div>
                        <a style="text-decoration: none;" href="{{URL::to("/salats/Adhan")}}"><img style="width: 18px" src="{{asset("images\kaaba-solid.svg")}}">&nbsp;L'appel à la prière</a>
                      </div>
                      <div>
                        <a style="text-decoration: none;" href="{{URL::to("/salats/La-prière")}}"><img style="width: 18px" src="{{asset("images\praying-hands-solid.svg")}}">&nbsp;La prière</a>
                      </div>
                      <div>
                        <a style="text-decoration: none;" href="{{URL::to("/salat/6")}}"><img style="width: 18px" src="{{asset("images\star-and-crescent-solid.svg")}}">&nbsp;La prière des fêtes</a>
                      </div>
                  </li>
                  <li>
                    <div>
                      <a style="text-decoration: none;" href="{{URL::to("/salats/vendredi")}}"><img style="width: 18px" src="{{asset("images\mosque-solid.svg")}}">&nbsp;La prière du vendredi</a>
                    </div>
                    <div>
                      <a style="text-decoration: none;" href="{{URL::to("/salat/8")}}"><img style="width: 18px" src="{{asset("images\quran-solid.svg")}}">&nbsp;L'abandon de la prière</a>
                    </div>
                    <div>
                      <a style="text-decoration: none;" href="{{URL::to("/salats/reparation")}}"><img style="width: 18px" src="{{asset("images\quran-solid.svg")}}">&nbsp;Réparation de la prière</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
      </div>
    </div>
</section>

@endsection