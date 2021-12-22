@extends('layouts.base')

@section('title')
LES HORAIRES DE PRIERES
@endsection
@section('stylesheet')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
         list-style-type:upper-alpha;
     }
     #list{
         list-style-type:disc
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
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center">Les temps des prières</h1> <br>
          <ol>
              <li class="li">
                <h3 style="font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';">Le hadith de base</h3>
                <p>
                    La connaissance des heures des prières est obligatoire comme le nom des prières.
                    La base juridique qui permet de définir les horaires des prières est le hadith suivant :
                    Jâbir Ibn Abdoullâh rapporte qu'une fois Jibrîl vint rencontrer le Prophète (s)et lui dit: "Metstoi
                    debout et accomplis la prière!" Il accomplit ainsi la Salât de Zohr après que le soleil eût
                    décliné du Zénith. Puis il vint à nouveau à l'heure de 'Asr et lui dit: "Mets-toi debout et
                    accomplis la prière!" Il accomplit alors la Salât du 'Asr après que la longueur de l'ombre de
                    chaque chose eût atteint la taille originale (de la chose); puis il vint à l'heure de Maghrib et lui
                    dit: "Mets- toi debout et accomplis la prière!" Il accomplit la Salât de Maghrib lorsque le soleil
                    fut couché. Puis il vint à l'heure de 'Icha et lui dit: "Mets-toi debout et accomplis la prière!" Il
                    accomplit la Salât de 'Icha lorsque la lueur rouge [chafaq] eût disparu. Puis il vint à l'heure de
                    Fajr et dit: "Mets-toi debout et accomplis la prière!" Il accomplit la Salât de Fajr
                    immédiatement après l'apparition de l'aube.
                </p>
                <p>
                    Ensuite Jîbril vint le voir le lendemain à l'heure de Zohr et lui dit: "Mets-toi debout et
                    accomplis la prière!" Il accomplit ainsi la Salât de Zohr après que la longueur de l'ombre de
                    chaque chose eût atteint la taille originale (de la chose). Puis il vint à nouveau à l'heure de
                    'Asr et lui dit: "Mets-toi debout et accomplis la prière!" Il accomplit alors la Salât de 'Asr après que la longueur de l'ombre de chaque chose eût atteint le double de la taille originale (de la
                    chose); puis il vint pour la Salât de Maghrib à la même heure que la veille, sans se dévier de
                    cette heure. Puis il vint pour l'Icha après que la moitié de la nuit ne fût passée. (ou il dit "après
                    le tiers de la nuit ") et il accomplit la Salât de Ichâ. Puis il vint à nouveau lorsque le ciel fut
                    bien clair (avant le lever du soleil) et lui dit: "Mets-toi debout et accomplis la prière!". Il
                    accomplit alors la Salât de Fajr. Puis il dit: "Le moment (pour chaque prière) s'étale entre ces
                    deux heures (limites)". (Ahmad,An-Nasâi, et At-Tirmidhi. Al-Boukhâri écrit que ce Hadîth est le
                    plus authentique en ce qui concerne les heures de prière).
                </p>
              </li>
              <li class="li">
                <h3 style="font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';">Les différentes périodes de ce temps</h3>
                <p>
                    Le temps d’une prière est partagé en 2 parties :
                    <ul>
                        <li id="list">
                            Ouaqte al Ikhtiyar : la période préférentiel, qui est une période où on a le choix de prier
                            n’importe quand durant cette période.
                        </li>
                        <li id="list">
                            Ouaqte dharoura : la période de nécessité, qui est une période au cours de laquelle
                            seuls, les gens qui ont des excuses valables qui ne leur permet pas de prier dans
                            l’immédiat, peuvent y prier avant l’entrée dans la prière suivante
                        </li>
                    </ul>
                </p>
              </li>
              <li class="li">
                <h3 style="font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';">Les permissions du darouri</h3>
                <p>
                    Il s’agit du temps au cours duquel seules les personnes empêchées par les excuses
                    suivantes peuvent se permettre d’y prier.
                    Les excuses valables pour se permettre de prier dans ce temps sont : pour attendre la fin
                    des règles, la fin des écoulements sanguins après l’accouchement, celui qui se converti
                    à l’islam, le fou qui a retrouvé la raison, l’évanoui, celui qui dort, l’oublieux, l’insouciant,
                    celui qui a perdu ses ablutions
                    Par conséquent celui qui n’adhère pas à ces conditions et qui se permet quand même de
                    prier pendant le temps darouri , alors qu’il pouvait prier pendant le temps al ikhtiar est ‘assi
                    (désobéissant).
                    On retient qu’il n’est pas permis de repousser le temps d’al ikhtiyar pour le dharouri
                    sans ces conditions sinon tu as des péchés.
                </p>
              </li>
              <li class="li">
                <h3 style="font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';">Les temps interdit (haram) pour faire les Nafilas (prières surérogatoires)</h3>
                <ul>
                    <li id="list">
                        Lorsque le soleil se lève
                    </li>
                    <li id="list">Lorsque le soleil se couche</li>
                    <li id="list">Entre le temps où l’imam monte sur sa chaire jusqu’à la fin du jamou’a (pas de 2 rakaat quand l’imam fait le discours) pour le vendredi.</li>
                    <li id="list">A La fin du temps al ikhtiyar d’une prière et le début du temps darouri</li>
                    <li id="list">Quand tu sais que tu dois faire la prière fard (obligatoire)</li>
                    <li id="list">Au moment de l’ Iquamati Salat.</li>
                </ul>
              </li>
              <li class="li">
                <h3 style="font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';">Les temps blâmables (makrouh) pour faire les Nafilas (prières surérogatoires)</h3>
                <ul>
                    <li id="list">Entre le moment où le soleil se lève et jusqu’à ce qu’il atteigne 12 coudées (6 mètres environ) cela représente 20 mn après chourouk</li>
                    <li id="list">Entre le asr et le début du coucher du soleil</li>
              </li>
          </ol>
          <h4>Tableau récapitulatif</h4>
          <table class="table table-hover">
            <thead>
              <tr style="background: cornsilk">
                <th scope="col">Type</th>
                <th scope="col">La période de préférence al ikhtiar</th>
                <th scope="col">La période de nécessité daroura (si elle existe)</th>
                <th scope="col">Sa limite</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-active">
                <th scope="row">Sobh</th>
                <td>Depuis l’apparition de l’aube, jusqu’au lever du soleil</td>
                <td>Inexistante</td>
                <td>Le lever du soleil</td>
              </tr>
              <tr>
                <th scope="row">Dohr</th>
                <td>Depuis que le soleil quitte le zénith et que l’ombre de l’objet commence à s’allonger jusqu’au asr</td>
                <td>Inexistante</td>
                <td>Le asr</td>
              </tr>
              <tr class="table-primary">
                <th scope="row">Asr</th>
                <td>A partir du moment où l’ombre de l’objet mesure 2 fois la taille de l’objet</td>
                <td>A partir du moment où le soleil baisse dans l’horizon pour prendre une couleur jaune-orangée</td>
                <td>Le maghreb</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row">Maghreb</th>
                <td>Dès que le soleil se couche et que le disque solaire disparaît de l’horizon (sans qu’il ne fasse nuit)</td>
                <td>Inexistante</td>
                <td>Le icha</td>
              </tr>
              <tr class="table-success">
                <th scope="row">Icha</th>
                <td>Dès que les lueurs rouges disparaissent de l’horizon jusqu’à la fin du 1er tiers de la nuit</td>
                <td>Depuis la fin du 1er tiers de la nuit jusqu’au sobh</td>
                <td>Le sobh</td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>
@endsection