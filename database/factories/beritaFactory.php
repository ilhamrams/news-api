<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\berita>
 */
class beritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_kategori' => rand(1, 4),
            'gambar' => 'gambar/defaults.png', // Judul buku acak dengan 3 kata
            'judul' => $this->faker->sentence(3), // Nama penulis acak
            'artikel' =>$this->faker->paragraph(5), // ISBN acak 13 digit
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
