@extends('layouts.base')

@section('title')
REPARATION DE LA PRIERE
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
         /* font-weight: bold; */
     }
    
</style>
@endsection
@section('body')
<section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center">Soujoud Sahou (la prosternation de l’oubli)</h1> <br>
          <p>
            En ce qui concerne ce sujet, les savants disent que dans le cas où on aurait fait une
            erreur ou un oubli dans notre prière, il vaut mieux corriger cette prière que de la refaire une
            autre fois. Le prophète (s) a dit : « une prière effectuée dans une journée, ne se refait pas ».
            C’est la raison pour laquelle, il est très important de savoir comment corriger sa prière en cas
            d’oubli ou d’erreur.
          </p>
          <ol>
              <li class="li">Les types d’oublis qui peuvent survenir pendant la prière:
                  <ul>
                      <li><u>1er type d’oubli : lorsque l’oubli concerne un acte obligatoire de la prière (fard)</u>
                          <p>
                            Cela peut par exemple être une inclinaison, une prosternation, etc…
                            Dans le cas d’un oubli concernant un acte obligatoire, la prière ne peut se
                            corriger qu’en refaisant l’acte obligatoire que nous venons d’oublier. Si la personne continue à faire sa prière alors qu’elle sait pertinemment qu’elle vient d’oublier un acte
                            obligatoire, sa prière devienne NULLE, INVALIDE, d’où l’importance de la corriger.
                            Prenons un exemple : une personne est en train de faire la prière. Elle se trouve dans la
                            première génuflexion (ra’kaa). Elle termine la Fatiha puis la seconde sourate et au lieu de
                            faire l’inclinaison, par distraction, elle fait directement la prosternation. Puis, pendant sa
                            prosternation, elle se rend compte de son erreur à savoir qu’elle vient d’oublier son
                            inclinaison. Cette personne est donc dans l’obligation de revenir dans la station debout et de
                            faire l’inclinaison qu’elle a omise de faire. Ensuite elle continue la prière normalement. Au
                            final, elle aura donc fait un acte en plus (une prosternation supplémentaire). Pour se faire
                            pardonner de cet oubli, cette personne devra donc faire après le salam final, deux
                            prosternations de l’oubli.
                            Nous verrons par la suite, à quoi correspondent en détail ces prosternations.
                          </p>
                      </li>
                      <li><u>2ème type d’oubli : l’oubli d’un acte méritoire (moustahab)</u>
                        <p>
                            Si on oubli un acte méritoire dans la prière, il n’est pas nécessaire de faire les prosternations
                            d’oubli. Que ce soit pour un oubli ou un rajout d’un acte méritoire, la prière ne nécessite pas
                            de correction.
                            Mais si, par le fait d’un oubli ou du rajout d’un acte méritoire, la personne fait
                            quand même des prosternations d’oubli après le salem, sa prière est annulée et il sera
                            dans l’obligation de la refaire.
                            C’est pour cela, qu’il est important pour tout musulman de connaître quels sont les actes
                            obligatoires, méritoires et sounnas de la prière afin de ne pas se retrouver face à cette
                            difficulté.
                        </p>
                      </li>
                  </ul>

              </li>
          </ol>
        </div>
      </div>
    </div>
</section>
@endsection
