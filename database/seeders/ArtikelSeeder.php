<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Artikel::create([
                'judul' => $faker->sentence,
                'penulis' => 'admin', // Penulis default 'admin'
                'kategori' => $faker->word,
                'isi' => $faker->paragraph,
                'gambar' => $faker->imageUrl(640, 480, 'article', true), // Membuat URL gambar palsu
                // `created_at` dan `updated_at` akan diisi otomatis oleh Laravel
            ]);
        }
    }
}
