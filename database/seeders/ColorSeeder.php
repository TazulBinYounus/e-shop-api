<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['name' => 'Red', 'code' => '#FF0000'],
            ['name' => 'Black', 'code' => '#000000'],
            ['name' => 'Yellow', 'code' => '#FFFF00'],
            ['name' => 'Green', 'code' => '#00FF00'],
            ['name' => 'Pink', 'code' => '#FFC0CB '],
        ];
    
        foreach ($colors as $color) {
            Color::create($color);
        }
    }
}
