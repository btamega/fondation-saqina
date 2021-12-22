@extends('layouts.base')

@section('title')
PREAMBULE
@endsection
@section('stylesheet')
<style>
     p{
  text-align: justify;
  font-size: 20px;
  font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
     }
     .li{
         text-align: justify;
         font-weight: bold;
         color: #65b5a1;
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
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center">Les différents statuts des actes </h1> <br>
          <p style="padding-inline-start: 20px;">
              Il faut savoir que dans notre adoration, il nous est demandé un certain nombre de rites, comme la prière, le jeune, le pélérinage etc. <br>
              Nous allons nous consacrer au rite de la prière, mais il faut savoir qu'on peut classer les actes de la prière en différents statuts suivant leurs dégrés.
          </p>
          <ol>
              <li class="li"><strong>Les actes fard ou wajib (obligatoires ) :</strong></li><br>
              <div style="text-align: justify">
                <p>
                    Ce sont les actes qui sont cités dans le Saint Coran et ont un statut d'acte obligatoire: <br>
                    Si on néglige un acte obligatoire, le rite n'est pas validé donc à refaire. Nous serons récompesés en le pratiquant et punis en le négligeant.
               </p>
              </div> 
              <li class="li"><strong>Les actes sounnas (prophétiques) :</strong></li><br>
              <div style="text-align: justify">
                <p>
                    Ce sont les actes qui ne sont pas cités dans le Saint Coran mais qui ont été pratiqués par notre prophète Mohammed (ﷺ) <br>
                    Dans ces actes sunnas, on en distingue deux types: 

               </p>
               <ol>
                    <li class="alpha">Les actes sunnas moua'kada (les actes recommandés)</li> 
                    <div style="text-align: justify">
                        <p>
                            Ce sont les actes que le prophète Mohammed (ﷺ) pratiquait régulièrement et qu'il a incité la communauté à pratiquer : on les appellera les actes recommandés. 
                            Si on néglige un acte recommandé, notre adoration est diminuée en valeur mais le rite pratiqué est toujours valide. 
                        </p>
                    </div> 
                    <li class="alpha">Les actes moustahab ou mandoub (méritoires)</li> 
                    <div style="text-align: justify">
                        <p>
                            Ce sont les actes que le Prophète (ﷺ) pratiquait de temps à autres sans qu’il ait incité la communauté à pratiquer :on les appellera actes méritoires 
                            Il faut savoir que la pratique de ces actes méritoire nous apportent des bonus de mérite d'ou leur nom donc si on pratique des actes méritoires, on gagne et si on les néglige, on ne gagne rien et on ne perd rien. 
                        </p>
                    </div> 
                </ol>
              </div> 
              <li class="li"><strong>Les actes makrouh :</strong></li>
              <div style="text-align: justify">
                <p>
                    Ce sont les actes déconseillés, qu’il faut éviter sinon notre rite diminue de valeur. 
                </p>
            </div> 
              <li class="li"><strong>Les actes haram :</strong></li>
              <div style="text-align: justify">
                <p>
                    Interdits qui peuvent annuler notre rite.
                </p>
            </div> 

          </ol>
        </div>
      </div>
    </div>
</section>
@endsection