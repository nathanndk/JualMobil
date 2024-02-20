<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management System - Create New Car</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 dark:bg-gray-800 overflow-hidden">
    <div class="flex flex-col h-screen">
        <header class="flex items-center justify-between h-14 lg:h-[60px] px-6 border-b bg-gray-100 dark:bg-gray-800 w-full">
            <a href="#" class="lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
                <span class="sr-only">Menu</span>
            </a>
        </header>
        <main class="flex-1 flex justify-center items-center overflow-auto">
            <div class="max-w-md w-full bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg p-6">
                <h1 class="text-2xl lg:text-3xl font-semibold mb-4">Add New Car</h1>
                <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label for="brand" class="text-base font-medium text-gray-700 dark:text-gray-300">Brand</label>
                            <input type="text" name="brand" id="brand" autocomplete="brand" required class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 dark:border-gray-700 rounded-md">
                        </div>
                        <div>
                            <label for="model" class="text-base font-medium text-gray-700 dark:text-gray-300">Model</label>
                            <input type="text" name="model" id="model" autocomplete="model" required class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 dark:border-gray-700 rounded-md">
                        </div>
                        <div>
                            <label for="year" class="text-base font-medium text-gray-700 dark:text-gray-300">Year</label>
                            <input type="number" name="year" id="year" autocomplete="year" required class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 dark:border-gray-700 rounded-md">
                        </div>
                        <div>
                            <label for="price" class="text-base font-medium text-gray-700 dark:text-gray-300">Price</label>
                            <input type="number" name="price" id="price" autocomplete="price" required class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 dark:border-gray-700 rounded-md">
                        </div>
                        <div>
                            <label for="description" class="text-base font-medium text-gray-700 dark:text-gray-300">Description</label>
                            <textarea name="description" id="description" autocomplete="description" required class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 dark:border-gray-700 rounded-md"></textarea>
                        </div>
                        <div>
                            <label for="photo" class="text-base font-medium text-gray-700 dark:text-gray-300">Photo</label>
                            <input type="file" name="photo" id="photo" autocomplete="photo" required class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-base border-gray-300 dark:border-gray-700 rounded-md">
                        </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="w-full px-4 py-2 bg-black text-white font-semibold rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-black-400 focus:ring-opacity-50">Submit</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
