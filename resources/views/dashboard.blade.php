<x-app-layout>
    <x-slot name="header">
            <div class="max-w-4xl mx-auto text-left">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">Chatbot Selection</h1>
                <p class="text-lg md:text-xl mb-8">Choose your chatbot companion for a tailored interaction and learning experience.</p>
            </div>
    </x-slot>

    @section('content')
    <div class="py-8 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 rounded-lg shadow-md px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">Choose Your Chatbot</h2>
            <div class="grid md:grid-cols-3 gap-12">
                <a href="{{ route('chatone') }}" class="bg-white rounded-lg shadow p-6 block text-gray-800 hover:bg-orange-100 transition ease-in-out duration-300">
                    <h3 class="text-xl font-semibold mb-4">ChatGPT's API</h3>
                    <p>Our first model harnesses the power of ChatGPT's API, a cutting-edge natural language processing technology developed by OpenAI. By leveraging this API, our chatbot system gains access to a vast repository of knowledge and language understanding capabilities. ChatGPT's API enables seamless interactions with users, providing intelligent responses and engaging conversations. With its advanced language modeling capabilities, this model serves as the foundation for our chatbot system, ensuring accuracy, relevance, and natural communication with users.</p>
                </a>
                <a href="{{ route('chattwo') }}" class="bg-white rounded-lg shadow p-6 block text-gray-800 hover:bg-orange-100 transition ease-in-out duration-300">
                    <h3 class="text-xl font-semibold mb-4">Chatbot two</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio aenean sed adipiscing diam. Tristique magna sit amet purus gravida quis blandit turpis. Nunc vel risus commodo viverra maecenas accumsan. Sed odio morbi quis commodo odio aenean. Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Augue mauris augue neque gravida. Egestas erat imperdiet sed euismod nisi porta lorem. Interdum velit laoreet id donec. Bibendum enim facilisis gravida neque convallis a. Urna molestie at elementum eu facilisis. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit. Imperdiet dui accumsan sit amet nulla facilisi.</p>
                </a>
                <a href="{{ route('chatthree') }}" class="bg-white rounded-lg shadow p-6 block text-gray-800 hover:bg-orange-100 transition ease-in-out duration-300">
                    <h3 class="text-xl font-semibold mb-4">Chatbot three</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio aenean sed adipiscing diam. Tristique magna sit amet purus gravida quis blandit turpis. Nunc vel risus commodo viverra maecenas accumsan. Sed odio morbi quis commodo odio aenean. Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Augue mauris augue neque gravida. Egestas erat imperdiet sed euismod nisi porta lorem. Interdum velit laoreet id donec. Bibendum enim facilisis gravida neque convallis a. Urna molestie at elementum eu facilisis. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit. Imperdiet dui accumsan sit amet nulla facilisi.</p>
                </a>
            </div>
            <div class="h-8"></div>
        </div>
    </div>
    @endsection

    @section('footer')
    <footer class="bg-orange-500 text-white py-10 text-center mt-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">Join Us Journey on This</h2>
            <p>Are you ready to explore the future of learning? Whether you're a student eager to learn, a teacher interested in AI, or someone passionate about education technology, we'd love to hear from you.</p>
        </div>
    </footer>
    @endsection
</x-app-layout>
