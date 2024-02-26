<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>

           <a href="/cars" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium bg-white text-gray-800 hover:bg-gray-200 h-10 px-6 py-2">
                        Explore Cars
                    </a>
    </div>
</x-app-layout>
