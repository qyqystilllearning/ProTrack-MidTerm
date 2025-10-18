<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'image_url',
    ];

    /**
     * Mendefinisikan relasi "one-to-many" ke model Task.
     * Satu ProjectCategory bisa memiliki banyak Task.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}