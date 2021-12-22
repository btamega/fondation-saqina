@extends('layouts.base')

@section('title')
APPEL A LA PRIERE
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
         font-size: 20px;
         font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
     }
     .alpha{
         list-style-type: lower-alpha;
         font-size: 20px;
         font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
         /* font-weight: bold; */
     }
     #list{
         list-style-type:disc;
     }
</style>
@endsection
@section('body')
<section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center">L’appel à la prière (Adan et Iqama ) </h1> <br>
          <p>
            En se qui concerne l'Adan, l'appel à la prière, sa définition juridique est : l'annonce du début
            de l'entrée du temps de la prière.
            La base juridique de l'Adan est dans le Saint Coran, dans sourate Jouma'a (Vendredi) Verset
            9, et dans de nombreux hadiths du Prophète (S.A.W.).
          </p>
          <ol>
              <li class="li">
                Les différents statuts de l'Adan
                <ol>
                    <li class="alpha">
                       <u> L'Adan est recommandé (sunna moua’kada)</u>, dès qu'il y a une assemblée de fidèles qui se réunit dans une mosquée ou ailleurs.
                    </li>
                    <li class="alpha">
                        <u>L'Adan est méritoire (Moustahab)</u> lorsque le fidèle fait la prière tout seul et aussi pour le voyageur.
                    </li>
                    <li class="alpha">
                        <u>L'Adan est déconseillé (Makroukh) pour:</u>
                        <ol>
                            <li id="list">
                                une personne qui voudrait faire une prière dont le temps est déjà passé,
                            </li>
                            <li id="list">
                                une prière surérogatoire (nafila),
                            </li>
                            <li id="list">
                                la prière mortuaire (salât Al-Janaza)
                            </li>
                        </ol>
                    </li>
                    <li class="alpha">
                        <u>L'Adan est interdit (haram) :</u> 
                        <ul>
                            <li id="list">
                                pour la femme qui voudrait le faire
                            </li>
                            <li id="list">
                                avant le début du temps de la prière ,sauf pour salât soubh*
                            </li>
                            
                        </ul>
                        <p>
                            *Pour salât soubh, il y a des conditions. Il est recommandé de faire l'Adan de la prière de
                            soubh dans le dernier 6ème de la nuit. Et ensuite il est recommandé de faire un second Adan,
                            quand le temps de salât soubh a commencé.
                        </p>
                    </li>
                </ol>
              </li>
              <li class="li">
                Le contenu de l'adan : 
                <p>L'adan se fait de cette manière:</p>
                <ol>
                    <li>Allahu Akbar : Allah est Grand (quatre fois).</li>
                    <li>Ashhadu a La ilaha illallah :J'atteste qu'il n'y a de Dieu qu'Allah (deux fois).</li>
                    <li>Ashhadu-ana Muhammada Rassullullah : J'atteste que Muhammad est le Messager d'Allah(deux fois).</li>
                    <li>En se tournant vers la droite : Hayy ‘Ala Salâh : Venez pour la prière (deux fois).</li>
                    <li>En se tournant vers la gauche : Hayy ‘Alal Falah : Venez vers le succès (deux fois).</li>
                    <li>Allahu Akbar (deux fois).</li>
                    <li>La ilaha illallah (une seule fois)</li>
                </ol>
                <p>Une phrase est à ajouter après le numéro (5) à l'appel à la prière du matin:
                    "A Salatu Khaïrun minan naom" : (la prière est meilleure que le sommeil)(deux fois).</p>
              </li>
              <li class="li">
                Les qualités requise du muezzin : <br>
                <h4>Le muezzin est celui qui annonce la prière.</h4>
                <ol>
                    <li>
                        <u>Les conditions pour être Muezzin sont :</u> <br>
                        <ul>
                            <li id="list">être un Musulman</li>
                            <li id="list">être doué de raison (al-'aqal)</li>
                            <li id="list">être un homme (az-zoukoura)</li>
                            <li id="list">être pubère (al-boulough)</li>
                            <li id="list">avoir connaissance des horaires de prière</li>
                        </ul>
                    </li>
                     <li>
                <u>Adab al-adan</u> c’est la manière de faire l’adan d’un point de vue pratique
                <ul>
                    <li id="list">il faut que l'adan se fasse dans un endroit surélevé</li>
                    <li id="list">que le muezzin soit debout</li>
                    <li id="list">qu'il soit ablutionné</li>
                    <li id="list">tourné face à la qibla</li>
                    <li id="list">prononce l'adan dans un langage claire en respectant les règles de prononciation des lettres arabes</li>
                    <li id="list">il est méritoire de mettre ses doigts dans ses oreilles</li>
                    <li id="list">il doit séparer chaque phrase par une pause alors que l’iqama se fait sans pause</li>
                </ul>
              </li>
              <li >Son temps :
                  <p>
                    L’adahan se fait seulement au début de l’heure de la prière : il ne se fait pas au milieu, ni à la
                    fin.
                    Il n’ y que pour la prière du sobh qu’il est possible de faire un 1èr adhan avant l’heure pour
                    informer les gens de la fin de l’heure du sahour pour ceux qui font le jeûne.
                  </p>
              </li>
              </ol>
              <li class="li">
                Ce qu'il faut dire quand on entend l'Adan.
                <ol>
                    <li>Il suffit de répéter l'Adan que dit le Muezzin sauf quand on entend,
                        <p>Hayy ‘Ala Salâh : Venez pour la prière <br>
                            Hayy ‘Alal Falah : Venez vers le succès <br>
                            On dit : La hawla wala kouwata illa billah (il n’y a de force et de puissance qu’en Allah)
                        </p>
                    </li>
                    <li>Ensuite, à la fin de l'Adan ont fait les salutations sur notre Prophète (صلى اللّه عليه و سلم)</li>
                    <li>On demande à Allah qu'il nous permet que son Prophète (صلى اللّه عليه و سلم) nous fasse intercession, c'est
                        ce qui est cité dans la do'a qui est connu après l'Adan.
                    </li>
                    <li>On fait les do'a (invocations) que l'on veut, puisque Inchallah les do'a sont acceptées entre
                        l'Adan et l'Iqama.
                    </li>
                    <li>Ecouter l’adhan durant sa récitation est un devoir pour tous, même pour ceux qui lisent le
                        Coran, qui font un discours, qui entrent à la mosquée avant de faire le tahyatal masjid.
                    </li>
                </ol>
              </li>
              <li class="li">L'Iqama
                  <P>L'Iqama a un statut de sunna très fortement recommandée (mouakada),</P>
                  <ul>
                      <li id="list">pour les prières obligatoires faites à l'heure</li>
                      <li id="list">pour les prières obligatoires dont l'heure est dépassée</li>
                      <li id="list">pour la personne qui prie individuellement</li>
                      <li id="list">pour les personnes qui prient en groupe</li>
                      <li id="list">ceci, aussi bien pour les hommes que pour les femmes</li>
                      <li id="list">La sunna nous recommande que si l'iqama n'est pas suivi immédiatement par la prière, alors
                        l'iqama est annulé et il faut alors le refaire.
                      </li>
                      <li id="list">Pour la femme qui fait l'Iqama, si elle prie seule, elle le fait à voix basse et si elle prie avec
                        son mari, c'est lui qui fait l'Iqama pour les deux.
                      </li>
                  </ul>
              </li>
              </li>
              <li class="li">
                  Le contenu de l'Iqama
                  <ol>
                      <li>Allahu Akbar : Allah est Grand (deux fois).</li>
                      <li>Ashhadu a La ilaha illallah. J'atteste qu'il n'y a de Dieu qu'Allah (une seule fois).</li>
                      <li>Ashhadu-ana Muhammada Rassullullah : J'atteste que Muhammad est le Messager
                        d'Allah (une seule fois).
                      </li>
                      <li>Hayy ‘Ala Salâ :Venez pour la prière (une fois).</li>
                      <li>Hayy ‘Alal Falah : Venez vers le succès (une fois).</li>
                      <li>Qad qamati Salâ(une fois).</li>
                      <li>Allahu Akbar (deux fois).</li>
                      <li>La ilaha illallah (une seule fois)</li>
                  </ol>
              </li>
          </ol>
        </div>
      </div>
    </div>
</section>
@endsection