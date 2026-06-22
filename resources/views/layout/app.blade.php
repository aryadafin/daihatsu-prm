<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png?v=2') }}">
<link rel="apple-touch-icon" href="{{ asset('favicon.png?v=2') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Daihatsu PRM')</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <!-- <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="font-[Poppins]">

    <x-navbar />

    @yield('content')

    <x-footer />

</body>

</html>