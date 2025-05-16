<section class="max-w-7xl mx-auto px-4 py-12">
    <div class="flex flex-col lg:flex-row items-center gap-8 bg-white p-6 rounded-lg shadow-md">
        <img src="{{ $image1 }}" alt="First Kitchen Image" class="w-full lg:w-1/2 rounded-lg shadow-lg">
        <div class="lg:w-1/2">
            <h2 class="text-3xl font-semibold text-blue-700">{{ $heading1 }}</h2>
            <div class="mt-4 space-y-2 text-gray-700">
                <p><strong>{{ $type }}:</strong> {{ $description1 }}</p>
                <p><strong>{{ $type1 }}:</strong> {{ $description2 }}</p>
                <p><strong>{{ $type2 }}:</strong> {{ $description3 }}</p>
                <p><strong>{{ $type3 }}:</strong> {{ $description4 }}</p>
            </div>
        </div>
    </div>

    <!-- Second Kitchen Card -->
    <div class="flex flex-col lg:flex-row-reverse items-center gap-8 bg-white p-6 rounded-lg shadow-md mt-12">
        <img src="{{ $image2 }}" alt="Second Kitchen Image" class="w-full lg:w-1/2 rounded-lg shadow-lg">
        <div class="lg:w-1/2">
            <h2 class="text-3xl font-semibold text-blue-700">{{ $heading2 }}</h2>
            <div class="mt-4 space-y-2 text-gray-700">
                <p><strong>{{ $type4 }}:</strong> {{ $description5 }}</p>
                <p><strong>{{ $type5 }}:</strong> {{ $description6 }}</p>
                <p><strong>{{ $type6 }}:</strong> {{ $description7 }}</p>
                <p><strong>{{ $type7 }}:</strong> {{ $description8 }}</p>
            </div>
        </div>
    </div>
</section>
