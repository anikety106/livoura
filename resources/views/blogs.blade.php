<div>
    <h2 class="text-xl font-semibold mb-3">Uploaded Images</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @forelse($images as $image)
            <div class="border rounded overflow-hidden">
                <img src="{{ $image }}" alt="Uploaded Image" class="w-full h-48 object-cover" />
            </div>
        @empty
            <p class="text-gray-600">No images uploaded yet.</p>
        @endforelse
    </div>
</div>