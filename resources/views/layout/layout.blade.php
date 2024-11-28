<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AgriConnect Cameroon')</title>
    
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    
    <!-- Custom Styles -->
    <style>
        /* Dark mode styles */
        html.dark {
            background-color: #1a202c;
            color: #e2e8f0;
        }
        html.dark body {
            background-color: #2d3748;
        }
    </style>
</head>
<body class="bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="AgriConnect Logo" class="h-10 w-auto">
                <span class="ml-3 text-xl font-bold text-green-600 dark:text-green-400">AgriConnect</span>
            </div>
            
            <!-- Navigation Links -->
            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-800 dark:text-gray-200 hover:text-green-600 transition">
                    {{ __('Home') }}
                </a>
                <a href="{{ route('services') }}" class="text-gray-800 dark:text-gray-200 hover:text-green-600 transition">
                    {{ __('Services') }}
                </a>
            </div>
            
            <!-- Theme and Language Switchers -->
            <div class="flex items-center space-x-4">
                <!-- Theme Switcher -->
                <button id="theme-toggle" class="text-gray-600 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 transition">
                    <svg id="theme-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m3.343-5.657L5.929 5.929m12.728 12.728L18.071 18.07M12 7a5 5 0 110 10 5 5 0 010-10z"></path>
                    </svg>
                </button>
                
                <!-- Language Switcher -->
                <div class="relative">
                    <button id="language-toggle" class="text-gray-600 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                        </svg>
                    </button>
                    
                    <!-- Language Dropdown (Hidden by default) -->
                    <div id="language-dropdown" class="absolute right-0 mt-2 w-32 bg-white dark:bg-gray-700 rounded-md shadow-lg hidden">
                        <a href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}" 
                           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                            English
                        </a>
                        <a href="{{ route(Route::currentRouteName(), ['locale' => 'fr']) }}" 
                           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                            Français
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 dark:bg-gray-800 py-6">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-600 dark:text-gray-400">
                &copy; {{ date('Y') }} AgriConnect. {{ __('All rights reserved.') }}
            </p>
            <div class="mt-4 space-x-4">
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-green-600">{{ __('Privacy Policy') }}</a>
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-green-600">{{ __('Terms of Service') }}</a>
                <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-green-600">{{ __('Contact') }}</a>
            </div>
        </div>
    </footer>

    <!-- Theme and Language Switching Scripts -->
    <script>
        // Theme Switching
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        const htmlElement = document.documentElement;

        themeToggle.addEventListener('click', () => {
            if (htmlElement.classList.contains('dark')) {
                htmlElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                themeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m3.343-5.657L5.929 5.929m12.728 12.728L18.071 18.07M12 7a5 5 0 110 10 5 5 0 010-10z"></path>`;
            } else {
                htmlElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                themeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>`;
            }
        });

        // Check for saved theme preference or default to light theme
        if (localStorage.getItem('theme') === 'dark' || 
            (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            htmlElement.classList.add('dark');
            themeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>`;
        }

        // Language Dropdown Toggle
        const languageToggle = document.getElementById('language-toggle');
        const languageDropdown = document.getElementById('language-dropdown');

        languageToggle.addEventListener('click', () => {
            languageDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!languageToggle.contains(event.target) && !languageDropdown.contains(event.target)) {
                languageDropdown.classList.add('hidden');
            }
        });
    </script>

    @yield('scripts')
</body>
</html>