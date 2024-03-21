@extends('layouts.app')

@section('title', 'Welcome to My Website')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-900 text-white py-10">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">Welcome to My Website</h1>
            <p class="text-lg md:text-xl mb-8">Welcome to your essential companion for mastering lambda calculus and DrRacket programming, designed especially for first-year computer science students. Our innovative learning resource harnesses the power of AI to guide you through the fundamental concepts with ease and clarity.</p>
            <a href="/about" class="bg-white text-blue-900 font-bold py-2 px-6 rounded-full uppercase tracking-wide shadow-lg hover:bg-gray-100 hover:text-blue-900 transition duration-300">Learn More</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-12 text-center">Our AI models</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-xl font-semibold mb-4">ChatGPT</h3>
                    <p class="text-gray-700 text-justify">Our first model harnesses the power of ChatGPT's API, a cutting-edge natural language processing technology developed by OpenAI. By leveraging this API, our chatbot system gains access to a vast repository of knowledge and language understanding capabilities. ChatGPT's API enables seamless interactions with users, providing intelligent responses and engaging conversations. With its advanced language modeling capabilities, this model serves as the foundation for our chatbot system, ensuring accuracy, relevance, and natural communication with users</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-xl font-semibold mb-4">Model 2</h3>
                    <p class="text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-xl font-semibold mb-4">Model 3</h3>
                    <p class="text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-blue-900 text-white py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-8">Ready to Get Started?</h2>
            <a href="{{ route('signup.show') }}" class="bg-white text-blue-900 font-bold py-3 px-8 rounded-full uppercase tracking-wide shadow-lg hover:bg-gray-100 hover:text-blue-900 transition duration-300">Sign Up Now</a>
        </div>
    </section>
@endsection