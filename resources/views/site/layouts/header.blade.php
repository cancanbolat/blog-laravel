<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='keywords' content='@yield('keywords')'>
	<meta name='description' content='@yield('description')'>
	<meta name='subject' content='Yazılım, sql, mysql, mssql, laravel, php, asp net, asp net mvc, asp net mvc core, github, git, no-sql, mongo db, redis, neo4j, postgresql, cassandra, python, django, blog, javascript, html, css, bootstrap, npm, express, handlebar, mvc, model, view, controller, design patterns, python web scraping, selenium, codeigniter, api, android, kotlin, java, c#, tasarım, web'>
	<meta name='copyright' content='https://www.cancanbolat.site'>
	<meta name='language' content='TR'>
	<meta name='Classification' content='Personal blog'>
	<meta name='author' content='Can Canbolat'>
	<meta name='owner' content='Can Canbolat'>
	<meta name='url' content='https://www.cancanbolat.site'>
	<meta name='identifier-URL' content='https://www.cancanbolat.site'>
	<meta name='coverage' content='Worldwide'>
	<meta name='distribution' content='Global'>
	<meta name='rating' content='General'>
	<meta name='subtitle' content='@yield('title')'>
	<meta name='target' content='all'>
	<meta name='HandheldFriendly' content='True'>
	<meta http-equiv='Pragma' content='no-cache'>
	<meta http-equiv='Cache-Control' content='no-cache'>
	<meta http-equiv='x-dns-prefetch-control' content='off'>
	<meta name='application-name' content='Tarım'>
	<meta name='og:email' content='canxmcclyn@gmail.com'>
	<meta name='og:phone_number' content='05369108854'>
	<meta name='og:street-address' content='Mersin'>
	<meta name='og:locality' content='Tarsus'>
    <title>@yield('title')</title>
    <!--RESET CSS-->
    <link rel="stylesheet" href="{{asset('site/')}}/css/style.css">
    <!--MEDIA SCREENS CSS -->
    <link rel="stylesheet" href="{{asset('site/')}}/css/media.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('site/')}}/css/index.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="menu">
                    <h1 class="logo"><a href="/">BLOG</a></h1>
                    <ul class="nav-list">
                        <li class="nav-item"><a href="/">Home</a></li>
                        @yield('categories', false)
                        <li class="nav-item"><a href="about.html">About</a></li>
                        <li class="nav-item"><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

