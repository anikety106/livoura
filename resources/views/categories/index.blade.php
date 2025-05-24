{{-- @extends('layouts.app')
@section('title', 'Category')
@section('content')

    <div class="max-w-7xl mx-auto py-6 sm:py-8">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Sidebar - Sticky on desktop, collapsible on mobile -->
            <div class="md:sticky md:top-6 md:h-[calc(100vh-3rem)] w-full md:w-auto">
                <div class="bg-gray-200 p-4 md:p-6 rounded-lg h-full overflow-y-auto">
                    <!-- Mobile menu button -->
                    <button
                        class="md:hidden w-full flex justify-between items-center p-2 text-gray-900 rounded-lg bg-gray-300 mb-4"
                        onclick="toggleSidebar()">
                        <span>Menu</span>
                        <svg id="sidebar-toggle-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="sidebar-content" class="hidden md:block">
                        <ul class="space-y-2 font-medium">
                            <li>
                                <a href="{{ route('categories.index') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-blue-400 group">
                                    <img src="{{ asset('images\kitchen\icons\category-icon.png') }}" class="w-6"
                                        alt="">
                                    <span class="ms-3">Categories</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('categories.index') }}"
                                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-blue-400"
                                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                    <img src="{{ asset('images\kitchen\icons\kitchen-icons.png') }}" class="w-6"
                                        alt="">
                                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Modular
                                        Kitchen</span>
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('categories.index') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-blue-400 group">
                                    <img src="{{ asset('images\kitchen\icons\bedroom-icon.png') }}" class="w-6"
                                        alt="">
                                    <span class="ms-3">Bedroom</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-blue-400 group">
                                    <img src="{{ asset('images\kitchen\icons\wardrobe-icon.png') }}" class="w-6"
                                        alt="">
                                    <span class="ms-3">Wardrobe</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-blue-400 group">
                                    <img src="{{ asset('images\kitchen\icons\livingroom-icon.png') }}" class="w-6"
                                        alt="">
                                    <span class="ms-3">Living Room</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-blue-400 group">
                                    <img src="{{ asset('images\kitchen\icons\tv-table-icon.png') }}" class="w-6"
                                        alt="">
                                    <span class="ms-3">TV Console</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-blue-400 group">
                                    <img src="{{ asset('images\kitchen\icons\office-icon.png') }}" class="w-6"
                                        alt="">
                                    <span class="ms-3">Office</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 bg-gray-200 p-4 rounded-lg">
                <div class="max-w-7xl mx-auto">
                    <div class="mx-auto pb-4 hidden lg:block">
                        <img src="{{ asset('banner/large-banner.avif') }}" alt="Uploaded Image"
                            class="w-full h-60 object-cover">
                    </div>
                    @if ($posts->isEmpty())
                        <p class="text-gray-600">No images uploaded yet.</p>
                    @else
                        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            @foreach ($posts as $post)
                                <div onclick="openModal(' {{ asset($post->image_url) }}')"
                                    class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200">
                                    <img src="{{ asset($post->image_url) }}" alt="Uploaded Image"
                                        class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <p class="text-gray-700 text-sm">{{ $post->title }}</p>
                                    </div>
                                    <div class="p-4">
                                        <p class="text-gray-700 text-sm">{{ Str::limit($post->description, 50) }}
                                            @if (Str::length($post->description) > 100)
                                                <a href="{{ route('posts.show', $post->id) }}"
                                                    class="text-blue-500 hover:underline">Read More</a>
                                            @endif
                                        </p>
                                        <p class="text-gray-700 text-sm">{{ date('H:i:s d-m-Y') }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>



                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class=" rounded-t-lg" src="{{ asset('images/kitchen/kitchen_card8.jpg') }}"
                                    alt="product image" />
                            </a>
                            <div class="px-5 pb-5">
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple
                                        Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                                </a>
                                <div class="flex items-center mt-2.5 mb-5">
                                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    </div>
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                                    <a href="#"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>




                    @endif
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="imageModal"
            class="fixed inset-0 hidden bg-black bg-opacity-90 flex items-center justify-center z-50 p-4">
            <div class="relative max-w-4xl w-full">
                <button
                    class="absolute -top-10 right-0 text-white text-2xl font-bold hover:text-red-400 transition-colors duration-200"
                    onclick="closeModal()">
                    ✕
                </button>
                <div class="rounded-xl overflow-hidden shadow-2xl">
                    <img id="modalImage" class="w-full h-auto max-h-[80vh] object-contain" src=""
                        alt="">
                </div>
            </div>
        </div>

        <script>
            function openModal(imageSrc, title) {
                const modal = document.getElementById("imageModal");
                const modalImage = document.getElementById("modalImage");
                modalImage.src = imageSrc;
                modalImage.alt = title + ' design';
                modal.classList.remove("hidden");
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                document.getElementById("imageModal").classList.add("hidden");
                document.body.style.overflow = 'auto';
            }

            // Toggle sidebar on mobile
            function toggleSidebar() {
                const sidebar = document.getElementById('sidebar-content');
                const icon = document.getElementById('sidebar-toggle-icon');
                sidebar.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            }

            // Close modal when clicking outside the image
            document.getElementById('imageModal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });

            // Close modal with ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            });
        </script>
    </div>
@endsection --}}

@extends('layouts.app')
@section('title', 'Category')
@section('content')
    <div class="flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-9xl font-extrabold text-gray-800">404</h1>
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-700 mt-4">Page Not Found</h2>
            <p class="text-gray-600 mt-2 mb-6">The page you're looking for doesn't exist or we're currently working on it..</p>
            <a href="{{ url('/') }}"
                class="inline-block px-6 py-3 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700 transition duration-300">Return
                to Homepage</a>
        </div>
    </div>
@endsection
