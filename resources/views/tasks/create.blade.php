<x-layout>
    <h2 class="text-2xl font-bold mb-6">Add a New Task</h2>

    <form action="{{ route('tasks.store') }}" method="POST" class="bg-white p-6 rounded-lg border border-gray-200">
        @csrf

        {{-- Task Title --}}
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Task Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded" value="{{ old('title') }}">
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Description --}}
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea name="description" id="description" rows="5" class="w-full p-2 border border-gray-300 rounded">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Project Category Dropdown --}}
        <div class="mb-4">
            <label for="project_category_id" class="block text-gray-700 font-bold mb-2">Project Category</label>
            <select name="project_category_id" id="project_category_id" class="w-full p-2 border border-gray-300 rounded">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('project_category_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Status Dropdown --}}
        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
            <select name="status" id="status" class="w-full p-2 border border-gray-300 rounded">
                <option value="Not Started">Not Started</option>
                <option value="On Progress">On Progress</option>
                <option value="Completed">Completed</option>
            </select>
            @error('status')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Due Date --}}
        <div class="mb-6">
            <label for="due_date" class="block text-gray-700 font-bold mb-2">Due Date (Optional)</label>
            <input type="date" name="due_date" id="due_date" class="w-full p-2 border border-gray-300 rounded" value="{{ old('due_date') }}">
            @error('due_date')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit Button --}}
        <div>
            <button type="submit" class="btn">Create Task</button>
        </div>
    </form>
</x-layout>