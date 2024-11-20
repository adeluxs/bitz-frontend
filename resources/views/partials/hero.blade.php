<section class="relative h-96 overflow-hidden">
    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0">
        <img src="{{ asset('/images/business.jpg') }}" alt="Background" class="w-full h-full object-cover rounded-lg">
        <div class="absolute inset-0 bg-gray-900/75 rounded-lg"></div>
    </div>

    {{-- Content Container --}}
    <div class="relative h-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col justify-center items-center h-full text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Explore the standout features
            </h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto text-gray-200">
                Connect all marketing data with our attribution platform to boost ROI by 15-44%. Measure ROI across
                channels, campaigns, keywords, and creatives.
            </p>
        </div>
    </div>
</section>
