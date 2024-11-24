<?php

namespace Database\Seeders;

use App\Models\Bigaward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BigawardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bigaward::insert([
            ['album' => 'CONGLOMERATE', 'name' => 'Grammy', 'year' => 2024, 'image' => 'grammy.jpg'],
            ['album' => 'FREEWAVE3', 'name' => 'MTV', 'year' => 2019, 'image' => 'MTV.jpg'],
            ['album' => 'Benbow Crescent', 'name' => 'Brit Award', 'year' => 2021, 'image' => 'Brit.png'],
            ['album' => 'BIPOLAR', 'name' => 'Billboard Music Awards', 'year' => 2024, 'image' => 'Bill.jpg'],
            ['album' => 'H', 'name' => 'MTV', 'year' => 2018, 'image' => 'MTV.jpg'],
            ['album' => 'TEC', 'name' => 'Grammy', 'year' => 2023, 'image' => 'grammy.jpg'],
            ['album' => 'Tha Soufside Villain', 'name' => 'Billboard Music Awards', 'year' => 2022, 'image' => 'Bill.jpg'],
            ['album' => 'Tsukino', 'name' => 'Brit Award', 'year' => 2022, 'image' => 'Brit.png'],
            ['album' => 'ultraviolet', 'name' => 'MTV', 'year' => 2023, 'image' => 'MTV.jpg'],
            ['album' => 'Wild Heart', 'name' => 'Grammy', 'year' => 2013, 'image' => 'grammy.jpg'],
        ]);

    }
}
