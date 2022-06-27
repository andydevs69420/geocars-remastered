<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page-title")</title>
    <link rel="shortcut icon" href="{{ asset("images/geocarsapp.png") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("css/webpack/app.css") }}">
    <link rel="stylesheet" href="{{ variant(asset("css/layout/master/default/master.css"), asset("css/layout/master/dark/master.css")) }}">
    @section("stylesheet")
        {{-- other css here! --}}
    @show
</head>
<body>

    <main id="master__main" class="d-block w-100 h-100">
        @section("app-body")
            {{-- body here! --}}
        @show
    </main>

    <script src="{{ asset("js/webpack/app.js") }}"></script>
    @section("javascript")
        {{-- other js here! --}}
    @show
</body>
</html>
