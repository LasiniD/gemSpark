<?php

namespace Database\Seeders;

use App\Models\Shape;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shape::create([
            'name' => 'Round',
            'slug' => 'round',
        ]);
        Shape::create([
            'name' => 'Oval',
            'slug' => 'oval',
        ]);
        Shape::create([
            'name' => 'Square',
            'slug' => 'square',
        ]);
        Shape::create([
            'name' => 'Diamond',
            'slug' => 'diamond',
        ]);

    }
}
