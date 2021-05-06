<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Coda:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css\generalstyle.css")}}">
    <link rel="stylesheet" href="{{asset("@yield("cssfile")"}}">
    <title>@yield('titolo') | La Molisana</title>
</head>
<body>
    @include('partials\header')

    @yield('content')

    @include('partials\footer')
</body>
</html>