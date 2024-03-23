<x-app-layout>
    <x-slot name="header">
            <div class="max-w-4xl mx-auto text-centre">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">Welcome to Chatbot Central</h1>
                <p class="text-lg md:text-xl mb-8">Explore our cutting-edge chatbots designed to revolutionize the way you learn and interact with information.</p>
            </div>
    </x-slot>

    @section('content')
    <div class="max-w-4xl mx-auto py-8 px-6">
        <h2 class="text-3xl text-gray-800 font-bold mb-6">Meet Our Chatbots</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Chatbot 1 -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">ChatGPT's API</h3>
                <p class="text-gray-700">Our first model harnesses the power of ChatGPT's API, a cutting-edge natural language processing technology developed by OpenAI. By leveraging this API, our chatbot system gains access to a vast repository of knowledge and language understanding capabilities. ChatGPT's API enables seamless interactions with users, providing intelligent responses and engaging conversations. With its advanced language modeling capabilities, this model serves as the foundation for our chatbot system, ensuring accuracy, relevance, and natural communication with users.</p>
            </div>

            <!-- Chatbot 2 -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Chatbot 2: The Code Companion</h3>
                <p class="text-gray-700">Your coding journey just got easier. Get instant help with coding concepts and debug with ease.</p>
            </div>

            <!-- Chatbot 3 -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Chatbot 3: The AI Whisperer</h3>
                <p class="text-gray-700">Explore the frontiers of AI with a bot designed to discuss and dissect the latest in AI advancements.</p>
            </div>
        </div>
    </div>
    @endsection

    @section('footer')
    <footer class="bg-orange-500 text-white py-10 text-center mt-12">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-6">Ready to embark on a revolutionary learning journey?</h2>
            <p class="mb-8">Join us today and transform the way you learn with our AI-powered chatbots.</p>
            <a href="{{ route('register') }}" class="bg-white text-orange-500 font-bold py-2 px-6 rounded-full uppercase tracking-wide shadow hover:bg-gray-100 hover:text-orange-600 transition duration-300">Sign Up Now</a>
        </div>
    </footer>
    @endsection
</x-app-layout>
