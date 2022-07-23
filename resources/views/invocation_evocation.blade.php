@extends('layouts.base')

@section('title')
INVOCATIONS & EVOCATIONS
@endsection
@section('stylesheet')
<style>
     p{
  text-align: justify;
  font-size: 20px;
  font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
     }
    li{
        color: #757575;
    line-height: 25px;
    direction: ltr;
    list-style: none;
    font-family: inherit;
    font-size: 10px;
    box-sizing: border-box;
    overflow: hidden;
    position: relative;
    transition: all ease-in-out .5s;
    float: left;
    width: 32.333%;
    margin: 0 0 10px 1%;
    background: #65b5a1;
    text-overflow: unset;
    white-space: unset;
    }
    li a{
        color: black;
        font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
        font-size: 19px;
    }
     #a{
        line-height: 25px;
    direction: ltr;
    font-size: 14px;
    white-space: unset;
    box-sizing: border-box;
    outline: 0 none !important;
    margin: 0;
    list-style: none;
    font-family: inherit;
    text-decoration: none;
    color: #fff;
    display: block;
    text-overflow: ellipsis;
    overflow: hidden;
    padding: 50px 6px;
    height: 125px;
    padding-top: 3px;
    text-align: justify;
    }
    ul{
        color: #757575;
    line-height: 25px;
    direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    padding: 0;
    list-style: none;
    font-family: inherit;
    overflow: hidden;
    margin: 0 0 0 -1%;
    font-size: 1.3em;
    }
    .invocation{
        color: #fff;
        font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
        font-size: 23px;
        
        padding-left: 5px;
    }
    @media only screen and (max-width: 768px) {
  li {
    width: 100%;
  }
} 
    
</style>
@endsection
@section('body')
    
<section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:initial">Quelles sont les invocations en Islam ?</h1>
          <p>D’après Anas Ibn Malikرضي الله عنه LE Prophèteصلى الله عليه وسلم a dit :Celui qui demande trois fois le Paradis à Allah, le Paradis dit : Ô Allah ! Fais le rentrer dans le Paradis. Et celui qui demande protection contre le Feu trois fois, le Feu dit : Ô Allah protège le du Feu »</p>
          <p>[Rapporté par Tirmidhi dans ses Sounan n°2572 et authentifié par Cheikh Albani dans sa correction de Sounan Tirmidhi]</p>
        <div style="text-align: justify; margin-right:0">
            <ul>
                @foreach($volumes as $item)
                <li style="height: 200px">
                    <div style="text-align: initial">
                        <strong><a style="text-decoration: none;" class="invocation" href="#"> <i class="fa fa-folder-open-o"></i> {{$item->Titre}}</a></strong>
                    </div>
                    <div>
                        <strong>&nbsp;</strong>
                    </div>
                    @foreach($category_invocation as $sous_invocation)
                    @if($sous_invocation->id_volume==$item->id_volume)
                    <div class="wpb_wrapper">
                        <a  style="text-decoration: none;" href="/invocation_evocation/{{$sous_invocation->Titre}}/invocation_list">{{$sous_invocation->Titre}}</a>
                    </div>
                    @endif
                    @endforeach
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection