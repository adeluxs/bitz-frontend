@extends('base.app')
@section('title', 'Feature')
@section('content')


    <div class="relative bg-[#0D1117] text-white py-16">
        {{-- Background pattern --}}
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%">
                <pattern id="topography" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M0 50 Q25 25, 50 50 T100 50" fill="none" stroke="currentColor" stroke-width="1" />
                    <path d="M-50 50 Q-25 25, 0 50 T50 50" fill="none" stroke="currentColor" stroke-width="1" />
                </pattern>
                <rect width="100%" height="100%" fill="url(#topography)" />
            </svg>
        </div>

        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">
                {{-- Left Column --}}
                <div class="space-y-8">
                    <h2 class="text-3xl font-bold">Still want to reach out to our team?</h2>
                    <p class="text-gray-400">Provide the details of your issue. Tell us as much as you can about the
                        problem, and see how it shakes down.</p>

                    {{-- Feature Box --}}
                    <div class="bg-[#161B22] rounded-lg p-6 space-y-4">
                        <h3 class="text-xl font-semibold flex items-center gap-2">
                            Do more with BitMag <span class="text-orange-500">🚀</span>
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Pay for subscriptions faster with easy payment integrations
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                Pay for subscription faster with easy payment integrations
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Right Column - Form --}}
                <div class="bg-white rounded-lg p-6">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="full_name" class="block text-sm font-medium text-gray-700">Your Full Name</label>
                            <input type="text" name="full_name" id="full_name" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Enter your full name">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                            <input type="email" name="email" id="email" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Enter your email">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                            <textarea name="message" id="message" rows="4" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Enter your request"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-[#0D1117] text-white py-3 px-4 rounded-md hover:bg-opacity-90 transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto px-4 py-8">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- General Inquiries -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">General Inquiries</h3>
                <div class="space-y-2">
                    <!-- Phone Numbers -->
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M16 14h.01" />
                        </svg>
                        <div class="text-gray-600">
                            <p>0818842443, 0818842443</p>
                        </div>
                    </div>

                    <!-- Email Addresses -->
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div class="text-gray-600">
                            <p>hello@website.ai , support@website.ai</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Office Address -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Our office Address</h3>
                <div class="flex items-start gap-2">
                    <svg class="w-5 h-5 mt-1 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <p class="text-gray-600">
                        kennedsa amet, Tortor eu division maxia lorere. Mauris ultricies et dictum lacus
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{-- <section class="bg-slate-900 py-16 px-4 md:px-8">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">
            <!-- Left Column -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-semibold text-white mb-2">
                        Still want to reach out to our team?
                    </h2>
                    <p class="text-slate-400">
                        Provide the details of your issue, tell us as much as you can about the problem, and we'll be in
                        touch soon.
                    </p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-white mb-4">
                        Do more with BitMag 🚀
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="text-slate-400">Pay for subscription - faster with easy payment integration</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-green-500 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span class="text-slate-400">Pay for subscription - safer with easy payment integration</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Form -->
            <div class="bg-white rounded-lg p-6">
                <form class="space-y-6">
                    <div>
                        <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">
                            Your Full Name
                        </label>
                        <input type="text" id="fullName" name="fullName"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your name">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Your Email
                        </label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your email">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">
                            Your Message
                        </label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your message"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-slate-900 text-white py-3 px-6 rounded-md hover:bg-slate-800 transition duration-200">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section> --}}

@endsection
