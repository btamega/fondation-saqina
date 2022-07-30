<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<title>INSTITUT ISLAMIQUE</title>
<link href="{{ asset("css/uncss.css")}}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset("images/favicon.ico")}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset("js/jquery.js")}}"></script>
<script src="{{ asset("js/bootstrap.min.js")}}"></script>
<script src="{{ asset("js/jquery.isotope.min.js")}}"></script>
<script src="{{ asset("js/jquery.prettyPhoto.js")}}"></script>
<script src="{{ asset("js/main.js")}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  .topnav {
    overflow: hidden;
    background-color: #e7e7e7;
  }
  
  .topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 14px;
  }
  
  .topnav a:hover {
    background-color: #65b5a1;
    color: black;
  }
  
  .topnav a.active {
    background-color: #65b5a1;
    color: black;
  }
  
  .topnav .icon {
    display: none;
  }
  
  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
      float: right;
      display: block;
    }
  }
  
  @media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }

  
  </style>

  
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="0">
  <header id="header" role="banner">
    <div class="container">
      <div class="topnav" id="myTopnav">
        <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="{{URL::to('/')}}"><i class="icon-home"></i></a>
        <a class="{{ (request()->is('fondation*')) ? 'active' : '' }}" href="{{URL::to('/fondation')}}">ECOLE SAQINA</a>
        <a class="{{ (request()->is('coran_hadith*')) ? 'active' : '' }}" href="{{URL::to('/coran_hadith')}}">HADITH</a>
        <a class="{{ (request()->is('chahada*')) ? 'active' : '' }}" href="{{URL::to('/chahada')}}">CHAHADA</a>
        <a class="{{ (request()->is('salat*')) ? 'active' : '' }}" href="{{URL::to('/salat')}}">SALAT</a>
        <a class="{{ (request()->is('invocation_evocation*')) ? 'active' : '' }}" href="{{URL::to('/invocation_evocation')}}">INVOCATIONS & EVOCATIONS</a>
        <a class="{{ (request()->is('fatwas*')) ? 'active' : '' }}" href="{{URL::to('/fatwas')}}">FATWAS</a>
        <a class="{{ (request()->is('contact*')) ? 'active' : '' }}" href="{{URL::to('/contact')}}">CONTACT</a>
        @guest
            <a class="{{ (request()->is('login*')) ? 'active' : '' }}" href="{{URL::to('login')}}">LOGIN</a>
        @else
        <a data-toggle="modal" data-target="#logout" href="#">{{ Auth::user()->name }}</a>
        <div style="background: #f2f2f261" class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Déconnexion</h5>
                      <button style="margin-top:-20px" class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    Êtes-vous sûr de vouloir vous déconnecter ?
                  </div>
                  <div class="modal-footer">
                    <button onclick="location.href='/logout'" type="button" class="btn btn-success">Confirmer</button>
                  </div>
              </div>
          </div>
        </div>
        @endguest
        <a  href="#" data-toggle="modal" data-target="#search">RECHERCHER</a>
      </div>
      <div style="background: #f2f2f261" class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Recherche</h5>
                    <button style="margin-top:-20px" class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="/search">
                    @csrf
                    <fieldset>
                      <div class="form-group">
                        <label for="exampleSelect1">Catégorie</label>
                        <select name="categorieToSearch" class="form-control" id="exampleSelect1">
                          <option>Hadith</option>
                          <option>Fatwas</option>
                          <option>Invocation</option>
                          <option>Chahada</option>
                          <option>Autre</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea">Votre recherche</label>
                        <textarea name="textToSearch" class="form-control" id="exampleTextarea" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Rechercher</button>
                    </fieldset>
                  </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </header>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
</body>




