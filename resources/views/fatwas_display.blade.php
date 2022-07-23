@extends('layouts.base')

@section('title')
{{$fatwas->Titre}}
@endsection
@section('stylesheet')
<style>
    p, h3{
 text-align: justify;
 font-size: 20px;
 font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
    }
    .li{
        text-align: justify;
        /* font-weight: bold; */
        /* color: #65b5a1; */
        font-size: 20px;
        font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
    }
    .alpha{
        list-style-type: lower-alpha;
        font-size: 20px;
        font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
        font-weight: bold;
    }
</style>
@endsection
@section('body')
<section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center">{{$fatwas->Titre}}</h1>
      </div>
        <div>{!!$fatwas->Description!!}</div>
    </div>
    </div>
</section>
@endsection