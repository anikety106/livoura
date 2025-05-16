@extends('layouts.app')

@section('title', 'Home')
@section('content')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="max-w-7xl mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Uploaded Images</h2>

        @if ($posts->isEmpty())
            <p class="text-gray-600">No images uploaded yet.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($posts as $post)
                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200">
                        <img src="{{ $post->image_url }}" alt="Uploaded Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <p class="text-gray-700 text-sm">{{ $post->title }}</p>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-700 text-sm">{{ $post->description }}</p>
                            <p class="text-gray-700 text-sm">{{ date('H:i:s d-m-Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
