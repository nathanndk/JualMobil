<div class="container mx-auto px-4">
    <div class="-mx-4 flex flex-wrap items-center mb-6">
        <div class="px-4 w-full md:w-10/12">
            <h2 class="font-medium mb-1 text-primary-500 text-xl">Our Top Cars</h2>
            <h3 class="capitalize font-bold mb-4 text-4xl text-gray-900">Cars for all your needs</h3>
            <div class="bg-primary-500 mb-6 pb-1 w-2/12"></div>
        </div>
    </div>

    <div class="-mx-3 flex flex-wrap justify-center mb-12">
        @for ($i = 0; $i < min(6, count($cars)); $i++)
            @php
                $car = $cars[$i];
            @endphp
            <div class="p-3 w-full md:w-6/12 lg:w-4/12">
                <div class="bg-white border shadow-md text-gray-500">
                    <a href="{{ route('cars.show', $car->id) }}">
                        <img class="w-full h-64 object-cover rounded-lg card-image" src="{{ asset('storage/'.$car->photo) }}" alt="{{ $car->brand }} {{ $car->model }}" style="max-width: 100%; max-height: 300px;">
                    </a>
                    <div class="p-6">
                        <h4 class="font-bold mb-2 text-gray-900 text-xl">
                            <a href="{{ route('cars.show', $car->id) }}" class="hover:text-gray-500">{{ $car->name }}</a>
                        </h4>
                        <p class="mb-2 text-sm">{{ Str::limit($car->description, 100) }}</p>
                        <hr class="border-gray-200 my-4">
                        <div class="flex items-center justify-between">
                            <div class="inline-flex items-center py-1 space-x-1">
                                <span>{{ $car->rating }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em" class="text-primary-500">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
                                    </g>
                                </svg>
                                <span>({{ $car->reviews }} reviews)</span>
                            </div>
                            <p class="font-bold text-gray-900">${{ $car->price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="text-center">
        <a href="/cars" class="bg-primary-500 hover:bg-primary-600 inline-block px-6 py-2 text-white">View All Cars</a>
    </div>
</div>
