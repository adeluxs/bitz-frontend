@extends('base.app')
@section('title', 'Home | BitzMag')


@section('hero')

    <!--- The initial figma design that I was following--->
    <section class="relative mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center relative">
            <!-- Decorative Wand - Hidden on small screens -->
            <div class="hidden md:block absolute left-4 top-0">
                <div class="relative">
                    <div class="w-12 h-20 bg-[#FF5C71] rounded-full transform rotate-[-35deg]"></div>
                    <div class="absolute -top-1 -right-1 w-4 h-4 bg-[#FFB443] rounded-full"></div>
                </div>
            </div>

            <!-- Hero Headline - Adjusted for mobile readability -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#2D2F6D] leading-tight">
                Connecting all your <span class="text-[#FF5C39]">data</span> from any<br class="hidden md:block" />
                tool to <span class="text-[#FF5C39]">anywhere</span>
            </h1>

            <!-- Subheadline - Responsive width and padding -->
            <p class="mt-4 md:mt-6 text-gray-500 max-w-xl lg:max-w-2xl mx-auto text-base md:text-lg px-4">
                Seamlessly integrate and unify your data from any platform, device, or tool. Easily
                connect and sync your data anywhere for a streamlined, efficient workflow.
            </p>

            <!-- Call to Action Button - Responsive sizing -->
            <button
                class="mt-6 md:mt-8 bg-[#FF5C39] text-white px-4 md:px-6 py-2 md:py-3 rounded-md inline-flex items-center">
                Start Free Trial
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Stats Section - Responsive Layout -->
            <div class="mt-12 md:mt-20 flex flex-col md:flex-row justify-center md:space-x-8 items-center md:items-start">
                <!-- Total Subscribe Card - Responsive Positioning -->
                <div class="hidden md:block bg-white p-6 rounded-2xl shadow-sm w-64 -mt-24">
                    <div class="flex items-center space-x-3">
                        <div>
                            <img src="/images/slack.png" class="rounded h-24 -ml-20" alt="Slack logo">
                        </div>
                    </div>
                </div>

                <!-- Cards Container - Responsive Flex and Wrapping -->
                <div class="flex flex-wrap justify-center gap-4 md:gap-8 mt-6 md:mt-0">
                    <!-- Likes Card -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm w-64">
                        <div class="flex items-center space-x-3 py-12">
                            <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-[#FF5C39]" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 18l-1.45-1.32C3.4 12.36 0 9.28 0 5.5 0 2.42 2.42 0 5.5 0c1.74 0 3.41.81 4.5 2.09C11.09.81 12.76 0 14.5 0 17.58 0 20 2.42 20 5.5c0 3.78-3.4 6.86-8.55 11.54L10 18z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold">15.9k</p>
                                <p class="text-sm text-green-500 flex items-center">
                                    <span class="mr-1">↑</span>21% vs last 7 days
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Followers Stats Card -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm w-64">
                        <p class="text-gray-500 mb-4 text-sm">Followers Stats</p>
                        <div class="h-32 flex items-end space-x-2">
                            <div class="w-6 h-20 bg-[#FF5C39] rounded-t-md"></div>
                            <div class="w-6 h-24 bg-[#FF5C39] rounded-t-md"></div>
                            <div class="w-6 h-16 bg-[#FF5C39] rounded-t-md"></div>
                            <div class="w-6 h-28 bg-[#FF5C39] rounded-t-md"></div>
                            <div class="w-6 h-18 bg-[#FF5C39] rounded-t-md"></div>
                            <div class="w-6 h-32 bg-[#FF5C39] rounded-t-md"></div>
                        </div>
                    </div>

                    <!-- Reach Card -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm w-64">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-[#FF5C39]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-2xl font-bold">256.18k</p>
                                <p class="text-sm text-green-500 flex items-center">
                                    <span class="mr-1">↑</span>24% vs last 7 days
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instagram Card - Responsive Positioning -->
                <div class="hidden md:block absolute top-64 right-48 bg-white p-4 rounded-2xl shadow-sm">
                    <div class="flex items-center space-x-2">
                        <img src="/images/instagram.png" class="rounded h-24" alt="Instagram logo">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="relative mx-auto px-4 sm:px-6 lg:px-8 min-h-[600px]">
        <div class="container mx-auto px-4 md:px-8 py-12">
            <div class="flex flex-col md:flex-row justify-between items-start space-y-8 md:space-y-0">
                <!-- Left Section -->
                <div class="w-full md:w-2/3 mb-8 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-4">
                        Connecting all your<br>
                        data from any tool<br>
                        to <span class="text-orange-500">anywhere</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-6">
                        Seamlessly integrate and unify your data from<br>
                        any platform, device, or tool.
                    </p>
                    <button
                        class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg text-sm font-medium inline-flex items-center space-x-2 transition-colors">
                        <span>Start Free Trial</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!-- Right Section - Stats Cards -->
                <div class="w-full flex flex-wrap gap-4 justify-start relative">
                    <!-- Likes Stats Card (Above other images) -->
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2">
                        <img src="/images/likes.png" alt="Likes" class="w-[80vw] md:w-[100px] h-auto object-contain">
                    </div>

                    <!-- Remaining 3 Stats Cards (Kit, Gained, Reach) -->
                    <div class="flex w-full justify-between gap-6 md:gap-8">
                        <!-- Kit Stats Card -->
                        <div class="flex-1 relative z-10">
                            <img src="/images/kit.png" alt="Kit" class="w-full h-auto object-contain">
                        </div>

                        <!-- Gained Stats Card -->
                        <div class="flex-1 relative z-10">
                            <img src="/images/gained.png" alt="Gained" class="w-full h-auto object-contain">
                        </div>

                        <!-- Reach Stats Card -->
                        <div class="flex-1 relative z-10">
                            <img src="/images/reach.png" alt="Reach" class="w-full h-auto object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



@endsection

@section('content')
    <!-- Features Stats Section -->
    <section class="mt-16 md:mt-32 rounded-2xl">

        <div class="flex flex-col md:flex-row pb-12 justify-between p-4 max-w-6xl mx-auto gap-6">
            {{-- Active Users Stat --}}
            <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-auto">
                <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z"
                            fill="currentColor" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">15k+</h3>
                    <p class="text-gray-500 text-sm">Active user</p>
                </div>
            </div>

            {{-- Total Integrations Stat --}}
            <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-auto">
                <div class="w-12 h-12 bg-yellow-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" viewBox="0 0 24 24" fill="none">
                        <path d="M19 9H15V3H9V9H5L12 16L19 9ZM5 18V20H19V18H5Z" fill="currentColor" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">30k</h3>
                    <p class="text-gray-500 text-sm">Total Integrations</p>
                </div>
            </div>

            {{-- Customer Stat --}}
            <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-auto">
                <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z"
                            fill="currentColor" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">10k</h3>
                    <p class="text-gray-500 text-sm">Customer</p>
                </div>
            </div>
        </div>


        <!-- Features Content -->
        <div class="px-4 md:px-8 pb-8 md:pb-16">
            <h2 class="text-2xl md:text-3xl font-bold text-[#2D2F6D] mb-4">Windsor Amazing Features</h2>
            <p class="text-gray-600 max-w-3xl mb-6">
                Connect all marketing data with our attribution platform to boost ROI by 15-44%. Measure ROI across
                channels, campaigns, keywords, and creatives, including cancellations, returns, and offline conversions.
            </p>
            <!-- Learn More Button -->
            <div class="flex justify-end mb-8">
                <a href="#"
                    class="inline-flex items-center px-4 py-2 text-sm text-red-500 border border-red-500 rounded-lg hover:bg-red-50 transition-colors">
                    Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Feature Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mt-8">
                <!-- Save time and automate Card -->
                <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm w-full">
                    <img src="/images/save-time.png" alt="Rate graph" class="w-full h-auto mb-6 rounded-lg" />
                    <h3 class="text-xl font-semibold mb-3">Save time and automate</h3>
                    <p class="text-gray-600">
                        Automate the collection of all marketing data and reduce time spent on preparation. Focus on
                        insights with our advanced marketing attribution software. Easily use and integrate your data
                        anywhere with our connectors and APIs.
                    </p>
                </div>

                <!-- Multi-touch Attribution Card -->
                <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm w-full">
                    <div class="flex flex-col md:flex-row gap-4 mb-6">
                        <img src="/images/instagram.png" alt="Instagram widget" class="w-1/2 rounded-lg" />
                        <img src="/images/follower-stat.png" alt="Stats graph" class="w-1/2 rounded-lg" />
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Multi-touch Attribution Modelling Software</h3>
                    <p class="text-gray-600">
                        Analyze and optimize customer journeys across all touchpoints. Our attribution software and budget
                        optimizer saves time by sending optimizations directly to platforms.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="max-w-6xl mx-auto p-4">

        <div class="bg-white rounded-lg p-6 flex flex-col md:flex-row gap-8">
            {{-- Left Section with Image and Stats --}}
            <div class="relative bg-[#FFF5F5] rounded-lg p-6 flex-1 h-full">
                <div class="space-y-4">
                    <img src="{{ asset('/images/markup-followe.png') }}" alt="Professional with laptop"
                        class="w-full h-auto object-cover rounded-lg">
                </div>
            </div>

            {{-- Right Section with ROI Information --}}
            <div class="flex-1 p-6">
                <div class="inline-block px-4 py-1 bg-[#FFF5F5] text-red-500 rounded-full mb-4">
                    Attribution Insights
                </div>

                <h2 class="text-2xl font-bold mb-6">
                    Optimize ROI by looking at the whole customer journey
                </h2>

                {{-- Cross Device Stats --}}
                <div class="space-y-4">
                    @foreach (['Criteo, Tapad etc.', 'Criteo, Tapad etc.', 'Criteo, Tapad etc.'] as $stat)
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center text-red-500">
                                <span>28</span>
                            </div>
                            <span class="text-gray-600">Cross-device data, eg {{ $stat }}</span>
                        </div>
                    @endforeach
                </div>

                {{-- Description Text --}}
                <p class="text-gray-600 mt-6 mb-8">
                    Attribution insights empowers advertisers and marketers to make data-driven
                    decisions on marketing budget allocations across the entire customer journey.
                    Customer journey data is matched to cost-data, this together with multi-touch
                </p>

                {{-- Demo Button --}}
                <button class="px-6 py-2 border border-red-500 text-red-500 rounded-full hover:bg-red-50 transition">
                    Try Demo
                </button>
            </div>
        </div>
    </section>


    <section class="max-w-6xl mx-auto">

        <div class="bg-pink-50 p-8 w-full">
            {{-- Header Section --}}
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-2">Integrations</h2>
                <p class="text-gray-600 text-sm">
                    Connect all marketing data with our attribution platform to boost ROI by 15-44%. Measure ROI across
                    channels, campaigns, keywords and creatives, including cancellations, returns, and offline
                    conversions.
                </p>
            </div>

            <!-- Feature Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <!-- Save time and automate Card -->
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <img src="/images/source.png" alt="Rate graph" class="w-full mb-6 rounded-lg" />
                    <h3 class="text-xl font-semibold mb-3">Connect to entire slack</h3>
                    <p class="text-gray-600">
                        Automate the collection of all marketing data and reduce time spent on preparation. Focus on
                        insights with our advanced marketing attribution software. Easily use and integrate your data
                        anywhere with our connectors and APIs.
                    </p>
                </div>

                <!-- Multi-touch Attribution Card -->
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <img src="/images/social.png" alt="Rate graph" class="w-full mb-6 rounded-lg" />
                    <h3 class="text-xl font-semibold mb-3">Connect to entire stack</h3>
                    <p class="text-gray-600">
                        Analyze and optimize customer journeys across all touchpoints. Our attribution software and budget
                        optimizer saves time by sending optimizations directly to platforms.
                    </p>
                </div>

                <!-- Image Gallery Card -->
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <div class="flex flex-col md:flex-row gap-4 mb-6">
                        <img src="/images/illustrations.png" alt="Instagram widget" class="w-full md:w-1/2 rounded-lg" />
                        <img src="/images/illustrations.png" alt="Stats graph" class="w-full md:w-1/2 rounded-lg" />
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Connect to entire slack</h3>
                    <p class="text-gray-600">
                        Automate the collection of all marketing data and reduce time spent on preparation. Focus on
                        insights with our advanced marketing attribution software. Easily use and integrate your data
                        anywhere with our connectors and APIs.
                    </p>
                </div>

                <!-- Multi-touch Attribution Card -->
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <img src="/images/source.png" alt="Rate graph" class="w-full mb-6 rounded-lg" />
                    <h3 class="text-xl font-semibold mb-3">Connect to entire stack</h3>
                    <p class="text-gray-600">
                        Analyze and optimize customer journeys across all touchpoints. Our attribution software and budget
                        optimizer saves time by sending optimizations directly to platforms.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="max-w-6xl mx-auto px-4 py-12">
            {{-- Header Section --}}
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold mb-2">Pricing Plans for You</h2>
                <p class="text-gray-600">Choose the perfect pricing plan that best suits your business needs and budgets
                </p>
            </div>

            {{-- Toggle Switch --}}
            <div class="flex justify-center gap-4 mb-12">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-full">Monthly</button>
                <button class="text-gray-600 px-4 py-2">Yearly</button>
            </div>

            {{-- Pricing Cards Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $plans = [
                        [
                            'name' => 'Try Free',
                            'price' => '$ 0.00',
                            'features' => [
                                '1 user',
                                '1 data source',
                                '1 account',
                                '5 GB destination',
                                'No GB destination backup/m',
                                'Daily DB refresh',
                            ],
                            'buttonClass' => 'border border-gray-300 text-gray-700',
                            'bgClass' => 'bg-white',
                        ],
                        [
                            'name' => 'Basic Plan',
                            'price' => '$ 50.00',
                            'features' => [
                                '1 user',
                                '1 data source',
                                '1 account',
                                '5 GB destination',
                                'No GB destination backup/m',
                                'Daily DB refresh',
                            ],
                            'buttonClass' => 'bg-orange-500 text-white',
                            'bgClass' => 'bg-pink-50',
                        ],
                        [
                            'name' => 'Professional',
                            'price' => '$ 120.00',
                            'features' => [
                                '1 user',
                                '1 data source',
                                '1 account',
                                '5 GB destination',
                                'No GB destination backup/m',
                                'Daily DB refresh',
                            ],
                            'buttonClass' => 'border border-gray-300 text-gray-700',
                            'bgClass' => 'bg-white',
                        ],
                        [
                            'name' => 'VIP',
                            'price' => '$ 150.00',
                            'features' => [
                                '1 user',
                                '1 data source',
                                '1 account',
                                '5 GB destination',
                                'No GB destination backup/m',
                                'Daily DB refresh',
                            ],
                            'buttonClass' => 'border border-gray-300 text-gray-700',
                            'bgClass' => 'bg-white',
                        ],
                    ];
                @endphp

                @foreach ($plans as $plan)
                    <div class="rounded-2xl p-6 {{ $plan['bgClass'] }} transition-all duration-300 hover:scale-105">
                        {{-- Plan Name & Price --}}
                        <div class="text-center mb-6">
                            <h3 class="text-lg font-medium mb-2">{{ $plan['name'] }}</h3>
                            <div class="text-2xl font-bold">{{ $plan['price'] }}</div>
                        </div>

                        {{-- Features List --}}
                        <ul class="space-y-4 mb-8">
                            @foreach ($plan['features'] as $feature)
                                <li class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-sm text-gray-600">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>

                        {{-- Action Button --}}
                        <button
                            class="w-full py-2 px-4 rounded-full text-center {{ $plan['buttonClass'] }} hover:opacity-90 transition-opacity">
                            Activate
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section>
        <div class="py-12 px-4">
            {{-- Header Section --}}
            <div class="max-w-6xl mx-auto mb-12 text-center">
                <h2 class="text-2xl font-bold mb-2">What Our Clients Say</h2>
                <p class="text-gray-600 text-sm">
                    Connect all marketing data with our attribution platform to boost ROI by 15-44%. Measure ROI across
                    channels.
                </p>
            </div>

            {{-- Testimonials Grid --}}
            <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $testimonials = [
                        [
                            'text' =>
                                'The capability of being able to customize the dashboard and present data in ways we requested it to be. Also, we are able to see attributes of what content drives.',
                            'name' => 'Marvel',
                            'position' => 'Social Media Manager',
                            'image' => '/path-to-image1.jpg',
                        ],
                        [
                            'text' =>
                                'The capability of being able to customize the dashboard and present data in ways we requested it to be. Also, we are able to see attributes of what content drives.',
                            'name' => 'Marvel',
                            'position' => 'Social Media Manager',
                            'image' => '/path-to-image2.jpg',
                        ],
                        [
                            'text' =>
                                'The capability of being able to customize the dashboard and present data in ways we requested it to be. Also, we are able to see attributes of what content drives.',
                            'name' => 'Marvel',
                            'position' => 'Social Media Manager',
                            'image' => '/path-to-image3.jpg',
                        ],
                    ];
                @endphp

                @foreach ($testimonials as $testimonial)
                    <div class="bg-gray-50 rounded-xl p-6 flex flex-col justify-between">
                        {{-- Testimonial Text --}}
                        <div class="min-h-[120px] mb-6">
                            <p class="text-gray-600 text-sm leading-relaxed">
                                {{ $testimonial['text'] }}
                            </p>
                        </div>

                        {{-- Author Info --}}
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden bg-gray-200">
                                <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-medium">{{ $testimonial['name'] }}</h4>
                                <p class="text-sm text-gray-500">{{ $testimonial['position'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section>

        <div class="max-w-3xl mx-auto py-16 px-4">
            {{-- Header Section --}}
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold mb-2">Frequently Asked Questions</h2>
                <p class="text-gray-600 text-sm">
                    Connect all marketing data with our attribution platform to boost ROI by 15-44%. Measure ROI
                    across
                    channels.
                </p>
            </div>

            {{-- FAQ Accordion --}}
            <div class="space-y-4" x-data="{ active: 1 }">
                @php
                    $faqs = [
                        [
                            'id' => 1,
                            'question' => 'What is Windsor AI?',
                            'answer' =>
                                'Lorem ipsum dolor sit amet consectetur. Purus sollicitudin pharetra et mauris. Egestas viverra in ut sodales eget nunc. Vitae vel ultrices purus dolor purus vivamus aliquam massa. Ut nam nulla vitae.',
                        ],
                        [
                            'id' => 2,
                            'question' => 'What is Windsor AI?',
                            'answer' =>
                                'Lorem ipsum dolor sit amet consectetur. Purus sollicitudin pharetra et mauris. Egestas viverra in ut sodales eget nunc.',
                        ],
                        [
                            'id' => 3,
                            'question' => 'What is Windsor AI?',
                            'answer' =>
                                'Lorem ipsum dolor sit amet consectetur. Purus sollicitudin pharetra et mauris. Egestas viverra in ut sodales eget nunc.',
                        ],
                        [
                            'id' => 4,
                            'question' => 'What is Windsor AI?',
                            'answer' =>
                                'Lorem ipsum dolor sit amet consectetur. Purus sollicitudin pharetra et mauris. Egestas viverra in ut sodales eget nunc.',
                        ],
                    ];
                @endphp

                @foreach ($faqs as $faq)
                    <div class="border border-gray-200 rounded-lg">
                        <button @click="active = (active === {{ $faq['id'] }} ? null : {{ $faq['id'] }})"
                            class="w-full px-6 py-4 flex justify-between items-center hover:bg-gray-50">
                            <span class="font-medium text-left">{{ $faq['question'] }}</span>
                            <svg class="w-5 h-5 transform transition-transform duration-200"
                                :class="{ 'rotate-180': active === {{ $faq['id'] }} }" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div x-show="active === {{ $faq['id'] }}" x-collapse x-cloak class="px-6 pb-4">
                            <p class="text-gray-600">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </section>


@endsection
