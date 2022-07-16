@extends('layouts.base')

@section('title')
CHAHADA
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
              @foreach($chahadas as $chahada)
                <h6 style="text-align: center" class="u-custom-font u-text u-text-font u-text-palette-3-base u-text-1">{{$chahada->titre}}</h6>
                <blockquote style="border-left: 5px solid #478ac9" class="u-align-justify u-text u-text-2"> 
                  <div>{!!$chahada->description!!}</div>
                </blockquote>
              @endforeach
            </div>
          </div>
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-30 u-white u-layout-cell-1">
              <div style="background-color: #e5e5e5" class="u-container-layout u-valign-top u-container-layout-1">
                <h6 class="u-align-justify u-custom-font u-text u-text-font u-text-palette-3-base u-text-1">Croire en Dieu Tout-Puissant</h6>
                <blockquote style="border-left: 5px solid #478ac9" class="u-align-justify u-text u-text-2"> 
                  Cela revient à croire fermement que Dieu Tout-Puissant est le Seigneur, le Possesseur et le Créateur de toute chose, que Lui Seul mérite qu'on lui voue un culte exclusif - prière, jeûne, invocation, espoir, crainte, humilité et soumission - qu'il possède tous les attributs de la perfection, et qu'il est au-dessus de toute Insuffisance.
                  <p>Croire en Dieu c'est confirmer 
                    <span style="color: rgb(255, 102, 0)">3 catégories d'unicité (Tawhid) : <br>
                    - L'unicité dans la Seigneurie</span> [Rubûbiyya], <br>
                    <span style="color: rgb(255, 102, 0)"> - L'unicité de la Divinité</span> [Ulûhiyya], <br>
                    <span style="color: rgb(255, 102, 0)"> - L'unicité des Noms et Attributs</span> [Asmâ wa Sifat].
                  </p>
                  Aussi, le serviteur ne peut se prétendre croyant que s'il a la conviction que Dieu est le Seigneur de toute chose et qu'il n'est nul Seigneur en dehors de Lui, qu'il est le Dieu de tous les êtres et qu'il n'est de dieu sinon Lui, et que Lui Seul possède des attributs et des noms parfaits.
                </blockquote> <br>
                <h6 class="u-align-justify u-custom-font u-text u-text-font u-text-palette-3-base u-text-1">Unicité des Noms et Attributs divins</h6>
                <blockquote style="border-left: 5px solid #478ac9" class="u-align-justify u-text u-text-2"> 
                  Globalement, cela revient à croire fermement que Dieu Tout-Puissant possède tous les attributs de la perfection, qu'il est exempt de toute insuffisance et qu'il est Unique, rien ne Lui étant égal. Cela se traduit par la confirmation des Noms et des attributs que Dieu S'est donné - dans le Coran - ou que Son Messager Lui a conféré - dans la Tradition - sans les déformer [Tahrîf], les nier [Ta'tîl] ou s'interroger sur leur comment [Takyîf] sans anthropomorphisme [Tachbîh].
                  Il est évident, à partir de cette définition, que l'unicité des Noms et des Attributs repose sur trois bases. Celui qui se départ de l'une d'elles n'est pas de ceux qui reconnaissent l'unicité de leur Seigneur dans Ses noms et Ses attributs [Muwahhid]. <br>
                  <span style="color: seagreen">La première :</span>Dieu - le Très-Haut - ne ressemble pas à Ses créatures et est exempt de toute insuffisance. 
                  <span style="color: rgb(255, 102, 0)">« Rien ne Lui ressemble »</span>(Coran 42, 11)
                  <span style="color: rgb(255, 102, 0)">« Nul ne saurait L'égaler »</span>(Coran 112.4)
                  <span style="color: rgb(255, 102, 0)">« Ne donnez pas à Dieu des égaux. »</span>(Coran 16.74) <br>
                  <span style="color: seagreen">La seconde :</span>Ajouter foi aux Noms et aux Attributs tels qu'ils ont été établis par le Livre et la Tradition [Sunna], sans en éliminer une partie ou leur ajouter ce qui n'en relève pas et sans les déformer ou les nier.

                  Dieu Tout-Puissant ne peut donc être connu qu'à travers Sa propre description ou celle de Son Envoyé. Dieu dit :
                  <span style="color: rgb(255, 102, 0)">« Est-ce Dieu ou vous qui savez le mieux ? »</span>(Coran 2, 140) <br>
                  <span style="color: seagreen">La troisième :</span>Renoncer à vouloir saisir le comment des attributs divins et ne pas chercher à percer leur essence.

                  C'est que la connaissance du comment de l'attribut est tributaire de celle du comment de l'essence, les qualités [Sifa] différant selon les personnes décrites. Il ne convient donc pas de s'interroger sur le comment de l'Essence et des Noms de Dieu Tout-Puissant.
                </blockquote>
                {{-- <img class="u-image u-image-default u-image-1" src="{{asset("images\Intro.jpeg")}}" alt="" data-image-width="562" data-image-height="750">  --}}
              </div>
            </div>
            <div  class="u-container-style u-layout-cell u-size-30 u-white u-layout-cell-2">
              <div style="background-color: #e5e5e5" class="u-container-layout u-valign-bottom u-container-layout-2">
                {{-- @foreach($chahadas as $chahada)
                  <h6 class="u-align-justify u-custom-font u-text u-text-font u-text-palette-3-base u-text-1">{{$chahada->titre}}</h6>
                  <div>{!!$chahada->description!!}</div>
                @endforeach --}}
                <h6 class="u-align-left u-custom-font u-text u-text-font u-text-palette-3-base u-text-3">L'Unicité de la Divinité</h6>
                 <p class="u-align-justify u-custom-font u-font-montserrat u-text u-text-4" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"> L’Unicité de la Divinité signifie que les serviteurs doivent consacrer leurs oeuvres d'adoration exclusivement pour Allah : invocations, voeux, immolations, l’espérance, la crainte, la confiance, le repentir...
                  La révélation des Livres Saints et la mission de tous les Messagers ont eu pour finalité de rappeler aux gens cette catégorie d'unicité, laquelle a constitué le fondement et l'essence de la prédication de tous les Messagers. Dieu Tout-Puissant dit :
                  <span style="font-style: italic; color:rgb(255, 102, 0)">Dis : « Il m’a été ordonné d’adorer Allah en lui vouant exclusivement le culte. »</span> (Coran, 39.11)
                </p>
                {{-- <img class="u-image u-image-default u-image-2" src="{{asset("images\Intro.jpeg")}}" alt="" data-image-width="810" data-image-height="1080"> --}}
                <h6 class="u-align-left u-custom-font u-text u-text-font u-text-palette-3-base u-text-3">L'Unicité de la seigneurie</h6>
                <p class="u-align-justify u-custom-font u-font-montserrat u-text u-text-4" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down"> 
                  Globalement, cela signifie qu'il faut croire fermement que Dieu est le Seigneur de toute chose et qu'il n'existe pas un autre seigneur en dehors de Lui. Par « Seigneurie de Dieu », il faut entendre qu'Il est le Seul créateur, l'Unique souverain et Celui qui gouverne les affaires de Ses créatures.
                  Confirmer l'unicité seigneuriale de Dieu c'est attester qu'il est le Créateur, le Roi, Celui qui donne la vie et Celui qui la reprend, le Seul à être Profitable (Nafi') et Dommageable [Dârr], Celui qui exauce le voeu du nécessiteux quand il L'implore, Celui qui détient sur Ses créatures un Pouvoir déterminant, Celui qui donne (Mu'ti) et qui interdit [Mani'] ; et de Lui relèvent la création et l'ordre :<span style="font-style: italic; color:rgb(255, 102, 0)">« N'est-ce pas Lui qui crée et qui ordonne ? Béni soit le Seigneur des univers. »</span>(Coran 7.54 )
              </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #b3b3b3 !important
}</style>
</body>
<br>
@endsection
