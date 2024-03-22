@extends('layouts.app')

@section('title', 'Welcome to My Website')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="bg-orange-500 text-white py-10 px-6 mb-6 rounded-lg shadow-md">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">Welcome to My Website</h1>
            <p class="text-lg md:text-xl mb-8">Welcome to your essential companion for mastering advanced communication with AI. Discover our unique chatbots designed for diverse interactions.</p>
            <a href="{{ route('about') }}" class="bg-white text-orange-500 font-bold py-2 px-6 rounded-full uppercase tracking-wide shadow-lg hover:bg-gray-100 hover:text-orange-600 transition duration-300">Learn More About Us</a>
        </div>

        <!-- Features Section -->
        <div class="bg-white py-8 px-6 rounded-lg shadow-md">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-12 text-center text-gray-800">Our AI models</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4 text-orange-600">ChatGPT</h3>
                        <p class="text-gray-700">Our first model harnesses the power of ChatGPT's API, a cutting-edge natural language processing technology developed by OpenAI. By leveraging this API, our chatbot system gains access to a vast repository of knowledge and language understanding capabilities. ChatGPT's API enables seamless interactions with users, providing intelligent responses and engaging conversations. With its advanced language modeling capabilities, this model serves as the foundation for our chatbot system, ensuring accuracy, relevance, and natural communication with users.</p>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4 text-orange-600">Model 2</h3>
                        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4 text-orange-600">Model 3</h3>
                        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-orange-500 text-white py-10 text-center rounded-lg shadow-md mt-8">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-8">Ready to Get Started?</h2>
                <p class="mb-6">Explore the future of learning with our AI-driven tools.</p>
                <a href="{{ route('register') }}" class="bg-white text-orange-500 font-bold py-2 px-6 rounded-full uppercase tracking-wide shadow-lg hover:bg-gray-100 hover:text-orange-600 transition duration-300">Sign Up Now</a>
            </div>
    </div>
@endsection

