<?php

namespace Database\Seeders;

use App\Models\Colour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Colour::create([
            'name' => 'Red',
            'slug' => 'red',
        ]);
        Colour::create([
            'name' => 'Blue',
            'slug' => 'blue',
        ]);
        Colour::create([
            'name' => 'Green',
            'slug' => 'green',
        ]);
    }
}
