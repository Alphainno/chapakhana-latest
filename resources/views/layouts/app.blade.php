<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Chapakhana - Every page tells your story')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .slider-item { display: none; animation: fadeIn 0.5s ease-in; }
        .slider-item.active { display: block; }
        .content-justify p { text-align: justify; text-justify: inter-word; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    @stack('head')
</head>
<body class="bg-white">
    <div class="sticky top-0 z-50 bg-white shadow-sm">
        @yield('header')
    </div>
    <main>
        @yield('content')
    </main>
    @yield('footer')
    @stack('scripts')
</body>
</html>
