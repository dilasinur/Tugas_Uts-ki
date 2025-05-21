<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Menjalankan seeder Beasiswa
        $this->call([
            BeasiswaSeeder::class,
        ]);

        // Membuat 1 user (admin) dengan factory
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
