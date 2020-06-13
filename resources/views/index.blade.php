<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>nomer</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <meta property="og:url" content="https://top100awards.ru">--}}
    <meta property="og:title" content="NOMER">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta name="og:image" itemprop="image" content="{{env("APP_URL")}}/images/svg/logo.svg">
    <meta property="fb:app_id" content="257953674358265">
    <meta name="format-detection" content="telephone=no">
    <link rel="canonical" href="/">
    <link rel="shortcut icon" href="/images/svg/logo.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/fonts.css" media="none" onload="this.media='all'">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

@include('sprite')
@include('components.header.header')

<main>
    @yield('nomer-content')
</main>

@include('components.footer.footer')

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>