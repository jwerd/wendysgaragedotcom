@props(['title'])

<!-- Question Listing Item Card -->
<div class="bg-white rounded-lg shadow-sm hover:shadow-lg duration-500 px-2 sm:px-6 md:px-2 py-4 my-6">
    <div class="grid grid-cols-12 gap-2">
        <!-- Meta Column -->
        <div class="col-span-0 sm:col-span-2 text-center hidden sm:block">
            <img src="https://via.placeholder.com/350x250">
        </div>
        <div class="col-span-12 sm:col-start-3 sm:col-end-13 px-3 sm:px-0">
            <div class="mt-2">
                <a href="#" class="sm:text-sm md:text-md lg:text-lg text-gray-700 font-bold hover:underline">
                    {{$title}}
                </a>

                <div href="#" class="sm:text-sm md:text-md lg:text-lg text-xl text-blue-500 font-bold">
                    Price: 100
                </div>

                <p class="mt-2 text-gray-600 text-sm md:text-md">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Tempora expedita dicta totam totam gul koparam doloremque. Excepturi iste iusto eos enim
                    reprehenderit nisi, accusamus...
                </p>
            </div>
        </div>
    </div>
</div>