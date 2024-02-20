<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $car->brand }} {{ $car->model }}</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto p-8">
        <div class="max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-auto" src="{{ asset('images/'.$car->photo) }}" alt="{{ $car->brand }} {{ $car->model }}">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">{{ $car->brand }} {{ $car->model }}</h2>
                <p class="text-gray-700 mb-2"><strong>Year:</strong> {{ $car->year }}</p>
                <p class="text-gray-700 mb-2"><strong>Price:</strong> ${{ number_format($car->price) }}</p>
                <p class="text-gray-700 mb-2"><strong>Description:</strong> {{ $car->description }}</p>
                <p class="text-gray-700 mb-2"><strong>Seller :</strong> {{ $car->user_id }}</p>
                <a href="{{ route('cars.edit', $car->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </div>
        </div>
    </div>
</body>

</html>
