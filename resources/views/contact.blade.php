@extends('layouts.base')

@section('title')
CONTACT
@endsection
@section('stylesheet')

@endsection
@section('body')
<br>
<section style="background: #243b2a" id="portfolio">
  <div class="container">
    <div  class="box">
      <div  class="center gap">
        <h1 style="font-family:'Bodoni MT', 'Didot', Didot LT STD; text-align:initial">Contactez-nous</h1>
      </div>
      <div style="background-color:#f3f3f3;" class="box last">
        <div class="row">
          <div class="col-sm-6">
            <div class="status alert alert-success" style="display:none"></div>
            @if(Session::has('message_sent'))
              <div class="alert alert-success" role="alert">
                  {{Session::get('message_sent')}}
              </div>
            @endif
            <form  method="post" action="{{route('contact.send')}}">
              @csrf
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="nom" required="required" placeholder="Nom">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="email" required="required" placeholder="Adresse émail">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
              </div>
            </form>
          </div>
          <div id="adresse" class="col-sm-6">
            <div class="row">
              <div class="col-md-6">
                <address>
                  <strong>Siège social</strong><br>
                  123 Street Name, Suite 50<br>
                  Paris, France 200038<br>
                  <abbr title="Phone">P:</abbr> (336) 6057-03920
                </address>
              </div>
              <div class="col-md-6">
                <address>
                  <strong>Ecole annexe</strong><br>
                  Oussoubidiagna, sortie du village<br>
                  Kayes, Mali<br>
                  <abbr title="Phone">P:</abbr> (223) 456-7890
                </address>
              </div>
            </div>
            <h1>Nous rejoindre sur</h1>
            <div class="row">
              <div class="col-md-6">
                <ul class="social">
                  <li><a target="_blank" href="https://web.facebook.com/FONDATION-SAQINA-106824000793915/">
                    <i class="icon-facebook icon-social"></i> Facebook</a>
                  </li>
                  <li><a target="_blank" href="#">
                    <i class="icon-twitter icon-social"></i> Twitter</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="social">
                  <li><a target="_blank" href="#">
                    <i class="icon-linkedin icon-social"></i> LinkedIN</a>
                  </li>
                  <li><a target="_blank" href="#">
                    <i class="icon-pinterest icon-social"></i> Pinterest</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection