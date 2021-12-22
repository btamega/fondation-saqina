@extends('layouts.base')
@section('title')
PASSEPORT SANTE
@endsection
@section('stylesheet')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  .flotte {
float:left;
}
p, h3{
  text-align: justify;
  font-size: 20px;
  font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
}
#strong{
  font-size: 17px
}
.img {
  float: left;
  width:200px;
  height:170px; 
  padding-right:20px
}
.zoom:hover {
  -ms-transform: scale(1.5);
  -webkit-transform: scale(1.5); 
  transform: scale(1.5); 
}
@media only screen and (max-width: 768px) {
  .img {
    width: 100%;
    padding-right:0;
    margin-left: 3px;
  }
  p{
    padding-left: 10px;
  }
} 
  </style>
@endsection
@section('javascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
@section('body')

<section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center; color:#65b5a1">Passeport santé & astuces</h1>
          @foreach ($sante as $item)
          
          <h3 style="font-family: 'Bodoni MT', 'Didot', 'Didot LT STD'; color:#b65e23">{{ $item->Titre }}</h3>
              <p>
            <img src="{{asset($item->Image)}}" class="img">
             @if(strlen($item->Description)<=526)
             <?php
                echo str_replace("\n","</br>", $item->Description);
                ?>
             @else
               {{$item->Description}}
             @endif
            </p>
          @endforeach
        </div>
      </div>
    </div>
</section>
@endsection