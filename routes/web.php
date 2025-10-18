<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route untuk landing page
Route::get('/', function () {
    return view('welcome');
});

// --- PROJECT CATEGORY ROUTES ---
// Menampilkan halaman pilihan kategori proyek (3 kartu)
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// Menampilkan daftar tugas dalam satu kategori
Route::get('/projects/{category}', [ProjectController::class, 'show'])->name('projects.show');


// --- TASK CRUD ROUTES ---
// Menampilkan form untuk membuat task baru
Route::get('/tasks/create', [ProjectController::class, 'create'])->name('tasks.create');

// Menyimpan task baru ke database
Route::post('/tasks', [ProjectController::class, 'store'])->name('tasks.store');

// Menampilkan form untuk mengedit task
Route::get('/tasks/{task}/edit', [ProjectController::class, 'edit'])->name('tasks.edit');

// Mengupdate task di database
Route::put('/tasks/{task}', [ProjectController::class, 'update'])->name('tasks.update');

// Menghapus task
Route::delete('/tasks/{task}', [ProjectController::class, 'destroy'])->name('tasks.destroy');