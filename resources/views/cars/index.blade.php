<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management System</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
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

        @include('cars.shared.search_bar')
        @include('cars.shared.avatar')
        </header>
        <main class="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-6">
            <div class="border rounded-lg p-4">
                <div class="flex items-center gap-4">
                    <h1 class="font-semibold text-lg md:text-2xl">Cars</h1>
                    <a href="/cars/create" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-auto">+</a>
                </div>
                <div class="grid gap-4 mt-4">
                  @include('cars.shared.car_card')

                </div>
            </div>
        </main>
    </div>
</body>

</html>
