<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management System</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <section class="w-full py-12 md:py-24 lg:py-32 xl:py-48 bg-gradient-to-r from-blue-400 to-purple-600">
        <div class="container px-4 md:px-6">
            <div class="flex flex-col items-center space-y-4 text-center">
                {{-- <img src="car_image.jpg" alt="Car Image" class="w-64 md:w-96 rounded-lg shadow-lg"> --}}
                <div class="space-y-2 text-white">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                        Welcome to JualMobil
                    </h1>
                    <p class="mx-auto max-w-[700px] md:text-xl">
                        Find your dream car and experience seamless buying and selling with JualMobil. We provide the best selection of cars with transparent pricing and easy transactions.
                    </p>
                    @if (Route::has('login'))
                    <div class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium bg-white text-gray-800 hover:bg-gray-200 h-10 px-6 py-2">
                        @auth
                            <a href="{{ route('public.home') }}" class="btn btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-secondary">Log in</a>
                        @endauth
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('register') }}" class="btn btn-secondary">Don't have an account? Make one</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto py-12">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Why Choose JualMobil?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-2">Wide Selection</h3>
                <p class="text-gray-700">Choose from a wide range of top-quality cars from various brands and models.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-2">Transparent Pricing</h3>
                <p class="text-gray-700">We offer transparent pricing with no hidden fees, ensuring a fair deal for every customer.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-2">Easy Transactions</h3>
                <p class="text-gray-700">Experience hassle-free buying and selling with our easy and secure transaction process.</p>
            </div>
        </div>
    </section>

    <section class="bg-gray-200 py-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">What Our Customers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-700">"I found my dream car on JualMobil and the buying process was so smooth. Highly recommended!"</p>
                    <p class="text-gray-600 mt-4">- John Doe</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-700">"JualMobil offers the best prices and a great selection of cars. Will definitely buy from them again!"</p>
                    <p class="text-gray-600 mt-4">- Jane Smith</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-gray-700">"The customer service at JualMobil is outstanding. They helped me find the perfect car within my budget."</p>
                    <p class="text-gray-600 mt-4">- David Wilson</p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
