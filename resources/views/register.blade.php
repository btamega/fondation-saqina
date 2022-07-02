@extends('layouts.base')

@section('title')
INSCRIPTION
@endsection
@section('stylesheet')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
    .imgcontainer {
  text-align: center;
  margin: 24px 0 80px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}
@media screen and (min-width: 300px) {
  img.avatar{
    width: 20%
  }
  .col-md-auto{
    text-align: center
  }
  .col-sm{
    margin-left: 10px;
    padding-right: 30px;
  }
}

</style>
@endsection
@section('body')
<section style="background: #243b2a" id="portfolio">
<div class="container">
    <div  class="box">
        @if(Session::has('error'))
              <div class="alert alert-danger" role="alert">
                  {{Session::get('error')}}
              </div>
              @elseif(Session::has('emailExist'))
              <div class="alert alert-danger" role="alert">
                {{Session::get('emailExist')}}
            </div>
            @endif
            <form method="POST" action="/inscrire">
                @csrf
                <div class="imgcontainer"> <br>
                    <img src="{{asset('images/Intro.jpeg')}}" alt="Avatar" class="avatar">
                </div>
                <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm">
                        <div class="form-outline mb-4">
                        <input type="text" id="form2Example1" name="name" class="form-control" required/>
                        <label class="form-label" for="form2Example1">Nom et Prenom</label>
                        </div>
                    </div>
                    <div class="col-sm"></div>
            </div>
                <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <div class="form-outline mb-4">
                            <input type="email" id="form2Example1" name="email" class="form-control" required/>
                            <label class="form-label" for="form2Example1">Email address</label>
                            </div>
                        </div>
                        <div class="col-sm"></div>
                </div>
                <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm">
                        <div class="form-outline mb-4">
                        <input type="password" id="form2Example2" name="password" class="form-control" required/>
                        <label class="form-label" for="form2Example2">Password</label>
                        </div>
                    </div>
                    <div class="col-sm"></div>
                </div>
                    
                
                <div class="row justify-content-md-center">
                    <div class="col col-lg-2">
                        <button type="submit" class="btn btn-primary btn-block mb-4">Envoyez</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                </div>           
                </div>
                <div class="text-center">
                <p>Already have an account ? <a href="{{URL::to('login')}}">Login</a></p>
                </div>
            </form> 
    </div>
</div>
</section>
@endsection