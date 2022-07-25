@extends('layouts.base')

@section('title')
Not found
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
.center-screen {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 90vh;
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
@media screen and (min-width: 300px) {
    
}
</style>
@endsection
@section('body')
<section style="background: #243b2a;" id="portfolio">
    <div class="container">
        <div  class="box">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-lg-12">    
                    <div class="center-screen">
                        @if(Session::has('emptyFatwas'))
                            <div class="alert alert-dismissible alert-info">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>{{Session::get('emptyFatwas')}}</strong>
                            </div>
                        @elseif(Session::has('emptyInvocation'))
                            <div class="alert alert-dismissible alert-info">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>{{Session::get('emptyInvocation')}}</strong>
                            </div>
                        @elseif(Session::has('emptyHadith'))
                            <div class="alert alert-dismissible alert-info">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>{{Session::get('emptyHadith')}}</strong>
                            </div>
                        @elseif(Session::has('emptyChahada'))
                            <div class="alert alert-dismissible alert-info">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>{{Session::get('emptyChahada')}}</strong>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</section>

@endsection