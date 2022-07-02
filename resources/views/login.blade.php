@extends('layouts.base')

@section('title')
CONNEXION
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
            @elseif(Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{Session::get('status')}}
            </div>
            @endif
            <form method="POST" action="/connection">
                @csrf
                <div class="imgcontainer"> <br>
                    <img src="{{asset('images/Intro.jpeg')}}" alt="Avatar" class="avatar">
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
                        <button type="submit" class="btn btn-primary btn-block mb-4">Connexion</button>
                    </div>
                    <div class="col-md-auto">
                        <a href="#!">Forgot password?</a>
                    </div>
                    <div class="col col-lg-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
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
                <p>Not a member? <a href="{{URL::to('register')}}">Register</a></p>
                </div>
            </form> 
    </div>
</div>
</section>
@endsection