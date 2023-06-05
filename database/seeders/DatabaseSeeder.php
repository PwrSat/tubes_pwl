<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        kategori::create([
            'kategori' => 'Kategori 1'
        ]);
        kategori::create([
            'kategori' => 'Kategori 2'
        ]);
        kategori::create([
            'kategori' => 'Kategori 3'
        ]);
        kategori::create([
            'kategori' => 'Kategori 4'
        ]);
        kategori::create([
            'kategori' => 'Kategori 5'
        ]);
        kategori::create([
            'kategori' => 'Kategori 6'
        ]);
    }
}
