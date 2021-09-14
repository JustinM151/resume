<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">

<div class="relative flex items-top bg-scroll bg-cover justify-center min-h-screen bg-white items-center sm:pt-0" style="background-image: url('images/forest-fog.jpg');">
    <div class="fixed top-0 right-0 px-6 py-4">
        <a class="text-sm text-gray-400 underline" href="/resume" data-v-317d1a6e=""> Resume </a>
    </div>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="m-t-0">
            <h1 class="text-5xl sm:text-7xl text-yellow-50 text-opacity-70 shadowed sm:text-black sm:text-opacity-80 text-center">404</h1>
            <h2 class="text-2xl">Page Not Found</h2>
        </div>
    </div>
</div>

@env ('local')
    <script src="http://localhost:8080/js/bundle.js"></script>
@endenv
</body>
</html>
