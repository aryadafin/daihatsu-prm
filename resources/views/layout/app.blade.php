<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <link rel="icon" href="{{ asset('favicon.ico?v=2') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico?v=2') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.ico?v=2') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Daihatsu PRM - Dealer Resmi Daihatsu Promo Terbaik')</title>

    <meta name="description"
        content="@yield('meta_description', 'Dealer Daihatsu PRM resmi dengan promo Daihatsu terbaru, simulasi kredit, test drive, dan penawaran terbaik.')">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Daihatsu PRM')">
    <meta property="og:description"
        content="@yield('meta_description', 'Dealer Daihatsu PRM resmi dengan promo terbaik.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('favicon.ico?v=2') }}">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Daihatsu PRM')">
    <meta name="twitter:description"
        content="@yield('meta_description', 'Dealer Daihatsu PRM resmi dengan promo terbaik.')">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="font-[Poppins]">

    <x-navbar />

    @yield('content')

    <x-footer />

</body>

</html>