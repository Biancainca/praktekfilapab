<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'Tutorial',
                'slug' => 'tutorial',
            ],
            [
                'name' => 'Terbaru',
                'slug' => 'terbaru',
            ],
            [
                'name' => 'Populer',
                'slug' => 'populer',
            ],
            [
                'name' => 'Tips',
                'slug' => 'tips',
            ],
            [
                'name' => 'Indonesia',
                'slug' => 'indonesia',
            ],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
} 