@extends('layouts.app')

@section('title', 'About Our Project')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-900 text-white py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">About Our Project</h1>
            <p class="text-lg md:text-xl mb-8">Diving into the future of education with AI-driven learning experiences for computer science fundamentals.</p>
        </div>
    </section>

    <!-- Project Introduction -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Project Introduction</h2>
            <p class="text-gray-700 mb-4">Our project, developed as part of a fourth-year computer systems curriculum at the University of Limerick, aims to revolutionize how first-year computer science students learn complex subjects such as lambda calculus and DrRacket programming. By leveraging the capabilities of AI, including ChatGPT and two other fine-tuned chatbots, we offer an interactive and adaptive learning experience that caters to the individual needs of each student.</p>
        </div>
    </section>

    <!-- Goals and Objectives -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Goals and Objectives</h2>
            <p class="text-gray-700 mb-4">The primary goal of our project is to provide an accessible, engaging, and effective learning platform that supports students in mastering foundational computer science concepts. Through the integration of AI technologies, we aim to:</p>
            <ul class="list-disc pl-5 mb-4 text-gray-700">
                <li>Enhance understanding of complex topics through interactive learning sessions.</li>
                <li>Offer personalized feedback and guidance to improve student outcomes.</li>
                <li>Promote self-paced learning, allowing students to explore topics at their own speed.</li>
                <li>Bridge the gap between theoretical knowledge and practical application.</li>
            </ul>
        </div>
    </section>

    <!-- About the Creator -->
    <section class="bg-gray-100 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">About the Creator</h2>
            <p class="text-gray-700 mb-4">This project is the brainchild of a passionate fourth-year computer systems student at the University of Limerick, dedicated to leveraging technology to enhance educational resources. With a keen interest in AI and its potential to transform learning, the project seeks to make advanced computer science topics accessible and engaging for all students.</p>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-blue-900 text-white py-20 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">Join Us on This Journey</h2>
            <p class="mb-8">Are you ready to explore the future of learning? Whether you're a student eager to learn, a teacher interested in AI, or someone passionate about education technology, we'd love to hear from you.</p>
            <a href="/contact" class="bg-white text-blue-900 font-bold py-3 px-8 rounded-full uppercase tracking-wide shadow-lg hover:bg-gray-100 hover:text-blue-900 transition duration-300">Get in Touch</a>
        </div>
    </section>
@endsection
