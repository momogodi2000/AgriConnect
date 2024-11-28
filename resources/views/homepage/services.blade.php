@extends('layout.layout')

@section('content')
<!-- Services Hero Section -->
<section class="relative bg-white py-20 overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-5xl font-bold text-green-700 mb-6 animate-fade-in-down">
                {{ __('Comprehensive Agricultural Services') }}
            </h1>
            <p class="text-xl text-gray-700 mb-10 animate-fade-in-up">
                {{ __('Tailored digital solutions to empower farmers, connect markets, and transform agricultural productivity in Cameroon.') }}
            </p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8" id="services-grid">
            <!-- Market Connection Service -->
            <div class="service-card bg-white rounded-lg shadow-lg p-8 transform transition hover:scale-105 hover:shadow-xl">
                <div class="service-icon mb-6">
                    <svg class="w-16 h-16 text-green-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-green-700 text-center mb-4">
                    {{ __('Market Connection') }}
                </h3>
                <p class="text-gray-600 text-center mb-6">
                    {{ __('Direct marketplace connecting farmers with national and regional buyers, eliminating intermediaries.') }}
                </p>
                <ul class="space-y-3 text-gray-700 mb-6">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Real-time market pricing') }}
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Buyer matching algorithm') }}
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Transparent transaction tracking') }}
                    </li>
                </ul>
                <button class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition">
                    {{ __('Explore Marketplace') }}
                </button>
            </div>

            <!-- Financial Services -->
            <div class="service-card bg-white rounded-lg shadow-lg p-8 transform transition hover:scale-105 hover:shadow-xl">
                <div class="service-icon mb-6">
                    <svg class="w-16 h-16 text-green-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-green-700 text-center mb-4">
                    {{ __('Financial Services') }}
                </h3>
                <p class="text-gray-600 text-center mb-6">
                    {{ __('Comprehensive financial support and microfinancing tailored for agricultural entrepreneurs.') }}
                </p>
                <ul class="space-y-3 text-gray-700 mb-6">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Microloans for farmers') }}
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Investment tracking') }}
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Subsidy management') }}
                    </li>
                </ul>
                <button class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition">
                    {{ __('Financial Solutions') }}
                </button>
            </div>

            <!-- Technology Support -->
            <div class="service-card bg-white rounded-lg shadow-lg p-8 transform transition hover:scale-105 hover:shadow-xl">
                <div class="service-icon mb-6">
                    <svg class="w-16 h-16 text-green-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-green-700 text-center mb-4">
                    {{ __('Technology Support') }}
                </h3>
                <p class="text-gray-600 text-center mb-6">
                    {{ __('Digital tools and technological support to modernize agricultural practices and management.') }}
                </p>
                <ul class="space-y-3 text-gray-700 mb-6">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Crop management tools') }}
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Weather prediction') }}
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        {{ __('Agricultural analytics') }}
                    </li>
                </ul>
                <button class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition">
                    {{ __('Tech Solutions') }}
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-green-700 mb-4">
                {{ __('Additional Agricultural Support') }}
            </h2>
            <p class="text-xl text-gray-600">
                {{ __('Comprehensive solutions beyond our core services') }}
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="additional-services">
            <div class="bg-gray-100 p-6 rounded-lg hover:shadow-md transition group">
                <h3 class="text-2xl font-semibold text-green-700 mb-4">
                    {{ __('Training Programs') }}
                </h3>
                <p class="text-gray-600 mb-4">
                    {{ __('Professional development and skill enhancement for rural farmers.') }}
                </p>
                <a href="#" class="text-green-600 hover:text-green-800 transition flex items-center">
                    {{ __('Learn More') }}
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Similar cards for additional services -->
        </div>
    </div>
</section>

<!-- JavaScript for Interactions -->
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.classList.add('animate-pulse');
        });
        
        card.addEventListener('mouseleave', function() {
            this.classList.remove('animate-pulse');
        });
    });

    // Optional: Add smooth scroll to service sections
    const serviceButtons = document.querySelectorAll('.service-card button');
    serviceButtons.forEach(button => {
        button.addEventListener('click', function() {
            window.scrollTo({
                top: document.getElementById('additional-services').offsetTop,
                behavior: 'smooth'
            });
        });
    });
});
</script>
@endpush
@endsection