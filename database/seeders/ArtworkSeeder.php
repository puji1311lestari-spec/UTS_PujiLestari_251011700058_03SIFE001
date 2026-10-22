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
                'image' => 'https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=800',
                'medium' => 'Oil on canvas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Colorful Dream',
                'artist' => 'Maya Putri',
                'year' => 2022,
                'price' => 2500000,
                'image' => 'https://images.unsplash.com/photo-1541961017774-22349e4a1262?w=800',
                'medium' => 'Acrylic on canvas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Abstract Emotion',
                'artist' => 'Raka Pratama',
                'year' => 2023,
                'price' => 3500000,
                'image' => 'https://images.unsplash.com/photo-1549490349-8643362247b5?w=800',
                'medium' => 'Acrylic on canvas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Quiet Landscape',
                'artist' => 'Nadia Salsabila',
                'year' => 2021,
                'price' => 1800000,
                'image' => 'https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?w=800',
                'medium' => 'Watercolor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Modern Expression',
                'artist' => 'Dimas Arya',
                'year' => 2024,
                'price' => 4200000,
                'image' => 'https://images.unsplash.com/photo-1577083552431-6e5fd01aa342?w=800',
                'medium' => 'Mixed media',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Golden Sunset',
                'artist' => 'Alya Maharani',
                'year' => 2023,
                'price' => 2750000,
                'image' => 'golden-sunset.jpg',
                'medium' => 'Oil on canvas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
