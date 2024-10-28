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
        // $currentTimestamp = carbon::now();
        Artist::insert([
            ['title' => 'everyone hates chris!', 'rating' => 4, 'releaseYear' => '2020-12-19', 'image' => 'everyone hates chris!.png'],
            ['title' => 'FREEWAVE3', 'rating' => 5, 'releaseYear' => '2019-02-15', 'image' => 'FREEWAVE3.png'],
            ['title' => 'Benbow Crescent', 'rating' => 3, 'releaseYear' => '2021-05-07', 'image' => 'Benbow Crescent.png'],
            ['title' => 'BIPOLAR', 'rating' => 5, 'releaseYear' => '2024-05-01', 'image' => 'BIPOLAR.png'], // Adjusted date
            ['title' => 'H', 'rating' => 2, 'releaseYear' => '2018-10-12', 'image' => 'H.png'],
            ['title' => 'TEC', 'rating' => 4, 'releaseYear' => '2023-09-20', 'image' => 'TEC.png'],
            ['title' => 'Tha Soufside Villain', 'rating' => 5, 'releaseYear' => '2022-10-21', 'image' => 'Tha Soufside Villain .png'],
            ['title' => 'Tsukino', 'rating' => 5, 'releaseYear' => '2022-01-20', 'image' => 'Tsukino.png'],
            ['title' => 'ultraviolet', 'rating' => 5, 'releaseYear' => '2023-04-28', 'image' => 'ultraviolet.png'],
            ['title' => 'Wild Heart', 'rating' => 5, 'releaseYear' => '2013-01-02', 'image' => 'Wild Heart.png'],
        ]);
    }
}
