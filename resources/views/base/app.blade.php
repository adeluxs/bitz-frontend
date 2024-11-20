<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'BitzMeg')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    @endif
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    @yield('styles')
</head>

<body class="bg-gradient-to-r from-[#FFF9F6] to-[#FFEFEA]">
    <!-- Navigation -->
    <nav class="flex justify-between items-center py-4 px-4 md:px-20 max-w-7xl mx-auto">
        <div>
            <a href="{{ route('index') }}">
                <h1 class="text-xl font-semibold">Windsor AI</h1>
            </a>
        </div>
        <div class="hidden md:flex space-x-8">
            <a href="{{ route('user.feature') }}" class="text-gray-600 text-sm">Features</a>
            <a href="{{ route('user.pricing') }}" class="text-gray-600 text-sm">Pricing</a>
            <a href="{{ route('user.contact') }}" class="text-gray-600 text-sm">Contact Us</a>
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="{{ route('user.login') }}" class="text-[#FF5C39] text-sm">Login</a>
            <a href="{{ route('user.register') }}" class="bg-[#FF5C39] text-white px-4 py-2 rounded-md text-sm">Sign
                Up</a>
        </div>
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </nav>
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="flex flex-col space-y-4 py-6 px-4 pb-8 bg-white shadow-md rounded-lg">
            <a href="{{ route('user.feature') }}"
                class="text-gray-600 text-sm hover:text-[#FF5C39] transition duration-200">Features</a>
            <a href="{{ route('user.pricing') }}"
                class="text-gray-600 text-sm hover:text-[#FF5C39] transition duration-200">Pricing</a>
            <a href="{{ route('user.contact') }}"
                class="text-gray-600 text-sm hover:text-[#FF5C39] transition duration-200">Contact Us</a>
            <a href="{{ route('user.login') }}" class="text-[#FF5C39] text-sm font-medium">Login</a>
            <a href="{{ route('user.register') }}"
                class="bg-[#FF5C39] text-white px-4 py-2 rounded-md text-sm hover:bg-[#e04a32] transition duration-200">Sign
                Up</a>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    @yield('hero')

    <div class="max-w-7xl mx-auto ">
        @yield('content')
    </div>

    <footer class="relative">
        {{-- CTA Banner --}}
        <div class="max-w-4xl mx-auto px-6 mb-[-40px]">
            <div class="bg-[#161c2d] rounded-2xl p-12 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-[#1a2236] to-[#161c2d]"></div>
                <div class="absolute inset-0">
                    <div class="absolute w-96 h-96 rounded-full bg-indigo-600/10 -top-48 -right-48"></div>
                    <div class="absolute w-96 h-96 rounded-full bg-indigo-600/10 -bottom-48 -left-48"></div>
                </div>
                <div class="absolute left-8 top-1/2 transform -translate-y-1/2">
                    <svg class="w-12 h-24 text-indigo-600/40" viewBox="0 0 24 48">
                        <path fill="currentColor" d="M0,0 C8,8 8,16 0,24 C8,32 8,40 0,48"></path>
                    </svg>
                </div>
                <div class="absolute right-8 top-1/2 transform -translate-y-1/2">
                    <svg class="w-12 h-24 text-indigo-600/40" viewBox="0 0 24 48">
                        <path fill="currentColor" d="M24,0 C16,8 16,16 24,24 C16,32 16,40 24,48"></path>
                    </svg>
                </div>
                <div class="text-center relative z-10">
                    <h2 class="text-3xl font-bold text-white mb-2">Ready to enhance your reach</h2>
                    <h3 class="text-2xl font-bold text-white mb-4">And boost conversions</h3>
                    <p class="text-gray-400 mb-8">Transform your platform with data-driven insights and<br>actionable
                        recommendations.</p>
                    <button
                        class="bg-white text-[#161c2d] px-6 py-2 rounded-full font-medium hover:bg-gray-100 transition">
                        Get Started
                    </button>
                </div>
            </div>
        </div>

        {{-- Footer Content --}}
        <div class="bg-[#161c2d] pt-32 pb-12 px-6">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                    @php
                        $sections = [
                            'Quick Links' => ['About Us', 'Pricing', 'Features', 'Blog', 'Contact Us'],
                            'Integrations' => ['Integration 1', 'Integration 2', 'Integration 3', 'Integration 4'],
                            'Dashboard Templates' => ['Template 1', 'Template 2', 'Template 3', 'Template 4'],
                            'Legal' => ['Terms of Service', 'Privacy Policy', 'Cookie Policy', 'Legal Notice'],
                        ];
                    @endphp

                    @foreach ($sections as $title => $links)
                        <div>
                            <h4 class="text-red-500 font-medium mb-4">{{ $title }}</h4>
                            <ul class="space-y-3">
                                @foreach ($links as $link)
                                    <li>
                                        <a href="#"
                                            class="text-gray-400 hover:text-white transition">{{ $link }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>

                {{-- Social Media Links --}}
                <div class="border-t border-gray-800 pt-8">
                    <p class="text-gray-400 mb-4">Follow Us on Social Media:</p>
                    <div class="flex space-x-4">
                        @foreach (['youtube', 'facebook', 'twitter', 'linkedin', 'instagram'] as $social)
                            <a href="#" class="text-gray-400 hover:text-white transition">
                                <span class="sr-only">{{ ucfirst($social) }}</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    @switch($social)
                                        @case('youtube')
                                            <path
                                                d="M23.5 6.2c-.3-1-1-1.8-2-2.1C19.8 3.5 12 3.5 12 3.5s-7.8 0-9.5.6c-1 .3-1.7 1.1-2 2.1C0 8 0 12 0 12s0 4 .5 5.8c.3 1 1 1.8 2 2.1 1.7.6 9.5.6 9.5.6s7.8 0 9.5-.6c1-.3 1.7-1.1 2-2.1.5-1.8.5-5.8.5-5.8s0-4-.5-5.8z" />
                                        @break

                                        @case('facebook')
                                            <path
                                                d="M24 12.1c0-6.6-5.4-12-12-12s-12 5.4-12 12c0 6 4.4 11 10.1 11.9v-8.4h-3v-3.5h3v-2.6c0-3 1.8-4.7 4.5-4.7 1.3 0 2.7.2 2.7.2v3h-1.5c-1.5 0-2 .9-2 1.9v2.3h3.4l-.5 3.5h-2.9v8.4c5.7-.9 10.1-5.9 10.1-11.9z" />
                                        @break

                                        @case('twitter')
                                            <path
                                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                        @break

                                        @case('linkedin')
                                            <path
                                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                        @break

                                        @case('instagram')
                                            <path
                                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                        @break
                                    @endswitch
                                </svg>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('scripts')
</body>

</html>
