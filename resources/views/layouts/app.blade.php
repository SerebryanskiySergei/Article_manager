{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>Laravel</title>--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    {{--<style>--}}
        {{--body {--}}
            {{--font-family: 'Lato';--}}
        {{--}--}}

        {{--.fa-btn {--}}
            {{--margin-right: 6px;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body id="app-layout">--}}
    {{--<nav class="navbar navbar-default navbar-static-top">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}

                {{--<!-- Collapsed Hamburger -->--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                    {{--<span class="sr-only">Toggle Navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}

                {{--<!-- Branding Image -->--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--Laravel--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li><a href="{{ url('/home') }}">Home</a></li>--}}
                {{--</ul>--}}

                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@if (Auth::guest())--}}
                        {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                    {{--@else--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

    {{--@yield('content')--}}

    {{--<!-- JavaScripts -->--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
{{--</body>--}}
{{--</html>--}}


        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head profile="http://gmpg.org/xfn/11">

    <title>Wook HTML</title>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/Wook_Bold.font.js" type="text/javascript"></script>
    <script src="js/Wook_Regular.font.js" type="text/javascript"></script>
    <link href="styles/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/reset.css">
    <link rel="stylesheet" type="text/css" href="styles/clearfix.css">
    <link rel="stylesheet" type="text/css" href="styles/jquery.fancybox-1.3.1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="styles/nivo-slider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="styles/base.css">
    <link rel="stylesheet" type="text/css" href="styles/dark.css">
    <!--[if IE 8]><link rel="stylesheet" type="text/css" href="styles/style_ie8.css"><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="styles/style_ie7.css"><![endif]-->

</head>

<body class="jsDisabled">
<script type="text/javascript">$('body').removeClass('jsDisabled');</script>

<div id="header" class="clearfix">

    <div class="holder clearfix">


        <div id="title"><span><a href="{{url('/home')}}" title="Wook" rel="home">Доки</a></span></div>

        <ul id="siteNav">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Войти</a></li>
                <li><a href="{{ url('/register') }}">Регистрация</a></li>
            @else
                <li class="selected"><a href="{{url('/home')}}">Главная</a></li>
                <li ><a href="{{url('/documents')}}">Мои документы</a></li>
                <li><a href="{{url('/contacts')}}">Обратная связь</a></li>
            @endif
        </ul>

    </div>

</div><!-- #header -->
<div id="wrapper" class="container">
    @yield('content')

    <div id="footer">

        <p class="copyright text-center">Designed by Chris Mahon.</p>


    </div><!-- #footer -->
</div><!-- #wrapper -->


<script type="text/javascript">

    // apply cufon & force a redraw for IE
    Cufon.now(); document.body.className = '';

</script>

<script type="text/javascript" src="js/jquery.livequery.js"></script>
<script type="text/javascript" src="js/jquery-css-transform.js"></script>
<script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.pack.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.2.pack.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/base.js"></script>
<script type="text/javascript" src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js"></script>


</body>
</html>
