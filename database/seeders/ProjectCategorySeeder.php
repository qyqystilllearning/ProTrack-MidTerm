<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectCategory::create([
            'name' => 'Antasena ITS',
            'description' => 'Projects related to the Antasena ITS team.'
        ]);

        ProjectCategory::create([
            'name' => 'Informatika',
            'description' => 'General informatics and computer science projects.'
        ]);

        ProjectCategory::create([
            'name' => 'Other Needs',
            'description' => 'Miscellaneous projects and other needs.'
        ]);
    }
}