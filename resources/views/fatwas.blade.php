@extends('layouts.base')

@section('title')
FATWAS
@endsection
@section('stylesheet')
<style>
     p{
  text-align: justify;
  font-size: 20px;
  font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
     }
    li{
        color: #757575;
    line-height: 25px;
    direction: ltr;
    list-style: none;
    font-family: inherit;
    font-size: 10px;
    box-sizing: border-box;
    overflow: hidden;
    position: relative;
    transition: all ease-in-out .5s;
    float: left;
    width: 32.333%;
    margin: 0 0 10px 1%;
    background: #65b5a1;
    text-overflow: unset;
    white-space: unset;
    }
    li a{
        color: black;
        font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
        font-size: 19px;
    }
     #a{
        line-height: 25px;
    direction: ltr;
    font-size: 14px;
    white-space: unset;
    box-sizing: border-box;
    outline: 0 none !important;
    margin: 0;
    list-style: none;
    font-family: inherit;
    text-decoration: none;
    color: #fff;
    display: block;
    text-overflow: ellipsis;
    overflow: hidden;
    padding: 50px 6px;
    height: 125px;
    padding-top: 3px;
    text-align: justify;
    }
    ul{
        color: #757575;
    line-height: 25px;
    direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    padding: 0;
    list-style: none;
    font-family: inherit;
    overflow: hidden;
    margin: 0 0 0 -1%;
    font-size: 1.3em;
    }
    .invocation{
        color: #fff;
        font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
        font-size: 23px;
        
        padding-left: 5px;
    }
    @media only screen and (max-width: 768px) {
  li {
    width: 100%;
  }
} 
#a{
      font-size: 20px;
    line-height: 25px;
    direction: ltr;
    box-sizing: border-box;
    outline: 0 none !important;
    padding: 0;
    margin: 0;
    list-style: none;
    font-family: inherit;
    text-decoration: none;
    color: #002d6a;
    }
</style>
@endsection
@section('body')
    
<section style="background: #243b2a" id="portfolio">
    <div class="container">
      <div class="box">
        <div style="padding-top: 50px;" class="center gap" dir="rtl">
          <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:initial; font-size:32px"> بسم الله والحمد لله والصلاة والسلام على رسول الله وعلي آله وأصحابه ومن تبعهم بإحسان إلى يوم الدين</h1>
          {{-- <p>En Islam, on peut faire une invocation pour énormément de situations. A chaque fois que l’on a besoin d’aide, on demande à Allah de nous assister.</p> --}}
        </div>
          <p>
            Au sens étymologique :

            C’est une réponse à une question. <br> Le sens de linguistique tourne autour de : explication des choses et l’élucidation de la vérité des choses de manière à dissiper toute ambiguïté. <br>
            
            Au sens terminologique :
            
            La fatwa est « le fait d’informer du statut juridique d’une manière non coercitive » <br> Il existe deux sortes de fatwa :<a id="a"  href="/fatwas-apropos">Voir plus</a> <p></p>
          </p>
        <div style="text-align: justify; margin-right:0">
            <ul>
                <li>
                    <div>
                        <strong><a style="text-decoration: none;" class="invocation" href="#"> <i class="fa fa-folder-open-o"></i> Le Saint Coran</a></strong>
                    </div>
                    <div>
                        <strong>&nbsp;</strong>
                    </div>
                    <div>
                        <a style="text-decoration: none;" href="{{URL::to("/fatwas/preambule")}}">Préambule</a>
                    </div>
                    <div>
                        <a style="text-decoration: none;" href="{{URL::to('/fatwas/#')}}">Autres sujets en rapport avec le Coran</a>
                    </div>
                    
                </li>
                <li>
                    <div>
                        <strong><a style="text-decoration: none;" class="invocation" href="#"> <i class="fa fa-folder-open-o"></i> Le Noble Hadith</a></strong>
                    </div>
                    <div>
                        <strong>&nbsp;</strong>
                    </div>
                    <div>
                        <a style="text-decoration: none;" href="{{URL::to('/fatwas/sahih-bukhari')}}">Sahih Bukhari</a>
                    </div>
                    <div>
                        <a style="text-decoration: none;" href="{{URL::to('/fatwas/40-hadiths-nawawi')}}">40 Hadiths An-Nawawi</a>
                    </div>
                </li>
                <li style="text-align: left">
                    <div>
                        <strong><a style="text-decoration: none; " class="invocation" href="#"> <i class="fa fa-folder-open-o"></i> Biographie, Histoire et personnalités</a></strong>
                    </div>
                    <div>
                        <strong>&nbsp;</strong>
                    </div>
                    <div>
                        <a style="text-decoration: none;" href="/fatwas/personnalites">Personnalités</a>
                    </div>
                </li>
                <li>
                    <div>
                        <strong><a style="text-decoration: none;" class="invocation" href="#"> <i class="fa fa-folder-open-o"></i> Daâwa (Appel à l’Islam)</a></strong>
                    </div>
                    <div>
                        <strong>&nbsp;</strong>
                    </div>
                    <div>
                        <a style="text-decoration: none;" href="/fatwas/#">Verdict et mérite de la Daâwa</a>
                    </div>
                </li>
                <li>
                    <div>
                        <strong><a style="text-decoration: none;" class="invocation" href="#"> <i class="fa fa-folder-open-o"></i> Fikh des Transactions</a></strong>
                    </div>
                    <div>
                        <strong>&nbsp;</strong>
                    </div>
                    <div>
                        <a style="text-decoration: none;" href="/fatwas/#">Le Riba</a>
                    </div>
                </li>
                <li>
                    <div style="text-align: initial">
                        <strong><a style="text-decoration: none;" class="invocation" href="#"> <i class="fa fa-folder-open-o"></i> Fikh des 'Ibadates (Actes de culte)</a></strong>
                    </div>
                    <div>
                        <strong>&nbsp;</strong>
                    </div>
                    <div>
                        <a style="text-decoration: none;" href="/fatwas/hadj-omra">Hadj et Omra</a>
                    </div>
                </li>
                <li>
                    <div>
                        <strong><a style="text-decoration: none;" class="invocation" href="#"> <i class="fa fa-folder-open-o"></i> Sujets divers</a></strong>
                    </div>
                    <div>
                        <strong>&nbsp;</strong>
                    </div>
                    <div>
                        <a style="text-decoration: none;" href="/fatwas/#">Autres</a>
                    </div>
                </li>
            </ul>
           

            
        </div>
    </div>
    </div>
    </div>
</section>
@endsection