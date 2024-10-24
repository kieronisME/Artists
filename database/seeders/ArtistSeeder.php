<?php

namespace Database\Seeders;
use app\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $currentTimestamp = carbon::now();
        Artist::insert(
            ['title' => 'everyone hates chris!', 'rating'=>'4', 'realsesYear'=>'2020','images'=>'everyone hates chris!.png'],
            ['title' => 'FREEWAVE3', 'rating'=>'5', 'realsesYear'=>'2019','images'=>'FREEWAVE3.png'],
            ['title' => 'Benbow Crescent.png', 'rating'=>'3', 'realsesYear'=>'2021','images'=>'Benbow Crescent.png'],
            ['title' => 'BIPOLAR.png', 'rating'=>'5', 'realsesYear'=>'2024','images'=>'BIPOLAR.png'],
            ['title' => 'H', 'rating'=>'2', 'realsesYear'=>'2018','images'=>'H.png'],
            ['title' => 'TEC', 'rating'=>'4', 'realsesYear'=>'2024','images'=>'TEC.png'],
            ['title' => 'Tha Soufside Villain .png', 'rating'=>'5', 'realsesYear'=>'2019','images'=>'Tha Soufside Villain .png'],
            ['title' => 'Tsukino', 'rating'=>'5', 'realsesYear'=>'2022','images'=>'Tsukino.png'],
            ['title' => 'ultraviolet', 'rating'=>'5', 'realsesYear'=>'2023','images'=>'ultraviolet.png'],
            ['title' => 'Wild Heart', 'rating'=>'5', 'realsesYear'=>'2013','images'=>'Wild Heart.png']
        );
    
    }
}
