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
            <div class="w-full flex-1">
                <form action="/cars/search" method="GET">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-2.5 top-2.5 h-4 w-4 text-gray-500 dark:text-gray-400">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                        <input name="query" class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full bg-white shadow-none appearance-none pl-8 md:w-2/3 lg:w-1/3 dark:bg-gray-950" placeholder="Search products..." type="search">
                    </div>
                </form>
            </div>
            <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground rounded-full border border-gray-200 w-8 h-8 dark:border-gray-800" type="button" id="radix-:r4o:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
                <img src="/placeholder.svg" width="32" height="32" class="rounded-full" alt="Avatar" style="aspect-ratio: 32 / 32; object-fit: cover;">
                <span class="sr-only">Toggle user menu</span>
            </button>
        </header>
        <main class="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-6">
            <div class="border rounded-lg p-4">
                <div class="flex items-center gap-4">
                    <h1 class="font-semibold text-lg md:text-2xl">Cars</h1>
                    <a href="/cars/create" class="ml-auto underline">Add new car</a>
                </div>
                <div class="grid gap-4 mt-4">
                    @foreach ($cars as $car)
                    <a href="{{ route('cars.show', $car->id) }}" class="flex items-center gap-4 rounded-lg border p-4 transition-all hover:bg-gray-100 dark:hover:bg-gray-800">
                        <img class="w-1/4 h-sm" src="{{ asset('images/'.$car->photo) }}" alt="{{ $car->brand }} {{ $car->model }}">

                        <div class="grid gap-1.5">
                            <h2 class="font-semibold text-lg">{{ $car->model }}</h2>
                            <p class="text-sm leading-none">{{ $car->type }}</p>
                            <p class="font-semibold">${{ $car->price }}</p>
                        </div>
                    </a>
                @endforeach

                </div>
            </div>
        </main>
    </div>
</body>

</html>
