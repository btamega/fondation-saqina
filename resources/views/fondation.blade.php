@extends('layouts.base')
@section('title')
Ecole SAQINA
@endsection
@section('stylesheet')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  .flotte {
float:left;
}
p{
  text-align: justify;
  font-size: 20px;
  font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
}
#strong{
  font-size: 17px
}
.img {
  float: left;
}
.zoom:hover {
  -ms-transform: scale(1.5);
  -webkit-transform: scale(1.5); 
  transform: scale(1.5); 
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
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:initial">FONDATION SAQINA HISTORIQUE</h1>
          <p>
            <img src="{{asset('images\Intro.jpeg')}}" class="img" style="width:170px;height:170px;">
            <strong id="strong">INTRODUCTION GENERALE: </strong>l'idée de la fondation SAQINA est née de la volonté des jeunes de la diaspora à venir en aide à des enfants apprenants dans des conditions précaires en zones rurales au Mali. 

          </p>
          <p>
            A l'issu d'une enquête de terrain, nos équipes ont réalisé que certaines contrées sont e proie du danger de l'analphabétisme en générale et d'une forte carence à l'éducation musulmane en particulier.
          </p>
          <P>
            C'est fort de ce constat alarmant que nous nous sommes réunis en ce 14 octobre 2019 pour dégager une vision d'ensemble en vue d'offrir à cette jeune génération, la chance à accéder à des conditions idoines.
          </P>
          <P>
            L'urgence de cette initiative découle du fait que près de 400 élèves étudient dans des classes construites en paille irrésistible aux aléas climatiques exposant ainsi les enfants aux accidents pouvant leur contrer la vie.
          </P>
          <p>
            Les salles de classes sont majoritairement faites en paillote sous forme de tente mais aussi et surtout des rochers qui sont utilisés pour servir de tables-bancs. A l'issue de ce constat effectué par de nombreux témoins locaux, nous nous sommes réunis pour décider comme un seul homme en vue d'ériger de véritables établissements conformes aux normes requises par l'enseignement moderne et contemporain.
          </p>
          <P>
            Pour un départ, notre équipe a d'abord jugé nécessaire d'équiper chaque salle de classe (même en paille) des tables-bancs pour avoir une première commodité, puis après nous avons adopté l'achat régulier de nombreuses fournitures scolaires du nombre desquels figurent des stylos, des crayons, des règles, des gommes, des craies et des crayons de couleurs etc...
          </P>
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:initial; font-size:30px;">PROGRAMME D'ETABLISSEMENT SCOLAIRE (SOUBASSEMENT)</h1>
          <p>
            Dans la construction de ce joyau, nous nous sommes d'abord fixés l'objectif de faire des classes simples en tôles, avant de changer la décision par la suite à faire des classes en béton pour plus de résistance mais aussi et surtout pour faire des étages à moindre coût.
          </p> 
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:initial; font-size:30px;">FINANCEMENT ET SUIVI DES TRAVAUX DE CONSTRUCTION</h1>
          <p>
            Le projet est entièrement financé par des bénévoles qui ont vite compris l'urgence du moment. A l'issu de notre première réunion, nous avons opté pour les montants de 20 €,30 €,40 € voire 50 € par bénévole. Mais la majorité a opté pour les 50€. Ce montant est cotisé par l'ensemble des bénévoles à l'issu de chaque réunion.
          </p>
          <p>
            <img src="{{asset('images\chantier\IMG-20210624-WA0010.jpg')}}" class="img" style="width:170px;height:170px;"> Pour exécuter les travaux, un devis est évalué par l'entrepreneur désigné en la circonstance. A chaque fois que nous sommes en possession du montant nécessaire pour un dévis, l'assemblée générale des bénévoles de la fondation se prononce sur la validation du financement du dit dévis.
            Une fois le maériel acheté et expédié par l'équipe locale, les travaux se poursuivent au fur et à mesure. Des ouvriers sont choisis et payés au niveau local.
          </p>
          <p>
            Certaines bonnes volontés ayant mesuré la valeur de notre aventure se sont personnellement désignées pour nous accompagner dans notre projet. Du nombre de ces catégories de bénévoles figure <strong>Mahamed Sissoko</strong> (un jeune du village de Oussoubidiagna). Ce dernier a épuisé beaucoup de difficulté pour que notre projet puisse aboutir en nous offrant l'intégralité de ses emplois du temps journaliers sans relâche.
          </p>

        </div> <br>
          <p style="font-size: 20px" class="lead"><a href="https://web.facebook.com/FONDATION-SAQINA-106824000793915/">Rejoignez-nous</a>, nous croyons au pouvoir de l'éducation et à sa capacité à éveiller les consciences.</p>
          <div style="text-align: center">
            @foreach ($photos as $item)
            <figure class="figure zoom" style="text-align: center">
              <a target="_blank" href="{{asset($item->URL_Image)}}"><img style="height: 250px" src="{{asset($item->URL_Image)}}" class="figure-img img-fluid rounded" width="240" height="145"></a>
              <figcaption class="figure-caption">{{$item->Description}}</figcaption>
            </figure>
            @endforeach
            @foreach ($videos as $item)
            <figure class="figure" style="text-align: center">
              <video width="400" controls style="height:172px; width: 236px;">
                <source style="height: 250px" src={{asset($item->URL_Image)}} type="video/mp4" class="figure-img img-fluid rounded" width="240" height="145">
                <source src="mov_bbb.ogg" type="video/ogg">Your browser does not support HTML video.                   
              </video>
              <figcaption class="figure-caption">{{$item->Description}}</figcaption>
            </figure>
            @endforeach
        </div>
      </div>
    </div>
</section>
@endsection