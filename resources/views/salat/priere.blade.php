@extends('layouts.base')

@section('title')
LA PRIERE
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
         list-style-type: upper-alpha;
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
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center">Les conditions de la prière:</h1> <br>
          <ol>
              <li class="li">Les conditions à réunir pour accomplir la salât :
                  <ol>
                      <li>
                        Etre pubère, c’est-à-dire que la prière n’est pas obligatoire pour un enfant. On leur
                        demande de pratiquer à partir de 7 ans, on leur impose à partir de 10 ans.
                      </li>
                      <li>
                        Etre doté de raison, c’est-à-dire que pour les fous, la prière n’est pas obligatoire, même s’il
                        venait à prier sa prière ne serait pas acceptée.
                      </li>
                      <li>Que la prière soit entrée dans son temps</li>
                      <li>Chez la femme, respecter l’absence d’écoulement sanguin, lors de menstruations ou de
                        locchies.
                      </li>
                      <li>
                        La présence d’eau pour faire les ablutions, ou à la rigueur la présence de sa‘id, de pierre ou
                        autres pour faire le tayyamum, s’il n’y a pas d’eau.
                      </li>
                  </ol>
              </li>
              <li class="li">
                Conditions préalables à respecter pour l’accomplissement de la prière:
                <ol>
                    <li>Etre musulman.</li>
                    <li>S’être purifié des deux impuretés:
                      <ul>
                        <li>La souillure majeure levée par les grandes ablutions (Ghossal)</li>
                        <li>et la souillure mineure levée par les petites ablutions (Woudou).</li>
                      </ul>
                    </li>
                    <li>La purification du corps, des vêtements et des lieux dans lesquels on prie.</li>
                    <li>Etre entré dans le temps de la prière.</li>
                    <li>Etre dirigé vers la qibla (la Ka‘aba)
                      <ul>
                        <li>Dans un premier temps, il est demandé au croyant de trouver la qibla en se basant sur la
                          direction du mihrab (niche) de la mosquée, une boussole ou le soleil.</li>
                          <li>S’il ne peut pas, qu’il demande alors aux gens</li>
                          <li>S’il ne peut pas, à ce moment là, il fait l’ijtihad, l’effort de supposer une qibla et il
                            commence sa prière. Si par la suite, il se rend compte qu’il s’était trompé, sa prière est
                            valable et il n’a pas à la refaire, parce qu‘il a fait l‘effort de trouver la qibla .</li>
                            <li>
                              Mais il y a celui qui ne fait pas l’effort pour trouver sa direction, et qui accomplit sa prière
                              et qui se rend compte par la suite qu‘il s‘est trompé de direction alors dans ce cas seulement,
                              il doit absolument refaire sa prière, sinon elle n‘est pas acceptée.
                              Quand on parle d’erreur de direction de qibla, c’est: 
                              <ul>
                                <li>soit tourner le dos à la qibla</li>
                                <li>soit être en angle droit par rapport à la qibla.</li>
                              </ul>
                            </li>
                      </ul>
                      <p>Le respect de la direction de la qibla est une condition à respecter pour les prières
                        obligatoires mais pas pour les prières surérogatoires.
                        Dans un cas extrème où le fidèle ne peut vraiment pas respecter la direction de la qibla,
                        comme celui qui serait passager en avion, alors il lui est permis de prier une prière obligatoire
                        dans le sens du déplacement de son véhicule.</p>
                    </li>
                    <li>Cacher sa nudité,<br>On distingue :
                      <ul>
                        <li>la nudité profonde : si cette partie du corps se découvre pendant la prière alors la
                          salat est invalide et à refaire.</li>
                          <li>la nudité superficielle : si cette partie du corps se découvre pendant la prière alors la
                            salate est valide mais diminuée en valeur.</li>
                      </ul>
                      Cette condition diffère entre l’homme et la femme :
                      <ul>
                        <li>Pour les hommes :
                          <ul>
                            <li>la nudité profonde correspond aux parties intimes</li>
                            <li>la nudité superficielle correspond à la partie du corps comprise du nombril aux
                              genoux.</li>
                          </ul>
                        </li>
                        <li>Pour les femmes :
                          <ul>
                            <li>la nudité profonde correspond à la partie du corps comprise du nombril aux genoux</li>
                            <li>la nudité superficielle correspond à tout le corps sauf le visage et les mains (donc les
                              pieds aussi sont à cacher par une robe ou des chaussettes)</li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                </ol>
              </li>
          </ol>
        </div>
      </div>
    </div>
</section>
@endsection