<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Teknologi',
                'slug' => 'teknologi',
            ],
            [
                'name' => 'Kesehatan',
                'slug' => 'kesehatan',
            ],
            [
                'name' => 'Pendidikan',
                'slug' => 'pendidikan',
            ],
            [
                'name' => 'Kuliner',
                'slug' => 'kuliner',
            ],
            [
                'name' => 'Wisata',
                'slug' => 'wisata',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
} 