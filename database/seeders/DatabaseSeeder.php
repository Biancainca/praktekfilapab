<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Run seeders in the correct order to maintain relationships
        $this->call([
            // UserSeeder or call factory directly if needed
            // \App\Models\User::factory(10)->create(),
            // buat users
            // Create admin user
            \App\Models\User::factory()->create([
                'name' => 'Bianca Mohacindy',
                'email' => 'biancamohacindy6@gmail.com',
                'password' => bcrypt('12345'),
            ]),
            
            // First seed categories and tags (no dependencies)
            CategorySeeder::class,
            TagSeeder::class,
            
            // Then seed posts (depends on categories, tags, and users)
            PostSeeder::class,
        ]);
    }
}
