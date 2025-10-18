<x-layout>
    <h2 class="text-2xl font-bold mb-6">Tasks for: {{ $category->name }}</h2>

    <div class="mb-8">
        <a href="{{ route('tasks.create') }}" class="btn">Add New Task</a>
    </div>

    <ul>
        @forelse($tasks as $task)
                <li>
                {{-- BUNGKUS komponen dengan tag <a> standar --}}
                <a href="{{ route('tasks.edit', $task) }}">
                    <x-card>
                        <div class="flex-grow">
                            <h3 class="font-bold text-lg">{{ $task->title }}</h3>
                            <p class="text-sm text-gray-600">Status: 
                                <span class="font-semibold 
                                    @if($task->status == 'Completed')text-green-500 @endif
                                    @if($task->status == 'On Progress')text-blue-500 @endif
                                    @if($task->status == 'Not Started')text-gray-500 @endif
                                ">
                                    {{ $task->status }}
                                </span>
                            </p>
                        </div>
                        {{-- Tombol ini hanya sebagai visual, karena seluruh kartu sudah bisa diklik --}}
                        <span class="btn">Edit Task</span>
                    </x-card>
                </a>
            </li>
        @empty
            <p class="text-gray-500">No tasks have been created for this project category yet.</p>
        @endforelse
    </ul>

    <div class="mt-8">
        {{ $tasks->links() }}
    </div>
</x-layout>