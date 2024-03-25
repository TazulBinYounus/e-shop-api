<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'product_id' => 1,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_1.png'
            ],

            [
                'product_id' => 1,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_2.png'
            ],


            [
                'product_id' => 1,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_3.png'
            ],


            [
                'product_id' => 2,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_4.png'
            ],

            [
                'product_id' => 2,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_5.png'
            ],


            [
                'product_id' => 2,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_6.png'
            ],

            [
                'product_id' => 3,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_7.png'
            ],


            [
                'product_id' => 3,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_8.png'
            ],


            [
                'product_id' => 3,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_9.png'
            ],

            [
                'product_id' => 4,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_10.png'
            ],

            [
                'product_id' => 4,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_11.png'
            ],


            [
                'product_id' => 4,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_12.png'
            ],

            [
                'product_id' => 5,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_13.png'
            ],

            [
                'product_id' => 5,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_14.png'
            ],

            [
                'product_id' => 5,
                'filename' => 'image',
                'path' => 'http://127.0.0.1:8000/uploads/products/product_15.png'
            ],
        ];
    
        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
