@extends('layouts.base')

@section('title')
INSTITUT ISLAMIQUE
@endsection
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/Articles.css')}}">
<link rel="stylesheet" href="{{asset('css/test.css')}}">

  <style>
    #section{
      color: #757575;
      font-size: 17px;
      line-height: 25px;
      direction: ltr;
      list-style: none;
      font-family: inherit;
      box-sizing: border-box;
      margin: 0 auto;
      max-width: 98%;
      width: 98%;
    }
    .titleArticle{
      color: #757575;
    font-size: 17px;
    line-height: 25px;
    direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    padding: 0;
    margin: 0;
    list-style: none;
    font-family: inherit;
    }
    .mainitemtitle4{
      direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    margin: 0;
    list-style: none;
    font-family: inherit;
    overflow: hidden;
    line-height: 40px;
    padding: 6px 20px;
    color: #ab1e56;
    display: inline-block;
    font-weight: bold;
    }
    .itemslist{
      color: #757575;
    font-size: 17px;
    line-height: 25px;
    direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    padding: 0;
    margin: 0;
    list-style: none;
    font-family: inherit;
    }
    .oneitems{
      color: #757575;
    font-size: 17px;
    line-height: 25px;
    direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    padding: 0;
    margin: 0;
    list-style: none;
    font-family: inherit;
    }
    li{
      color: #757575;
    font-size: 17px;
    line-height: 25px;
    direction: ltr;
    list-style: none;
    font-family: inherit;
    box-sizing: border-box;
    background: #fff;
    padding: 10px;
    margin-bottom: 10px;
    transition: all ease-in-out .5s;
    }
    h2{
      color: #757575;
    line-height: 25px;
    direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    padding: 0;
    margin: 0;
    list-style: none;
    font-family: inherit;
    font-size: 1.2em;
    font-weight: normal;
    overflow: hidden;
    }
    .iteminfo{
      color: #757575;
    font-size: 17px;
    line-height: 25px;
    direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    padding: 0;
    list-style: none;
    font-family: inherit;
    display: block;
    width: 95%;
    margin: 10px auto;
    float: left;
    }
    .clear{
      color: #757575;
    font-size: 17px;
    line-height: 25px;
    direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    padding: 0;
    margin: 0;
    list-style: none;
    font-family: inherit;
    content: "";
    height: 0px;
    display: block;
    float: none;
    clear: both;
    }
    #a{
      font-size: 17px;
    line-height: 25px;
    direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    padding: 0;
    margin: 0;
    list-style: none;
    font-family: inherit;
    text-decoration: none;
    color: #002d6a;
    }
    #span{
      line-height: 25px;
    direction: ltr;
    list-style: none;
    font-family: inherit;
    box-sizing: border-box;
    background: #757575;
    color: #fff !important;
    min-width: 80px;
    text-align: center;
    border-radius: 3px;
    height: 21px;
    overflow: hidden;
    transition: all ease-in-out .5s;
    font-size: .8em;
    padding-right: 6px;
    margin-left: 4px;
    float: none;
    display: inline-block;
    padding-left: 3px;
    }
    
  </style>
@endsection
@section('body')
  <section  id="main-slider" class="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <div class="container">
          <div class="carousel-content">
            <h1>INSTITUT ISLAMIQUE</h1>
            <p class="lead">Tout s'épuise un jour,<br>sauf le bien que tu fais<br>et l'amour que tu donnes</p>
            <h1>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h1>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="container">
          <div class="carousel-content">
            <h1>Pour l'éducation des enfants au Mali</h1>
            <p class="lead" style="font-family:Edwardian Script ITC; font-size:40px;">L'éducation, la formation, l'assistance <br>
            Les enfants sont au cœur de nos actions. <br>
            L'éducation est le meilleur des cadeaux.</p>
            <h1>بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h1>
          </div>
        </div>
      </div>
    </div>
    <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
    <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
  </section>
  {{-- News --}}
  <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-07a0">
    <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-container-style u-expanded-width u-group u-palette-5-dark-3 u-group-1">
      <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
        <h1 class="u-align-center-xs u-custom-font u-font-playfair-display u-text u-text-1">Actualités</h1>
      </div>
    </div>
  </section> 
  <div class="container">
    <br>
    <section id="section">
      <div class="right-nav">
        <div class="titleArticle">
          <h3 class="mainitemtitle4">
            <img src="{{asset("images/ico-09.png")}}" alt=""> New Articles
          </h3>
        </div>
        <div class="row">
        @foreach($articles as $item)
          <div class="col-sm-4">
          <div class="itemslist">
            <ul class="oneitems">
              <li>
                <img style="height: 170px; width:-webkit-fill-available;" src={{asset($item->Image)}}>
                @if(strlen($item->Titre)<=25)
                <h2><a style="text-decoration: none;" href="/articles/{{$item->id_article}}">{{$item->Titre}}</a></h2>
                @else
                <h2><a style="text-decoration: none;" href="/articles/{{$item->id_article}}">{{substr($item->Titre, 0, 28)."..."}}.</a></h2>
                @endif
                <div class="iteminfo">
                  <a><span id="span"><i class="fa fa-calendar"></i> {{date('d-m-Y', strtotime($item->updated_at))}}</span></a>
                </div>
                @if(strlen($item->Description)>=50)
                <div class="clear"></div>
                {{substr($item->Description, 0, 90)."..."}}.
                <a id="a"  href="/articles/{{$item->id_article}}">plus</a> <p></p>
                @else
                <div class="clear"></div>{{$item->Description}}.
                @endif
              </li>
            </ul>
          </div>
          </div>
        @endforeach
      </div>
      </div>
    </section>
  </div>
  {{-- End News --}}
  <br>
  <div class="container">
    <section id="services" class="service-item">
    <div class="container">
      <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <h2>Events</h2>
        <p class="lead">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم<br> Retrouvez nos événements à venir</p>
      </div>
      <div style="margin-right: 15px" class="row">
        @foreach($events as $item)
      <div class="col-sm-6 col-md-4">
        <div class="media services-wrap wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
          <div class="pull-left">
            <img style="height: 80px" class="img-responsive" src={{asset($item->Image)}}>
          </div>
          <div class="media-body">
            @if(strlen($item->Titre)>35)
            <h3 class="media-heading">{{substr($item->Titre, 0, 35)."..."}}<a id="a" href="#">plus</a><p></p></h3>
              @else
              <h3 class="media-heading">{{$item->Titre}}</h3> <br>
            @endif
            <div class="iteminfo">
              <a><span id="span"><i class="fa fa-calendar"></i> {{date('d-m-Y', strtotime($item->updated_at))}}</span></a>
            </div>
            @if(strlen($item->Description)>=50)
              {{substr($item->Description, 0, 82)."..."}}.
              <a id="a" href="/articles/{{$item->id_article}}">plus</a> <p></p>
              @else
              <p>{{$item->Description}}</p>
            @endif
          </div>
        </div>
      </div>
      @endforeach
      </div>
    </div>
  </section>
  </div>
  
  
  <br>

</body>
@endsection
