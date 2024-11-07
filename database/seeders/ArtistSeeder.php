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
            ['title' => 'everyone hates chris!','rating' => 4,'releaseYear' => 2020,'image' => 'everyone hates chris!.png','Song' => 'https://open.spotify.com/embed/album/6rftgjBlxG7zFviyk6Zt5q?utm_source=generator&theme=0'],
            ['title' => 'FREEWAVE3', 'rating' => 5, 'releaseYear' => 2019, 'image' => 'FREEWAVE3.png', 'Song' => 'https://open.spotify.com/embed/album/4PKdUHGtcJtsjhIaR4fjMk?utm_source=generator'],
            ['title' => 'Benbow Crescent', 'rating' => 3, 'releaseYear' => 2021, 'image' => 'Benbow Crescent.png', 'Song' => 'https://open.spotify.com/embed/album/3QXYqRVyBQfNK3MDn82hVF?utm_source=generator'],
            ['title' => 'BIPOLAR', 'rating' => 5, 'releaseYear' => 2024, 'image' => 'BIPOLAR.png', 'Song' => 'https://open.spotify.com/embed/album/2eX1wRjclgcIWa1WIMKrfc?utm_source=generator'],
            ['title' => 'H', 'rating' => 2, 'releaseYear' => 2018, 'image' => 'H.png', 'Song' => 'https://open.spotify.com/embed/album/3ENvHbf3UxqYjptQAoAmK7?utm_source=generator'],
            ['title' => 'TEC', 'rating' => 4, 'releaseYear' => 2023, 'image' => 'TEC.png', 'Song' => 'https://open.spotify.com/embed/album/4EURMuWFiLLRmQYoH5cgiE?utm_source=generator'],
            ['title' => 'Tha Soufside Villain', 'rating' => 5, 'releaseYear' => '2022', 'image' => 'Tha Soufside Villain .png', 'Song' => 'https://open.spotify.com/embed/album/1RjYqJjNJsthpNvsA3jvcR?utm_source=generator'],
            ['title' => 'Tsukino', 'rating' => 5, 'releaseYear' => 2022, 'image' => 'Tsukino.png', 'Song' => 'https://open.spotify.com/embed/track/6UBOJbjABQUdoMsfYWmZ5o?utm_source=generator'],
            ['title' => 'ultraviolet', 'rating' => 5, 'releaseYear' => 2023, 'image' => 'ultraviolet.png', 'Song' => 'https://open.spotify.com/embed/album/19lu8OJJ83j3zaTLn0O9gd?utm_source=generator'],
            ['title' => 'Wild Heart', 'rating' => 5, 'releaseYear' => 2013, 'image' => 'Wild Heart.png', 'Song' => 'https://open.spotify.com/embed/album/3vYaHUkO7laqYdwUQbnsIP?utm_source=generator'],
        ]);
    }
}
