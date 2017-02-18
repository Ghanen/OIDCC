<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Authentication</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jumbotron-narrow.css') }}">

    <!-- <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet"> -->

  </head>

  <body>

    <div class="container">
      @include('layouts.top-nav')

      @yield('content')

    </div> <!-- /container -->
  </body>
</html>
