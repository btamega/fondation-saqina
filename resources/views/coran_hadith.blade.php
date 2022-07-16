@extends('layouts.base')

@section('title')
CORAN & HADITH
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
</style>
@endsection
@section('body')
<section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div class="center gap">
          @foreach($hadiths as $hadith)
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center; color:#65b5a1">{{$hadith->titre}}</h1> <br>
          <div>{!!$hadith->description!!}</div>
          @endforeach
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center; color:#65b5a1">Hadiths sur les ablutions باَبُ الوُضُوءِ   </h1> <br>
          <ol>
            <li class="li">
              <h3 style="font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';">On rapporte d’Abî Hurayra -رضي اللّه تعال عنه- que le Prophète - صلى اللّه عليه و سلم - avait dit :</h3>
              <p style="color: rgb(226, 97, 97)">« Si je ne voulais pas imposer de la peine à ma communauté, je leur aurais demandé de se
                laver les dents avec le siwâk avant toute prière ». <br>
              </p>
              <p>[Hadîth rapporté par Mâlik, Ahmad et An-Nisâ`î, qualifié d’authentique par Ibn Khuzayma et
            cité par Bukhârî en guise de commentaire].
        </p>
            </li>
            <li class="li">
              <p>
            On rapporte de Humrân, esclave de ‘Uthmân - رضي اللّه تعال عنه - qui disait : ‘Uthmân avait
            demandé qu’on lui apporte de l’eau pour faire ses ablutions. Alors il lava les mains trois fois,
            se rinça la bouche, aspira de l’eau, expira, puis se leva le visage trois fois, puis se lava la main
            droite jusqu’aux coudes trois fois puis la gauche de la même façon, puis il fit passer les mains
            sur la tête, ensuite se lava le pied droit jusqu’aux chevilles trois fois, ensuite le pied gauche de
            la même façon ; ensuite, il dit : j’ai vu le Prophète - صلى اللّه عليه و سلم - faire ses ablutions de la
            même manière que je les ai faites ». <br>
            [Hadîth agréé / Muttafaqun ‘alayhi] 
          </p>
            </li>
            <li class="li">
              <p>A propos de la façon dont le Prophète - صلى اللّه عليه و سلم - faisait ses ablutions, on rapporte
                que ‘Alî - رضي اللّه تعال عنه - disait : « … Et il fit passer la main sur sa tête une fois ». <br>
                [Hadîth rapporté par Abû Dâwud, An-Nisâ`î et At-Tirmidhî dans une bonne chaîne de
                transmission. D’ailleurs, At-Tirmidhî commenta : C’est la chose la plus crédible dans ce
                chapitre]. 
              </p>
            </li>
            <li class="li">
              <p>
                On rapporte de ‘Abdillah ibn Zayd ibn ‘Âsim - رضي اللّه تعال عنه - concernant la façon dont
                on fait les ablutions : « … Et le Prophète - صلى اللّه عليه و سلم - fit passer les mains sur la tête du
                front à la nuque et vice et versa ».
                [Hadîth agréé / Muttafaqun ‘alayhi]
                Dans une autre version, Bukhârî et Muslim rapportèrent : « Le Prophète - صلى اللّه عليه و سلم -commença par le front jusqu’à la nuque puis ramena les mains jusqu’au front ». 
              </p>
            </li>
            <li class="li">
              <p>
                On rapporte de ‘Abdillah ibn ‘Amr (raaha) qui disait à propos de la façon dont le Prophète
                faisait ses ablutions : « Puis il - صلى اللّه عليه و سلم - fit passer les mains sur la tête et il
                introduisit les deux indexes dans ses oreilles en faisant passer les pouces sur les pavillons des
                oreilles ».
                [Hadîth rapporté par Abû Dâwud et An-Nisâ`î et qualifié d’authentique par Ibn Khuzayma]. 
              </p>
            </li>
            <li class="li">
              <p>
                On rapporta d’Abî Hurayra - رضي اللّه تعال عنه - qui disait : le Prophète - صلى اللّه عليه و سلم - avait dit : 
                <span style="color: rgb(226, 97, 97)">« Que celui parmi vous qui se réveille expire trois fois car Chaytân passe la nuit
                  dans ses narines ».</span> <br>
                  [Hadîth agréé / Muttafaqun ‘alayhi] 
              </p>
            </li>
            <li class="li">
              <p>
                On rapporte de Laqît ibn Sabira - رضي اللّه تعال عنه - qui disait : Le Prophète - صلى اللّه عليه و سلم - - avait dit : 
                <span style="color: rgb(226, 97, 97)">: « Fais parfaitement les ablutions, écarte et frotte les doigts, aspire l’eau
                  profondément sauf en cas de jeûne ».</span> <br>
                  [Hadîth rapporté par les quatre et qualifié d’authentique par Ibn Khuzayma]. <br> Dans sa version,
                  Abû Dâwud ajouta :<span style="color: rgb(226, 97, 97)"> « Si tu fais tes ablutions, rince-toi la bouche ».</span> <br>
              </p>
            </li>
          </ol>
          
        
        
        
        </div>
      </div>
    </div>
</section>
@endsection