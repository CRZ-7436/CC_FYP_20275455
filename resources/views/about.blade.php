@extends('layouts.app')

@section('title', 'About Our Project')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-900 text-white py-10">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">About Our Project</h1>
            <p class="text-lg md:text-xl mb-8">Diving into the future of education with AI-driven learning experiences for computer science fundamentals.</p>
        </div>
    </section>

    <!-- Project Introduction -->
    <section class="py-10 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">About the Project</h2>
            <p class="text-gray-700 mb-4">Our fourth-year computer systems project aims to revolutionize the learning experience for first-year Computer Science students by leveraging advanced chatbot technology. Drawing inspiration from ChatGPT, our project introduces three distinct chatbots, each tailored to cater to the unique needs of novice learners. These chatbots include one based on GPT architecture and two fine-tuned variants, all equipped with the ability to engage students in discussions related to lambda calculus and DrRacket, fundamental topics in computer science education.</p>
            <p class="text-gray-700 mb-4">Central to our project is the integration of a Large Language Model (LLM) like ChatGPT. By training the chatbots using data from the CS4221 module, we ensure their proficiency in addressing specific queries and concerns relevant to the curriculum. Furthermore, our chatbots boast the innovative capability to generate diagrams using LaTeX, employing packages such as "forest" or "tikz" to visually enhance the learning experience. Through rigorous training and development, our goal is to offer a diverse range of chatbots, each with its own distinct personality while maintaining a consistent base of knowledge and skills.</p>
        </div>
    </section>

    <!-- Goals and Objectives -->
    <section class="py-10 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Goals and Objectives</h2>
            <p class="text-gray-700 mb-4">The primary objective of our project is to provide first-year Computer Science students with an interactive and engaging learning tool that facilitates comprehension of complex concepts such as lambda calculus and DrRacket. To achieve this, we have set the following goals:</p>
            <ul class="list-disc pl-5 mb-4 text-gray-700">
                <li><strong>Integration with Large Language Model (LLM):</strong> Successfully integrate ChatGPT or a similar LLM to serve as the backbone of our chatbot system, ensuring access to vast knowledge resources.</li>
                <li><strong>Curriculum Alignment:</strong> Train the chatbots using data from the CS4221 module to ensure relevance and accuracy in addressing students' questions and challenges.</li>
                <li><strong>Diagram Generation:</strong> Implement functionality for generating diagrams through LaTeX, utilizing packages like "forest" or "tikz" to enhance visual representation of concepts.</li>
                <li><strong>Personality Diversity:</strong> Develop multiple chatbot personalities to cater to varying preferences and learning styles among students, while ensuring consistency in knowledge and skills across all variants.</li>
            </ul>
        </div>
    </section>

    <!-- About the Creator -->
    <section class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">About the Creator</h2>
            <p class="text-gray-700 mb-4">I'm Carlos Cruz, a fourth-year Computer Systems student deeply passionate about enhancing educational experiences through technology. If you have any questions or feedback about our project, feel free to reach out to me:</p>
            <ul class="list-disc pl-5 mb-4 text-gray-700">
                <li><strong>School Email:</strong> 20275455@studentmail.ul.ie</li>
                <li><strong>work Email:</strong> carlosmcruz7436@gmail.com</li>
            </ul>
            <p class="text-gray-700">Your inquiries are invaluable in refining and improving our chatbot system to better serve the needs of first-year Computer Science students. Thank you for your interest and support!</p>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-blue-900 text-white py-1 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">Join Us on This Journey</h2>
            <p class="mb-8">Are you ready to explore the future of learning? Whether you're a student eager to learn, a teacher interested in AI, or someone passionate about education technology, we'd love to hear from you.</p>
        </div>
    </section>
@endsection
