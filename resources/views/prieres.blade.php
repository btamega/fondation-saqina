@extends('layouts.base')

@section('title')
{{$category_prieres->Titre}}
@endsection
@section('stylesheet')
<style>
    .titre{
        background-color: #d8d3d3;
        font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
        margin-right: 13px;
        margin-left: 13px;
        
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
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center">{{$category_prieres->Titre}}</h1>
      </div>
        @foreach($prieres as $item)
        <div style="text-align: center" class="titre">
            <h2 id="h2" style="font-size: 1.7em">{{strtoupper($item->Titre)}}</h2>
        </div>
        <p> 
        <?php
          echo str_replace("\n","</br>", $item->Description);
          ?></p> <br>
        @if($item->Transcription_Phonetique==null)
        
          @else
          <p style="font-size: 20px; ">Phonétique</p>
        
        <strong><p style="color:rgb(51, 172, 155); font-size: 18px; font-style:italic; text-align:justify;">*{{$item->Transcription_Phonetique}}*</p></strong> <br>
        @endif
        <p dir="rtl" style="color: #171792; font-size:15pt"><?php
          echo str_replace("\n","</br>", $item->Reference_Coran);
          ?></p></p> <br>
          @if($item->Reference_Hadith==null)
        
          @else
        <p style="color: #00B050"><img style="width: 18px" src="{{asset("images\quran-solid.svg")}}">&nbsp;{{$item->Reference_Hadith}}</p>
        @endif
       @endforeach
      </div>
    </div>
</section>

@endsection