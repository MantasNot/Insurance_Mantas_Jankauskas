<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-lg bg-white flex-xl-fill">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: space-evenly">
                    <a type="button" class="btn btn-outline-primary" href="/create">prideti</a>
                    <a type="button" class="btn btn-outline-primary" href="/client/">Primary</a>
                    <a type="button" class="btn btn-outline-primary" href="/client/">Primary</a>
                    <a type="button" class="btn btn-outline-primary" href="/client/">Primary</a>
                    <a type="button" class="btn btn-outline-primary" href="/client/">Primary</a>
                </div>
            </div>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
