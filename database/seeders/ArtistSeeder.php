<?php

namespace Database\Seeders;
use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // adjust date to intagers 
        Artist::insert([
            ['title' => 'everyone hates chris!', 'rating' => 4, 'releaseYear' => 2020, 'image' => 'everyone hates chris!.png','Song'=>'<iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/6rftgjBlxG7zFviyk6Zt5q?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>'],
            ['title' => 'FREEWAVE3', 'rating' => 5, 'releaseYear' => 2019, 'image' => 'FREEWAVE3.png','Song'=>''],
            ['title' => 'Benbow Crescent', 'rating' => 3, 'releaseYear' => 2021, 'image' => 'Benbow Crescent.png','Song'=>''],
            ['title' => 'BIPOLAR', 'rating' => 5, 'releaseYear' => 2024, 'image' => 'BIPOLAR.png','Song'=>''], 
            ['title' => 'H', 'rating' => 2, 'releaseYear' => 2018, 'image' => 'H.png','Song'=>''],
            ['title' => 'TEC', 'rating' => 4, 'releaseYear' => 2023, 'image' => 'TEC.png','Song'=>''],
            ['title' => 'Tha Soufside Villain', 'rating' => 5, 'releaseYear' => '2022', 'image' => 'Tha Soufside Villain .png','Song'=>''],
            ['title' => 'Tsukino', 'rating' => 5, 'releaseYear' => 2022, 'image' => 'Tsukino.png','Song'=>''],
            ['title' => 'ultraviolet', 'rating' => 5, 'releaseYear' => 2023, 'image' => 'ultraviolet.png','Song'=>''],
            ['title' => 'Wild Heart', 'rating' => 5, 'releaseYear' => 2013, 'image' => 'Wild Heart.png','Song'=>''],
        ]);
    }
}
