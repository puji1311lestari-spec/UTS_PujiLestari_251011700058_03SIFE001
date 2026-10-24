<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtworkSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('artworks')->insert([
            [
                'title' => 'Starry Night',
                'artist' => 'Vincent van Gogh',
                'year' => 1889,
                'price' => 150000000,
                'image' => 'artwork1.jpg',
                'medium' => 'Oil on canvas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Colorful Dream',
                'artist' => 'Maya Putri',
                'year' => 2022,
                'price' => 2500000,
                'image' => 'artwork2.jpg',
                'medium' => 'Acrylic on canvas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Abstract Emotion',
                'artist' => 'Raka Pratama',
                'year' => 2023,
                'price' => 3500000,
                'image' => 'artwork3.jpg',
                'medium' => 'Acrylic on canvas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Quiet Landscape',
                'artist' => 'Nadia Salsabila',
                'year' => 2021,
                'price' => 1800000,
                'image' => 'artwork4.jpg',
                'medium' => 'Watercolor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Modern Expression',
                'artist' => 'Dimas Arya',
                'year' => 2024,
                'price' => 4200000,
                'image' => 'artwork5.jpg',
                'medium' => 'Mixed media',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Golden Sunset',
                'artist' => 'Alya Maharani',
                'year' => 2023,
                'price' => 2750000,
                'image' => 'artwork6.jpg',
                'medium' => 'Oil on canvas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}