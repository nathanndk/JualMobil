<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management System - Create New Car</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 dark:bg-gray-800">
    <div class="flex flex-col">
        <header class="flex h-14 lg:h-[60px] items-center gap-4 border-b bg-gray-100/40 px-6 dark:bg-gray-800/40">
            <a class="lg:hidden" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                    <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path>
                    <path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"></path>
                    <path d="M12 3v6"></path>
                </svg>
                <span class="sr-only">Home</span>
            </a>
        </header>
        <main class="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-6">
            <div class="border rounded-lg p-4 bg-white dark:bg-gray-900">
                <h1 class="font-semibold text-lg md:text-2xl">Add New Car</h1>
                <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                    @csrf
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border border-gray-300 dark:border-gray-700 rounded-md p-2">
                            <label for="brand" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Brand</label>
                            <input type="text" name="brand" id="brand" autocomplete="brand" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="border border-gray-300 dark:border-gray-700 rounded-md p-2">
                            <label for="model" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Model</label>
                            <input type="text" name="model" id="model" autocomplete="model" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="border border-gray-300 dark:border-gray-700 rounded-md p-2">
                            <label for="year" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Year</label>
                            <input type="number" name="year" id="year" autocomplete="year" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="border border-gray-300 dark:border-gray-700 rounded-md p-2">
                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Price</label>
                            <input type="number" name="price" id="price" autocomplete="price" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="border border-gray-300 dark:border-gray-700 rounded-md p-2">
                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                            <textarea name="description" id="description" autocomplete="description" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <div class="border border-gray-300 dark:border-gray-700 rounded-md p-2">
                            <label for="photo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Photo</label>
                            <input type="file" name="photo" id="photo" autocomplete="photo" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <!-- Add other fields as needed -->
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-6">Submit</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
