@extends('layouts.base')

@section('title')
HADJ & OMRA
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
         list-style-type:square;
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
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:center; color:#478658">Le Hadj et la Omra </h1> <br>
          <p>
            Le mot hadj signifie dans la langue arabe l’action de se rendre vers un lieu défini. Dans la terminologie juridique, il désigne l’action de se rendre à la Ka`bah, la Maison Sacrée.
          </p>
          <p>La Omra dérive du mot i`timâr qui signifie « visite ». Dans la terminologie juridique, il signifie la visite de la Maison Sacrée.</p>
          <ul>
              <li class="li">Le Hajj (grand pèlerinage) est une obligation pour les Musulmans, énoncée par le Coran et la Sunnah.
                  <ol>
                      <li class="alpha">Dans le Coran, Dieu dit : <span style="color: rgb(210, 66, 30)">« Dieu a prescrit le Pèlerinage à ce Temple pour quiconque a les moyens de s’y rendre. »</span> <br>
                        Cela signifie que le pèlerinage est un devoir qui incombe à tout Musulman et auquel il ne peut se soustraire aussi longtemps qu’il a les moyens de l’accomplir.
                      </li>
                      <li class="alpha">
                        Pour ce qui est de la Sunnah, Ibn `Abbâs rapporte que dans l’un de ses discours, le Prophète (صلى اللّه عليه و سلم) dit :
                        <span style="color: #2593d3">« Ô gens ! Le Pèlerinage vous est prescrit - accomplissez-le ! »</span> <br>
                        <p>
                            Al-Aqra` Ibn Hârith s’enquit alors : « Doit-on l’accomplir chaque année, ô Envoyé de Dieu ! » 
                            <span style="color: #2593d3">« Si je répondais par l’affirmative, dit le Prophète, ce serait une obligation qui dépasserait votre capacité... Le pèlerinage doit être accompli une fois dans votre vie et celui qui l’accomplit plus d’une fois le fait de son plein gré. »</span>
                        </p>
                      </li>
                  </ol>
              </li>
          </ul>
          <p>D’après ce hadith, le pèlerinage est donc un devoir dont on doit s’acquitter une fois dans la vie : le faire plus d’une fois est facultatif. Les savants sont unanimes sur ce verdict. <br>
            On rapporte de Jâbir ibn ‘Abdillah (raaha) qui, décrivant la façon dont le Prophète -صلى اللّه عليه و سلم- faisait le pèlerinage, disait : <span style="color: #db421c">« Commencez par lequel Allah a commencé ».</span> <br>[Hadîth rapporté par An-Nisâ`î avec un impératif. Selon Muslim, la version est par récit].
          </p>

        </div>
      </div>
    </div>
</section>
@endsection