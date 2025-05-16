
@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-layouts.app :title="__('Blog')">
    <h1 class="text-2xl font-bold mb-4">Upload an Image</h1>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('blogpost') }}" enctype="multipart/form-data" class="mb-6">
        @csrf
        <div class="mb-4">
            <input type="file" name="image"
                class="block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                <input type="text" name="title"
                class="block w-full bg-green-600 text-sm text-red-700 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                <input type="text" name="description"
                class="block w-full bg-blue-600 text-sm text-red-700 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Upload</button>
    </form>
</x-layouts.app>
