{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--<title>OIDCC</title>--}}

{{--<!-- Fonts -->--}}
{{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

{{--<!-- Styles -->--}}
{{--<style>--}}
{{--html, body {--}}
{{--background-color: #fff;--}}
{{--color: #636b6f;--}}
{{--font-family: 'Raleway', sans-serif;--}}
{{--font-weight: 100;--}}
{{--height: 100vh;--}}
{{--margin: 0;--}}
{{--}--}}

{{--.full-height {--}}
{{--height: 100vh;--}}
{{--}--}}

{{--.flex-center {--}}
{{--align-items: center;--}}
{{--display: flex;--}}
{{--justify-content: center;--}}
{{--}--}}

{{--.position-ref {--}}
{{--position: relative;--}}
{{--}--}}

{{--.top-right {--}}
{{--position: absolute;--}}
{{--right: 10px;--}}
{{--top: 18px;--}}
{{--}--}}

{{--.content {--}}
{{--text-align: center;--}}
{{--}--}}

{{--.title {--}}
{{--font-size: 84px;--}}
{{--}--}}

{{--.links > a {--}}
{{--color: #636b6f;--}}
{{--padding: 0 25px;--}}
{{--font-size: 12px;--}}
{{--font-weight: 600;--}}
{{--letter-spacing: .1rem;--}}
{{--text-decoration: none;--}}
{{--text-transform: uppercase;--}}
{{--}--}}

{{--.m-b-md {--}}
{{--margin-bottom: 30px;--}}
{{--}--}}
{{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="flex-center position-ref full-height">--}}
{{--@if (Route::has('login'))--}}
{{--<div class="top-right links">--}}
{{--@if (Auth::check())--}}
{{--<a href="{{ url('/home') }}">Home</a>--}}
{{--@else--}}
{{--<a href="{{ url('/login') }}">Login</a>--}}
{{--<a href="{{ url('/register') }}">Register</a>--}}
{{--@endif--}}
{{--</div>--}}
{{--@endif--}}

{{--<div class="content">--}}
{{--<div class="title m-b-md">--}}
{{--OIDCC--}}
{{--</div>--}}

{{--<div class="links">--}}
{{--<a href="https://laravel.com/docs">Documentation</a>--}}
{{--<a href="https://laracasts.com">Laracasts</a>--}}
{{--<a href="https://laravel-news.com">News</a>--}}
{{--<a href="https://forge.laravel.com">Forge</a>--}}
{{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

        <!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->
<html>
<head>
    <title>OIDCC</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="{{ URL::asset('assets/js/ie/html5shiv.js') }}"></script><![endif]-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ URL::asset('assets/css/ie8.css') }}" /><![endif]-->
</head>
<body>
<div>   <!-- class="header clearfix"> -->
    <nav class="">
        <ul class="nav nav-pills pull-right">

        @if (Sentinel::check())
            <li role="presentation">

                    <a href="/" >Home</a>

               </li>

            @else
                <li role="presentation"><a href="/login" class="relog">Login</a></li>
                <li role="presentation"><a href="/register" class="relog">Register</a></li>

            @endif
        </ul>
        <h3 >
        @if(Sentinel::check())
            Hello! {{ Sentinel::getUser()->first_name }}
        @else
                <a href="/login" class="logotitle">ID Card Creator</a>
            @endif
        </h3>
    </nav>
    <hr>
</div>

<!-- Header -->
<div id="header">

    {{--<span class="logo icon fa-paper-plane-o"></span>--}}
    <h1>Online Visiting/Identity Card Creation</h1>


</div>

<!-- Main -->
<div id="main" style="background-image:url(../../public/images/logo.png);">
    {{--<img src="{{asset('assets/images/idcard.jpg')}}">--}}
    <footer class="major container 75%">
        <h1>Home Dash Board will be coming soon...</h1>

    </footer>

</div>

<!-- Footer -->
<div id="footer">
    <div class="container 75%">
        <footer class="container-fluid text-center" id="footerid">
            <h3 class="foottext">Copyright &copy; ID Card Creation</h3>
        </footer>
    </div>
</div>

<!-- Scripts -->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/skel.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/util.js') }}"></script>
<!--[if lte IE 8]><script src="{{ URL::asset('assets/js/ie/respond.min.js') }}"></script><![endif]-->
<script src="{{ URL::asset('assets/js/main.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">

</body>
</html>