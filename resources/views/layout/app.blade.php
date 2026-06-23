<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <link rel="icon" href="{{ asset('favicon.ico?v=2') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico?v=2') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Daihatsu PRM')</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    @stack('styles')
</head>

<body class="font-[Poppins]">

    <x-navbar />

    @yield('content')

    <x-footer />

    @stack('scripts')

</body>
</html>