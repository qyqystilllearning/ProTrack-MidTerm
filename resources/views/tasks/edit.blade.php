<x-layout>
    <h2 class="text-2xl font-bold mb-6">Edit Task: {{ $task->title }}</h2>

    <div class="flex gap-4">
        {{-- FORM UNTUK UPDATE --}}
        <form action="{{ route('tasks.update', $task) }}" method="POST" class="bg-white p-6 rounded-lg border border-gray-200 flex-1">
            @csrf
            @method('PUT')

            {{-- Task Title --}}
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Task Title</label>
                <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded" value="{{ old('title', $task->title) }}">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Description --}}
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea name="description" id="description" rows="5" class="w-full p-2 border border-gray-300 rounded">{{ old('description', $task->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Project Category Dropdown --}}
            <div class="mb-4">
                <label for="project_category_id" class="block text-gray-700 font-bold mb-2">Project Category</label>
                <select name="project_category_id" id="project_category_id" class="w-full p-2 border border-gray-300 rounded">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $task->project_category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
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
                    <option value="Not Started" {{ $task->status == 'Not Started' ? 'selected' : '' }}>Not Started</option>
                    <option value="On Progress" {{ $task->status == 'On Progress' ? 'selected' : '' }}>On Progress</option>
                    <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Due Date --}}
            <div class="mb-6">
                <label for="due_date" class="block text-gray-700 font-bold mb-2">Due Date (Optional)</label>
                <input type="date" name="due_date" id="due_date" class="w-full p-2 border border-gray-300 rounded" value="{{ old('due_date', $task->due_date) }}">
                @error('due_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit Button --}}
            <div>
                <button type="submit" class="btn">Update Task</button>
            </div>
        </form>

        {{-- FORM UNTUK DELETE --}}
        <form action="{{ route('tasks.destroy', $task) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white rounded px-3 py-2 hover:bg-red-600" onclick="return confirm('Are you sure you want to delete this task?')">Delete Task</button>
        </form>
    </div>
</x-layout>