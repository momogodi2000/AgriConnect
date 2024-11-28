@extends('layout.layout')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-green-50 to-green-100 dark:from-gray-900 dark:to-green-900 min-h-screen flex items-center">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6 animate-fade-in-left">
            <h1 class="text-4xl md:text-5xl font-bold text-green-700 leading-tight">
                {{ __('Revolutionizing Rural Agriculture in Cameroon') }}
            </h1>
            <p class="text-xl text-gray-700 dark:text-gray-300">
                {{ __('Connecting rural farmers in remote zones with markets, technology, and economic opportunities through innovative digital solutions.') }}
            </p>
            
            <div class="flex space-x-4">
                <a href="#" class="bg-green-600 text-white px-6 py-3 rounded-full hover:bg-green-700 transition transform hover:scale-105">
                    {{ __('Join AgriConnect') }}
                </a>
                <a href="#" class="border border-green-600 text-green-600 px-6 py-3 rounded-full hover:bg-green-50 dark:hover:bg-green-900 transition transform hover:scale-105">
                    {{ __('Learn More') }}
                </a>
            </div>
        </div>

        <div class="relative animate-fade-in-right">
            <img src="/cameroon-agriculture.svg" alt="{{ __('Cameroon Agriculture') }}" class="w-full rounded-lg shadow-2xl">
            <div class="absolute -top-10 -right-10 bg-white dark:bg-gray-800 p-4 rounded-lg shadow-xl">
                <h4 class="text-xl font-bold text-green-600">{{ __('Our Impact') }}</h4>
                <p class="text-gray-600 dark:text-gray-300">{{ __('500+ Rural Farmers Connected') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Agricultural Diversity Section -->
<section class="container mx-auto px-4 py-16">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-green-700 mb-4">
            {{ __('Cameroon\'s Agricultural Diversity') }}
        </h2>
        <p class="text-xl text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
            {{ __('From the volcanic soils of the West to the coastal plantations, Cameroon offers a rich agricultural landscape with unique regional specialties.') }}
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition">
            <h3 class="text-2xl font-bold text-green-600 mb-4">{{ __('Coastal Regions') }}</h3>
            <p class="text-gray-600 dark:text-gray-300">
                {{ __('Cocoa, banana, and palm oil production. Rich tropical soils supporting diverse crops.') }}
            </p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition">
            <h3 class="text-2xl font-bold text-green-600 mb-4">{{ __('Highland Zones') }}</h3>
            <p class="text-gray-600 dark:text-gray-300">
                {{ __('Coffee, potatoes, and vegetables. Cool climate zones with high agricultural productivity.') }}
            </p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition">
            <h3 class="text-2xl font-bold text-green-600 mb-4">{{ __('Savanna Regions') }}</h3>
            <p class="text-gray-600 dark:text-gray-300">
                {{ __('Maize, cotton, and livestock. Extensive agricultural lands with significant economic potential.') }}
            </p>
        </div>
    </div>
</section>

<!-- Why AgriConnect Section -->
<section class="bg-gray-100 dark:bg-gray-800 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-green-700 mb-4">
                {{ __('Why Choose AgriConnect?') }}
            </h2>
            <p class="text-xl text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
                {{ __('We specifically design our platform to address the unique challenges faced by rural farmers in remote Cameroonian zones.') }}
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-900 p-8 rounded-lg text-center">
                <svg class="w-16 h-16 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-4 text-green-600">{{ __('Market Access') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('Connect directly with buyers, eliminating exploitative intermediaries.') }}
                </p>
            </div>
            <div class="bg-white dark:bg-gray-900 p-8 rounded-lg text-center">
                <svg class="w-16 h-16 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold mb-4 text-green-600">{{ __('Fair Pricing') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        {{ __('Transparent pricing mechanisms and government-backed price regulation.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Supporting Agricultural Associations -->
    <section class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-green-700 mb-4">
                {{ __('Agricultural Support Ecosystem') }}
            </h2>
            <p class="text-xl text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
                {{ __('Collaborating with key agricultural associations to strengthen rural farming communities in Cameroon.') }}
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold text-green-600 mb-4">{{ __('ACFA') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('Agricultural Cooperative Farmers Association - Supporting small-scale farmers with training and resources.') }}
                </p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold text-green-600 mb-4">{{ __('MIDENO') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('Micro Development Network - Providing microfinance and agricultural support in rural zones.') }}
                </p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold text-green-600 mb-4">{{ __('CAMSEED') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('Cameroon Seed Development - Improving agricultural productivity through quality seed distribution.') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="bg-gray-100 dark:bg-gray-800 py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-green-700 mb-4">
                    {{ __('Voices from Our Community') }}
                </h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
                    {{ __('Real stories from farmers who have transformed their livelihoods through AgriConnect.') }}
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md">
                    <p class="italic mb-4 text-gray-600 dark:text-gray-300">
                        "{{ __('AgriConnect helped me connect with buyers beyond my local market, increasing my income by 40%.') }}"
                    </p>
                    <div class="flex items-center">
                        <img src="/farmer-1.jpg" alt="Farmer Testimonial" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-green-600">{{ __('Jean Dupont') }}</h4>
                            <p class="text-sm text-gray-500">{{ __('Maize Farmer, West Region') }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md">
                    <p class="italic mb-4 text-gray-600 dark:text-gray-300">
                        "{{ __('The platform\'s subsidy information was a game-changer for my small coffee plantation.') }}"
                    </p>
                    <div class="flex items-center">
                        <img src="/farmer-2.jpg" alt="Farmer Testimonial" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-green-600">{{ __('Marie Ngassa') }}</h4>
                            <p class="text-sm text-gray-500">{{ __('Coffee Producer, Northwest Region') }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md">
                    <p class="italic mb-4 text-gray-600 dark:text-gray-300">
                        "{{ __('AgriConnect brought technology to our remote village, making agricultural marketing so much easier.') }}"
                    </p>
                    <div class="flex items-center">
                        <img src="/farmer-3.jpg" alt="Farmer Testimonial" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-green-600">{{ __('Pierre Momo') }}</h4>
                            <p class="text-sm text-gray-500">{{ __('Vegetable Farmer, Adamawa Region') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
<section class="container mx-auto px-4 py-16">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-green-700 mb-4">
            {{ __('About AgriConnect') }}
        </h2>
        <p class="text-xl text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
            {{ __('Bridging technology and agriculture to empower rural farmers and transform agricultural marketing in Cameroon.') }}
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h3 class="text-3xl font-bold text-green-600 mb-6">{{ __('Our Mission') }}</h3>
            <p class="text-gray-700 dark:text-gray-300 mb-4">
                {{ __('AgriConnect is dedicated to revolutionizing agricultural marketing by providing innovative digital solutions that connect rural farmers directly with markets, technology, and economic opportunities.') }}
            </p>
            <ul class="space-y-4 text-gray-600 dark:text-gray-300">
                <li class="flex items-center">
                    <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ __('Eliminate exploitative intermediaries') }}
                </li>
                <li class="flex items-center">
                    <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ __('Ensure fair and transparent pricing') }}
                </li>
                <li class="flex items-center">
                    <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    {{ __('Government Subvention application Easy') }}
                </li>
            </ul>
        </div>
        <div>
            <img src="/about-agriconnect.svg" alt="{{ __('AgriConnect Mission') }}" class="w-full rounded-lg shadow-xl">
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="bg-gray-100 dark:bg-gray-800 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-green-700 mb-4">
                {{ __('Benefits of Using AgriConnect') }}
            </h2>
            <p class="text-xl text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
                {{ __('Discover how our platform transforms agricultural marketing for farmers, buyers, and the agricultural ecosystem.') }}
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-900 p-8 rounded-lg text-center hover:shadow-xl transition">
                <svg class="w-16 h-16 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-4 text-green-600">{{ __('Financial Empowerment') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('Increase income by 30-50% through direct market access and fair pricing mechanisms.') }}
                </p>
            </div>
            <div class="bg-white dark:bg-gray-900 p-8 rounded-lg text-center hover:shadow-xl transition">
                <svg class="w-16 h-16 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-4 text-green-600">{{ __('Digital Empowerment') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('Access cutting-edge agricultural technologies and digital management tools.') }}
                </p>
            </div>
            <div class="bg-white dark:bg-gray-900 p-8 rounded-lg text-center hover:shadow-xl transition">
                <svg class="w-16 h-16 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-4 text-green-600">{{ __('Community Building') }}</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    {{ __('Join a network of supported farmers with access to training and resources.') }}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="container mx-auto px-4 py-16">
    <div class="grid md:grid-cols-2 gap-12">
        <div>
            <h2 class="text-4xl font-bold text-green-700 mb-6">{{ __('Contact AgriConnect') }}</h2>
            <p class="text-xl text-gray-700 dark:text-gray-300 mb-8">
                {{ __('Have questions or want to learn more about how AgriConnect can transform your agricultural business? Contact us today.') }}
            </p>
            
            <div class="space-y-6">
                <div class="flex items-center">
                    <svg class="w-8 h-8 text-green-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="text-gray-700 dark:text-gray-300">(+237) 652 345 678</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-8 h-8 text-green-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span class="text-gray-700 dark:text-gray-300">contact@agriconnect.cm</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-8 h-8 text-green-600 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-gray-700 dark:text-gray-300">Yaoundé, Cameroon</span>
                </div>
            </div>
        </div>
        
        <div>
            <form class="bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold text-green-600 mb-6">{{ __('Send Us a Message') }}</h3>
                <div class="space-y-4">
                    <input type="text" placeholder="{{ __('Full Name') }}" class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <input type="email" placeholder="{{ __('Email Address') }}" class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <textarea placeholder="{{ __('Your Message') }}" rows="4" class="w-full p-3 border border-gray-300 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                    <button type="submit" class="w-full bg-green-600 text-white p-3 rounded-lg hover:bg-green-700 transition">
                        {{ __('Send Message') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection