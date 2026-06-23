<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GCPZHM7J4M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GCPZHM7J4M');
</script>

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