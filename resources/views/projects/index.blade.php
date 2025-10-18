<x-layout>
    <h2 class="text-2xl font-bold text-center mb-8">Choose a Project Category</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse($categories as $category)
            <div class="bg-white rounded-lg p-6 text-center shadow-lg border border-gray-200">
                {{-- Di sini Anda bisa menambahkan gambar jika ada --}}
                <h3 class="text-xl font-bold mb-4 text-gray-800">{{ $category->name }}</h3>
                <p class="text-gray-600 mb-4 h-16">{{ $category->description ?? 'No description available.' }}</p>
                <a href="{{ route('projects.show', $category) }}" class="btn">View</a>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">No project categories found. Please add some first.</p>
        @endforelse
    </div>
</x-layout>