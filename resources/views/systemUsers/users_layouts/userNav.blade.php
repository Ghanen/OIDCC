<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>

    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    {{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>--}}
    {{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>--}}

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/user.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/design.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
    {{--<script type="text/javascript" src="{{ URL::asset('js/init.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ URL::asset('js/paint.js') }}"></script>--}}


</head>
<body class="body">

<nav class="navbar navbar-inverse" id="uNav">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav">
            <li class="active">
                <a class="navbar-brand" href="/user_home">
                @if(Sentinel::check())
                    <i class="fa fa-building-o"></i>
                    {{ Sentinel::getUser()->company_name }}
                @endif
                </a>
            </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" id="navLi">
                <li><a href="/user_home">Home</a></li>
                <li><a href="{{ route('employee.create') }}">Add Employee</a></li>
                <li><a href="{{ route('employee.index') }}">Employee List</a></li>
                <li><a href="/design">Design</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="{{ route('profile.index') }}"> <i class="fa fa-user"></i> Profile</a>
                </li>
                {{--<div class="dropdown">--}}
                    {{--<button class="dropbtn">--}}
                        {{--@if(Sentinel::check())--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--{{ Sentinel::getUser()->first_name }}--}}
                        {{--@endif--}}
                    {{--</button>--}}
                    {{--<div class="dropdown-content" align="center">--}}
                        {{--<form action="/logout" method="POST" id="logout-form">--}}
                            {{--{{  csrf_field() }}--}}
                            {{--<a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <li class="active" style="padding-top:10px;" >
                    <form action="/logout" method="POST" id="logout-form">
                        {{  csrf_field() }}
                        <a href="#" class="btn btn-primary" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-sign-out"></i> Logout</a>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>


@yield('content')

<footer class="container-fluid text-center" id="footerid">
    <p class="foottext">Copyright &copy; Id card creation</p>
</footer>
</body>
</html>
