<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Kategori::create([
            'name' => 'olahraga',
            'description' => 'Kategori berita olahraga',
        ]);
        Kategori::create([
            'name' => 'sepakbola',
            'description' => 'Kategori berita sepakbola',
        ]);
        Kategori::create([
            'name' => 'politik',
            'description' => 'Kategori berita politik',
        ]);
        Kategori::create([
            'name' => 'enterntainment',
            'description' => 'Kategori berita enterntainment',
        ]);

        
        User::create([
            'name' => 'Ilham Ramadan',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Angga Dimas Hidayat',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        Berita::factory(10)->create();
    }
}
