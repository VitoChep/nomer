<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
    <title>nomer-ua</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/fonts.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css"/>
</head>
<body>

@include('sprite')
@include('components.header.header')

<main>
    @include('components.section-1.section-1')
    @include('components.section-2.section-2')
    @include('components.section-3.section-3')
    @include('components.section-4.section-4')
</main>

@include('components.footer.footer')

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>