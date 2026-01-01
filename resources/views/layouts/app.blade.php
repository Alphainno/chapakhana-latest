<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>@yield('title', 'Chapakhana - Every page tells your story')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            height: 100%;
            overflow-x: hidden;
        }

        body { 
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Slider animations */
        .slider-item { 
            display: none; 
            animation: fadeIn 0.5s ease-in; 
        }
        .slider-item.active { 
            display: block; 
        }

        /* Text justification */
        .content-justify p { 
            text-align: justify; 
            text-justify: inter-word; 
        }

        /* Keyframe animations */
        @keyframes fadeIn { 
            from { opacity: 0; } 
            to { opacity: 1; } 
        }

        /* Scrollbar hiding */
        .scrollbar-hide::-webkit-scrollbar { 
            display: none; 
        }
        .scrollbar-hide { 
            -ms-overflow-style: none; 
            scrollbar-width: none; 
        }

        /* Smooth transitions */
        a, button {
            transition: all 0.3s ease-in-out;
        }

        /* Mobile optimizations */
        @media (max-width: 640px) {
            body {
                font-size: 14px;
            }
            
            input, button {
                min-height: 44px;
                min-width: 44px;
            }
        }

        /* Image responsiveness */
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Touch device optimizations */
        @media (hover: none) and (pointer: coarse) {
            a, button {
                padding: 0.75rem;
            }
        }
    </style>
    @stack('head')
</head>
<body class="bg-white antialiased">
    <div class="sticky top-0 z-50 bg-white shadow-sm">
        @yield('header')
    </div>
    <main class="w-full min-h-screen">
        @yield('content')
    </main>
    @yield('footer')
    @stack('scripts')
</body>
</html>
