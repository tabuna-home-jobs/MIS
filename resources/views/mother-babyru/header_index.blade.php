<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/mother-baby.ru/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/mother-baby.ru/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/mother-baby.ru/css/slick.css" type="text/css">
    <link rel="stylesheet" href="/mother-baby.ru/style.css" type="text/css">
    <script src="/mother-baby.ru/js/bootstrap.min.js"></script>
    <script src="/mother-baby.ru/js/slick.min.js"></script>
    <script src="/mother-baby.ru/js/app.js"></script>


    @if(is_null($meta = SEO::render()) || empty($meta = SEO::render()))
        <title>@yield('title') - Медицинский центр «Здоровье Нации»</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:image" content="@yield('avatar')">
        <meta name="twitter:title" content="@yield('title')">
        <meta name="twitter:description" content="@yield('description')"/>
        <meta name="twitter:image:src" content="@yield('avatar')"/>
    @else
        {!! $meta !!}
    @endif

</head>
<body>

<header class="index-head">


</header>







@yield('content')


@include('mother-babyru/footer')
