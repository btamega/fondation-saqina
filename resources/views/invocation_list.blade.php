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
    }
    p, h3{
  text-align: justify;
  font-size: 20px;
  font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
     }
</style>
@endsection
@section('body')

<section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
        @foreach($category_invocation as $category)
        @foreach($volumes as $vol)
          @if($category->id_volume==$vol->id_volume)
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center">{{$category->Titre}}</h1>
        @endif
        @endforeach
        @endforeach 
      </div>
        @foreach($invocations as $item)
        @if($item->id_category_invocation==$category->id_category_invocation)
        <div style="text-align: center" class="titre">
            <h2 id="h2" style="font-size: 1.7em">{{$item->Titre}}</h2>
        </div>
        <p style="font-size: 20px; font-style:normal; text-align:justify;">{{$item->Description}}</p> <br>
        @if($item->Transcription_Phonetique==null)
        
          @else
          <p style="font-size: 20px; ">Phonétique</p>
        
        <strong><p style="font-size: 20px; font-style:italic; text-align:justify;">*{{$item->Transcription_Phonetique}}*</p></strong> <br>
        @endif
        <p dir="rtl" style="color: #171792; font-size:26pt">{{$item->Reference_Coran}}</p> <br>
        <p style="color: #00B050">{{$item->Reference_Hadith}}</p>
        @endif
        @endforeach
      </div>
    </div>
</section>

@endsection