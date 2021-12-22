@extends('layouts.base')

@section('title')
Fondation SAQINA
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
  @media only screen and (max-width: 100px) {
  img {
    /* width: 70%; */
    width:50%;
  }
}

img{
  width:300px; 
  height:270px;
  padding-left: 20px;
  padding-right: 20px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
@endsection
@section('body')
<body class="u-body"><header class="u-clearfix u-header u-header" id="sec-739e"><div class="u-clearfix u-sheet u-sheet-1"></div></header>
  @foreach($articles as $item)
  <section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
          <div class="row">
            <div class="col-md-4">
              <div style="text-align: justify">
                <img src={{asset($item->Image)}}>
              </div>
            </div>
            <div class="col-md-8">
              <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; color:#65b5a1">{{$item->Titre}}</h1> <br>
              <h6>{{$item->Date_Publication}}</h6>
              <p style="padding-left:20px; text-align:justify">
                <?php
                echo str_replace("\n","</br>", $item->Description);
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
  @foreach($events as $item)
  <section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
          <div class="row">
            <div class="col-md-4">
              <div style="text-align: justify">
                <img src={{asset($item->Image)}}>
              </div>
            </div>
            <div class="col-md-8">
              <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; color:#65b5a1">{{$item->Titre}}</h1> <br>
              <h6>{{$item->Date_Publication}}</h6>
              <p style="padding-left:20px; text-align:justify">
                <?php
                echo str_replace("\n","</br>", $item->Description);
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
</body>
@endsection