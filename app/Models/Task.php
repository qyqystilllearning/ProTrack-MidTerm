<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'status',
        'due_date',
        'project_category_id',
    ];

    /**
     * Mendefinisikan relasi "belongs-to" ke model ProjectCategory.
     * Satu Task dimiliki oleh satu ProjectCategory.
     */
    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class);
    }
}