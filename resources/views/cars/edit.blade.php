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
           @include('cars.shared.detail_edit_card')
        </main>
    </div>
</body>
</html>
