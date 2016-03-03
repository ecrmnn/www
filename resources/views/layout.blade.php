<!doctype html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="icon" type="image/png" href="/assets/favicon/favicon.png">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <!-- Open Graph Protocol -->
    <meta property="og:locale" content='en_US'/>
    <meta property="og:type" content='website'/>
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:image" content="@yield('image', 'https://avatars3.githubusercontent.com/u/1481696?v=3&s=320')" />
    <meta property="og:site_name" content="Daniel Eckermann" />

    <!-- Site verification -->
    <meta name="google-site-verification" content="9-iMwUs_G24lIh8PvMORdLLrYG8iKbUBIsJXfBhk78o" />

    <!-- View port -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home.index') }}">Daniel Eckermann</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('linkDeck.index') }}">LinkDeck</a>
                </li>
                <li>
                    <a href="{{ route('blog.index') }}">Blog</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    <div class="container text-center text-muted">
        <hr>
        <p>
            &copy; {{ date('Y') }} <a href="/">Daniel Eckermann</a> &bullet; Proudly hosted by
            <a href="https://www.fortrabbit.com" target="_blank">Fortrabbit</a>
        </p>

        <p><em>&laquo;Choose a job you love, and you'll never have to work a day in your life&raquo;</em></p>
    </div>
</footer>

<script src="/assets/js/app.js"></script>
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-78785-2');ga('send','pageview');
</script>
</body>
</html>