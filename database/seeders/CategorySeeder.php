<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name_en' => 'Skin Care', 'name_bn' => 'ত্বকের যত্ন'],
            ['name_en' => 'Clothing', 'name_bn' => 'পোশাক'],
            ['name_en' => 'Toys', 'name_bn' => 'খেলনা'],
            ['name_en' => 'Bikes', 'name_bn' => 'বাইক'],
            ['name_en' => 'Diapers', 'name_bn' => 'ডায়াপার'],
        ];
    
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
