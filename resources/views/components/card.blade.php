<div class="p-6 mx-auto">




    <div class="relative w-[300px] h-[320px] bg-gray-100 border-2 border-gray-300 rounded-2xl overflow-hidden transition-all duration-500 ease-out hover:border-blue-500 hover:shadow-lg">
        <img src="{{ $image }}" class="w-full h-[160px] object-cover rounded-t-2xl">
        <div class="text-black h-[120px] flex flex-col justify-center items-center text-center px-4">
            <p class="text-xl font-bold">{{ $title }}</p>
            <p class="text-gray-500 text-sm">{{ $description }}</p>
        </div>
        <a href="{{ $link }}" 
            class="absolute left-1/2 bottom-4 translate-x-[-50%] w-[60%] bg-blue-500 text-white text-lg py-2 px-3 rounded-xl transition-all duration-300 ease-out hover:bg-blue-600 text-center">
            See More
        </a>
    </div>
</div>

