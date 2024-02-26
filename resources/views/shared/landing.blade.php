<form action="{{ route('cars.index') }}" method="GET">
<div class="container mx-auto pb-24 pt-72 px-4">
    <div class="-mx-4 flex flex-wrap items-center space-y-6 lg:space-y-0">
        <div class="px-4 w-full md:w-9/12 xl:w-7/12 2xl:w-6/12">
            <p class="font-bold font-sans mb-1 text-2xl text-white">Car Dealership</p>
            <h1 class="font-bold mb-6 text-5xl text-white md:leading-tight lg:leading-tight lg:text-6xl">Find your <span class="text-primary-500">Dream Car</span> and <span class="text-primary-500">Experience</span> Luxury</h1>
            <div class="bg-white p-6">
                <h2 class="font-bold mb-2 text-gray-900 text-xl">Let&apos;s find your ideal car</h2>
                <form>
                    <div class="-mx-2 flex flex-wrap items-center">
                        <div class="p-1 w-full sm:flex-1">
            <input name="search" value="{{ request('search', '') }}" id="search" class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full bg-white shadow-none appearance-none pl-8 md:w-2/3 lg:w-1/3 dark:bg-gray-950 form-control" placeholder="Search brand or model..." type="text">
                        </div>
                        <div class="p-1 text-right w-full sm:flex-initial sm:w-auto">
                            <a href="#" class="bg-primary-500 hover:bg-primary-600 inline-block px-6 py-2 text-center text-white"><span>Search</span></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
