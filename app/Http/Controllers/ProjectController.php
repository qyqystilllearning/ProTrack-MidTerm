<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Method untuk menampilkan halaman pilihan proyek (3 kartu)
    public function index()
    {
        $categories = ProjectCategory::all();
        return view('projects.index', ['categories' => $categories]);
    }

    // Method untuk menampilkan daftar tugas dari satu kategori
    public function show(ProjectCategory $category)
    {
        // Mengambil tasks yang berhubungan dengan $category, lalu paginasi
        $tasks = $category->tasks()->latest()->paginate(10);

        return view('projects.show', [
            'category' => $category,
            'tasks' => $tasks
        ]);
    }
    public function create()
    {
        // Kita butuh daftar kategori untuk dropdown di form
        $categories = ProjectCategory::all();
        return view('tasks.create', ['categories' => $categories]);
    }

    /**
     * Menyimpan task baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:Not Started,On Progress,Completed',
            'project_category_id' => 'required|exists:project_categories,id',
            'due_date' => 'nullable|date',
        ]);

        Task::create($validated);

        // Redirect kembali ke halaman daftar tugas dari kategori yang relevan
        return redirect()->route('projects.show', $validated['project_category_id'])
                         ->with('message', 'Task created successfully!');
    }

    /**
     * Menampilkan form untuk mengedit task.
     */
    public function edit(Task $task)
    {
        $categories = ProjectCategory::all();
        return view('tasks.edit', [
            'task' => $task,
            'categories' => $categories,
        ]);
    }

    /**
     * Memperbarui task di database.
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:Not Started,On Progress,Completed',
            'project_category_id' => 'required|exists:project_categories,id',
            'due_date' => 'nullable|date',
        ]);

        $task->update($validated);

        return redirect()->route('projects.show', $task->project_category_id)
                         ->with('message', 'Task updated successfully!');
    }

    /**
     * Menghapus task dari database.
     */
    public function destroy(Task $task)
    {
        $categoryId = $task->project_category_id; // Simpan ID kategori sebelum dihapus
        $task->delete();

        return redirect()->route('projects.show', $categoryId)
                         ->with('message', 'Task deleted successfully!');
    }
}