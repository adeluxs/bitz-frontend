@extends('base.app')
@section('title', 'Feature')
@section('content')


    @include('partials.hero')



    <div class="container mx-auto px-4 py-8">
        {{-- Period Toggle --}}
        <div class="flex justify-center gap-2 mb-8">
            <button class="bg-red-500 text-white px-4 py-1 rounded-full">Monthly</button>
            <button class="text-gray-600 px-4 py-1 rounded-full">Yearly</button>
        </div>

        {{-- Monthly Plans --}}
        <div id="monthly-plans" class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            {{-- Try Free Plan --}}
            <div class="border rounded-lg p-6 flex flex-col">
                <h3 class="text-lg font-semibold">Try Free</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 0.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button class="w-full border border-red-500 text-red-500 rounded-md py-2 hover:bg-red-50 transition-colors">
                    Activate
                </button>
            </div>

            {{-- Basic Plan --}}
            <div class="border rounded-lg p-6 flex flex-col bg-red-50">
                <h3 class="text-lg font-semibold">Basic Plan</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 50.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button class="w-full bg-red-500 text-white rounded-md py-2 hover:bg-red-600 transition-colors">
                    Activate
                </button>
            </div>

            {{-- Professional Plan --}}
            <div class="border rounded-lg p-6 flex flex-col">
                <h3 class="text-lg font-semibold">Professional</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 120.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button class="w-full border border-red-500 text-red-500 rounded-md py-2 hover:bg-red-50 transition-colors">
                    Activate
                </button>
            </div>

            {{-- VIP Plan --}}
            <div class="border rounded-lg p-6 flex flex-col">
                <h3 class="text-lg font-semibold">VIP</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 150.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button class="w-full border border-red-500 text-red-500 rounded-md py-2 hover:bg-red-50 transition-colors">
                    Activate
                </button>
            </div>
        </div>

        {{-- Monthly Plans --}}
        <div id="monthly-plans" class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            {{-- Try Free Plan --}}
            <div class="border rounded-lg p-6 flex flex-col">
                <h3 class="text-lg font-semibold">Try Free</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 0.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button class="w-full border border-red-500 text-red-500 rounded-md py-2 hover:bg-red-50 transition-colors">
                    Activate
                </button>
            </div>

            {{-- Basic Plan --}}
            <div class="border rounded-lg p-6 flex flex-col bg-red-50">
                <h3 class="text-lg font-semibold">Basic Plan</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 50.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button class="w-full bg-red-500 text-white rounded-md py-2 hover:bg-red-600 transition-colors">
                    Activate
                </button>
            </div>

            {{-- Professional Plan --}}
            <div class="border rounded-lg p-6 flex flex-col">
                <h3 class="text-lg font-semibold">Professional</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 120.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button class="w-full border border-red-500 text-red-500 rounded-md py-2 hover:bg-red-50 transition-colors">
                    Activate
                </button>
            </div>

            {{-- VIP Plan --}}
            <div class="border rounded-lg p-6 flex flex-col">
                <h3 class="text-lg font-semibold">VIP</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 150.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button
                    class="w-full border border-red-500 text-red-500 rounded-md py-2 hover:bg-red-50 transition-colors">
                    Activate
                </button>
            </div>
        </div>


        {{-- Yearly Plans --}}
        <div id="yearly-plans" class="grid grid-cols-1 md:grid-cols-4 gap-6 hidden">
            {{-- Try Free Plan --}}
            <div class="border rounded-lg p-6 flex flex-col">
                <h3 class="text-lg font-semibold">Try Free</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 0.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button
                    class="w-full border border-red-500 text-red-500 rounded-md py-2 hover:bg-red-50 transition-colors">
                    Activate
                </button>
            </div>

            {{-- Gold Plan --}}
            <div class="border rounded-lg p-6 flex flex-col bg-red-50">
                <h3 class="text-lg font-semibold">Gold</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 150.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button class="w-full bg-red-500 text-white rounded-md py-2 hover:bg-red-600 transition-colors">
                    Activate
                </button>
            </div>



            {{-- Professional Plan --}}
            <div class="border rounded-lg p-6 flex flex-col">
                <h3 class="text-lg font-semibold">Professional</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 120.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button
                    class="w-full border border-red-500 text-red-500 rounded-md py-2 hover:bg-red-50 transition-colors">
                    Activate
                </button>
            </div>

            {{-- VIP Plan --}}
            <div class="border rounded-lg p-6 flex flex-col">
                <h3 class="text-lg font-semibold">VIP</h3>
                <div class="mt-4 mb-6">
                    <span class="text-2xl font-bold">$ 150.00</span>
                </div>
                <ul class="space-y-3 mb-8 flex-grow">
                    <li class="flex items-center text-sm text-gray-600">• 1 user</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 data source</li>
                    <li class="flex items-center text-sm text-gray-600">• 1 account</li>
                    <li class="flex items-center text-sm text-gray-600">• 5 DB destination</li>
                    <li class="flex items-center text-sm text-gray-600">• No DB restoration backfile</li>
                    <li class="flex items-center text-sm text-gray-600">• Daily DB refresh</li>
                </ul>
                <button
                    class="w-full border border-red-500 text-red-500 rounded-md py-2 hover:bg-red-50 transition-colors">
                    Activate
                </button>
            </div>
        </div>
    </div>

    <script>
        // Toggle between monthly and yearly plans
        const monthlyButton = document.querySelector('button:first-of-type');
        const yearlyButton = document.querySelector('button:last-of-type');
        const monthlyPlans = document.getElementById('monthly-plans');
        const yearlyPlans = document.getElementById('yearly-plans');

        monthlyButton.addEventListener('click', () => {
            monthlyButton.classList.add('bg-red-500', 'text-white');
            yearlyButton.classList.remove('bg-red-500', 'text-white');
            monthlyPlans.classList.remove('hidden');
            yearlyPlans.classList.add('hidden');
        });

        yearlyButton.addEventListener('click', () => {
            yearlyButton.classList.add('bg-red-500', 'text-white');
            monthlyButton.classList.remove('bg-red-500', 'text-white');
            yearlyPlans.classList.remove('hidden');
            monthlyPlans.classList.add('hidden');
        });
    </script>


@endsection
