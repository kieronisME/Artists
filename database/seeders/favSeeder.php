<?php

namespace Database\Seeders;
use App\Models\fav;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class favSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // adjust date to intagers 
        fav::insert([
            ['title' => '', 'rating' => null, 'releaseYear' => null, 'image' => '', 'Song' => null],
            ['title' => '', 'rating' => null, 'releaseYear' => null, 'image' => '', 'Song' => null],
            ['title' => '', 'rating' => null, 'releaseYear' => null, 'image' => '', 'Song' => null],
            ['title' => '', 'rating' => null, 'releaseYear' => null, 'image' => '', 'Song' => null],
            ['title' => '', 'rating' => null, 'releaseYear' => null, 'image' => '', 'Song' => null],
            ['title' => '', 'rating' => null, 'releaseYear' => null, 'image' => '', 'Song' => null],
            ['title' => '', 'rating' => null, 'releaseYear' => null, 'image' => '', 'Song' => null],
            ['title' => '', 'rating' => null, 'releaseYear' => null, 'image' => '', 'Song' => null],
            ['title' => '', 'rating' => null, 'releaseYear' => null, 'image' => '', 'Song' => null],
            ['title' => '', 'rating' => null, 'releaseYear' => null, 'image' => '', 'Song' => null],
        ]);
    }
}
