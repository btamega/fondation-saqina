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
              <div style="text-align: initial; margin-right:0">
                <ul>
                  @foreach($category_Prieres as $item)
                    <li style="height: 90px">
                        <div style="text-align: initial">
                            <strong><a style="text-decoration: none;" class="invocation" href="{{URL::to('salat/'.$item->id_category_priere)}}"> <i class="fa fa-folder-open-o"></i> {{$item->Titre}}</a></strong>
                        </div>
                        <div>
                            <strong>&nbsp;</strong>
                        </div>
                    </li>
                  @endforeach
                </ul>
              </div>
        </div>
      </div>
    </div>
</section>

@endsection