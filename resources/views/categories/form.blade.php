@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-layouts.app :title="__('Categories')">

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

    <form method="POST" action="{{ route('categories') }}" enctype="multipart/form-data" class="mb-6">
        @csrf

        <div class="space-y-4 mb-4">
            <h2 class="text-2xl font-bold mb-4">Add a new category</h2>
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                        Name</label>
                    <input type="text" name="title" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type category name" required>
                </div>
                <div>
                    <label for="category_type"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Type</label>
                    <select id="category_type" name="category_type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" selected>Select category type</option>
                        <option value="modular_kitchen">Modular Kitchen</option>
                        <option value="bedroom">Bedroom</option>
                        <option value="wardrobs">Wardrobs</option>
                        <option value="living_room">Living Room</option>
                        <option value="tv_console">TV Console</option>
                        <option value="office_room">Office Room</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="image_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                        file</label>
                    <input type="file" name="image_url" id="image_url"
                        class="block w-full text-sm text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-gray-700 hover:file:bg-blue-100">
                </div>

                <div class="sm:col-span-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" name="description" rows="8"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Your description here"></textarea>
                </div>
            </div>
            @error('image_url')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-2 sm:mt-2 bg-blue-600 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Add category
            </button>
        </div>

    </form>
</x-layouts.app>
