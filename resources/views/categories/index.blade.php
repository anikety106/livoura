@extends('layouts.app')
@section('title', 'Category')
@section('content')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
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
                <div class="max-w-7xl mx-auto px-4 py-6">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">Uploaded Images</h2>

                    @if ($posts->isEmpty())
                        <p class="text-gray-600">No images uploaded yet.</p>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
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
                    @endif
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="imageModal" class="fixed inset-0 hidden bg-black bg-opacity-90 flex items-center justify-center z-50 p-4">
            <div class="relative max-w-4xl w-full">
                <button
                    class="absolute -top-10 right-0 text-white text-2xl font-bold hover:text-red-400 transition-colors duration-200"
                    onclick="closeModal()">
                    ✕
                </button>
                <div class="rounded-xl overflow-hidden shadow-2xl">
                    <img id="modalImage" class="w-full h-auto max-h-[80vh] object-contain" src="" alt="">
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
@endsection
