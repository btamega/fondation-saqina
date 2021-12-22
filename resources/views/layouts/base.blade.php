<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('meta')
    <link href="{{ asset("css/uncss.css")}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset("images/favicon.ico")}}">
    
    @yield('stylesheet')
</head>
<body>
    @include('include.header')
    @yield('body')
    @include('include.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset("js/jquery.js")}}"></script>
<script src="{{ asset("js/bootstrap.min.js")}}"></script>
<script src="{{ asset("js/jquery.isotope.min.js")}}"></script>
<script src="{{ asset("js/jquery.prettyPhoto.js")}}"></script>
<script src="{{ asset("js/main.js")}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ asset("js/jquery.unveil.js")}}"></script>
<script class="u-script" type="text/javascript" src="{{asset("js/jquery.js")}}" defer=""></script>
<script class="u-script" type="text/javascript" src="{{asset("js/nicepage.js")}}" defer=""></script>
<script>$(document).ready(function(){$("img").unveil()});</script>
    @yield('javascript')
</body>
</html>