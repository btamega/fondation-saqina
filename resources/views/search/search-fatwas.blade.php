@extends('layouts.base')

@section('title')
{{$word}}
@endsection
@section('stylesheet')
<link rel="stylesheet" href="css/menuItem.css">
<link rel="stylesheet" href="{{asset("css/nicepage.css")}}" media="screen">
<link rel="stylesheet" href="{{asset("css/Page-1.css")}}" media="screen">
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
@endsection
@section('body')
<body  class="u-body u-overlap">
    <section style="background: #243b2a"  class="u-clearfix u-grey-10 u-section-1 " id="carousel_283c">
      <div class="u-clearfix u-sheet u-sheet-1 ">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div  class="u-layout">
            <div class="u-container-style u-layout-cell u-size-30 u-white">
              <div style="background-color: #e5e5e5" class="u-container-layout u-valign-top">
                @foreach($fatwasResult as $fatwa)
                    <h6 style="text-align: center" class="u-custom-font u-text u-text-font u-text-palette-3-base u-text-1">{{$fatwa->Titre}}</h6>
                    <blockquote style="border-left: 5px solid #478ac9" class="u-align-justify u-text u-text-2"> 
                    <div>{!!$fatwa->Description!!}</div>
                    </blockquote>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
@endsection