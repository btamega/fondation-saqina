@extends('layouts.base')

@section('title')
Fondation SAQINA
@endsection
@section('stylesheet')
<style>
    .titre{
        background-color: #d8d3d3;
        font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
        margin-right: -30px;
        margin-left: -3px;
        
    }
    #h2{
    margin: 0;
    -webkit-text-size-adjust: 100%;
    pointer-events: initial;
    text-align: center;
    box-sizing: border-box;
    color: inherit;
    word-wrap: break-word;
    font-weight: 400;
    line-height: 1.1;
    
    position: relative;
    font-size: 3rem;
    margin: 0;
    }
    p, h3{
  text-align: justify;
  font-size: 20px;
  font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
     }
    img{
      float: left;
      margin-right: 30px;
    }
    .img {
  float: left;
}

</style>
@endsection
@section('body')

<section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:initial">{{strtoupper('Introduction generale')}}</h1>
          <p style="font-size: 20px; text-align:justify">Voici des hommes qui ont connu de près le Messager. Certains l'ont accompagné dès le début de sa mission, d'autres en cours de chemin. Mais tous sont venus, au moment qui leur fut prédestiné, à  une époque où de grands bouleversements allaient être opérés. Ces hommes sont arrivés au bon moment, pour assister et participer à la diffusion de la mission dont le Messager a eu la charge. Evidemment, ce livre ne peut parler de tous ces hommes, qui sont des milliers. Toutefois, ceux choisis et qui sont une soixantaine sont représentatifs, estimons nous. Dans leurs portraits, on verra les portraits de tous ceux qui ont accompagné le Messager . On verra leur foi inébranlable, leur détermination, leur héroïsme, ainsi que leur allégeance à  Allah et son Messager . On verra aussi leurs sacrifices, les difficultés qu'ils ont supportées, ainsi que le triomphe qu'ils ont mérité. On verra enfin le grand rôle qu'ils ont assumé pour libérer l'humanité des affres du polythéisme.</p>
      </div>
        @foreach($personnalites as $item)
        <div style="text-align: center" class="titre">
            <strong><h2 id="h2" style="font-size: 2em; font-family: 'Abril Fatface'">{{strtoupper($item->Nom)}}</h2></strong>
        </div>
          <div style="text-align: justify;" >
            <p style="font-size: 20px; margin-left:10px;">
            <img src="{{asset("images\couvertures\Abdallah.jpeg")}}" class="img" style="width:280px;height:290px;">
                  <?php
                echo str_replace("\n","</br>", $item->Histoire);
                ?>
            </p>
          </div>
        @endforeach
      </div>
    </div>
</section>
  

@endsection
