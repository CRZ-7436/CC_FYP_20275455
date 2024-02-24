<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Landing Page</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">

    <!-- Hero Section -->
    <section class="bg-blue-900 text-white py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">Welcome to My Website</h1>
            <p class="text-lg md:text-xl mb-8">Welcome to your essential companion for mastering lambda calculus and DrRacket programming, designed especially for first-year computer science students. Our innovative learning resource harnesses the power of AI to guide you through the fundamental concepts with ease and clarity.</p>
            <a href="/about" class="bg-white text-blue-900 font-bold py-2 px-6 rounded-full uppercase tracking-wide shadow-lg hover:bg-gray-100 hover:text-blue-900 transition duration-300">Learn More</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-12 text-center">Our Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-xl font-semibold mb-4">Feature 1</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-xl font-semibold mb-4">Feature 2</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-xl font-semibold mb-4">Feature 3</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-100 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-12 text-center">What People Are Saying</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <p class="text-gray-700">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                    <p class="text-gray-900 font-bold mt-4">- John Doe</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <p class="text-gray-700">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                    <p class="text-gray-900 font-bold mt-4">- Jane Smith</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-blue-900 text-white py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-8">Ready to Get Started?</h2>
            <a href="#" class="bg-white text-blue-900 font-bold py-3 px-8 rounded-full uppercase tracking-wide shadow-lg hover:bg-gray-100 hover:text-blue-900 transition duration-300">Sign Up Now</a>
        </div>
    </section>

</body>

</html>

