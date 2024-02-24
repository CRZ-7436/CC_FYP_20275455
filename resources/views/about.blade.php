@extends('layouts.app')

@section('title', 'About the Project')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-blue-900 mb-4">About the Project</h1>
    <p class="mb-4">I am a fourth-year computer systems student studying at the University of Limerick. This project is for my fourth-year project and aims to leverage AI to create a learning resource that uses ChatGPT and two other fine-tuned chatbots.</p>
    <p class="mb-4">The primary goal of this project is to assist first-year computer science students in mastering lambda calculus and DrRacket programming. By integrating advanced AI technologies, we aim to provide an innovative and interactive learning experience that adapts to the individual needs of students.</p>
    
    <h2 class="text-3xl font-bold text-blue-900 mb-4">My Details</h2>
    <p>If you have any questions or would like to learn more about this project, please feel free to reach out.</p>
    <ul class="list-disc pl-5 mb-4">
        <li><strong>Name:</strong> [Your Name]</li>
        <li><strong>Email:</strong> [Your Email]</li>
        <li><strong>University:</strong> University of Limerick</li>
        <li><strong>Course:</strong> Computer Systems</li>
        <li><strong>Project:</strong> AI Leveraged Learning Resource</li>
    </ul>

    <a href="/" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Return Home</a>
</div>
@endsection

