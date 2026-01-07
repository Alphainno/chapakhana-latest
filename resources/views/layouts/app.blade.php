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

        /* Toast Notification Styles */
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            min-width: 300px;
            max-width: 400px;
            padding: 16px 20px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            z-index: 9999;
            display: flex;
            align-items: center;
            gap: 12px;
            animation: slideInRight 0.4s ease-out, fadeOut 0.3s ease-in 4.7s forwards;
            backdrop-filter: blur(10px);
        }

        .toast-success {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .toast-error {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .toast-icon {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
        }

        .toast-content {
            flex: 1;
        }

        .toast-title {
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 2px;
        }

        .toast-message {
            font-size: 14px;
            opacity: 0.95;
        }

        .toast-close {
            cursor: pointer;
            opacity: 0.8;
            transition: opacity 0.2s;
            flex-shrink: 0;
        }

        .toast-close:hover {
            opacity: 1;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: translateX(400px);
            }
        }

        @media (max-width: 640px) {
            .toast {
                right: 10px;
                left: 10px;
                min-width: auto;
                max-width: none;
            }
        }
    </style>
    @stack('head')
</head>
<body class="bg-white antialiased">
    <!-- Toast Container -->
    <div id="toast-container"></div>

    <div class="sticky top-0 z-50 bg-white shadow-sm">
        @yield('header')
    </div>
    <main class="w-full min-h-screen">
        @yield('content')
    </main>
    @yield('footer')

    <script>
        // Toast Notification Function
        function showToast(message, type = 'success', title = '') {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');

            const isSuccess = type === 'success';
            const toastClass = isSuccess ? 'toast-success' : 'toast-error';
            const defaultTitle = isSuccess ? 'Success!' : 'Error!';
            const displayTitle = title || defaultTitle;

            const successIcon = `
                <svg class="toast-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            `;

            const errorIcon = `
                <svg class="toast-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            `;

            toast.className = `toast ${toastClass}`;
            toast.innerHTML = `
                ${isSuccess ? successIcon : errorIcon}
                <div class="toast-content">
                    <div class="toast-title">${displayTitle}</div>
                    <div class="toast-message">${message}</div>
                </div>
                <button class="toast-close" onclick="this.parentElement.remove()">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            `;

            container.appendChild(toast);

            setTimeout(() => {
                if (toast.parentElement) {
                    toast.remove();
                }
            }, 5000);
        }

        // Show toast on page load if there's a session message
        @if (session('success'))
            showToast('{{ session('success') }}', 'success');
        @endif

        @if (session('error'))
            showToast('{{ session('error') }}', 'error');
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                showToast('{{ $error }}', 'error', 'Validation Error');
            @endforeach
        @endif
    </script>

    @stack('scripts')
</body>
</html>
