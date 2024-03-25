<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => 1,
                'discout_id' => 1,
                'inventory_id' => 1,
                'sku' => "20240325",
                'slug' => 'product-1',
                'name' => '[{
                    "en": "product-1",
                    "bn": "পণ্য-1"
                }]',

                'description' => '[{
                    "en": "product-1 description",
                    "bn": "পণ্য -1 বিবরণ"
                }]',
                'size' => "L",
                'price' => "100",
            ],


            [
                'category_id' => 2,
                'discout_id' => 2,
                'inventory_id' => 1,
                'sku' => "20240326",
                'slug' => 'product-2',
                'name' => '[{
                    "en": "product-2",
                    "bn": "পণ্য-1"
                }]',

                'description' => '[{
                    "en": "product-2 description",
                    "bn": "পণ্য -2 বিবরণ"
                }]',
                'size' => "M",
                'price' => "100",
            ],



            [
                'category_id' => 1,
                'discout_id' => 1,
                'inventory_id' => 1,
                'sku' => "20240327",
                'slug' => 'product-3',
                'name' => '[{
                    "en": "product-3",
                    "bn": "পণ্য-3"
                }]',

                'description' => '[{
                    "en": "product-3 description",
                    "bn": "পণ্য -3 বিবরণ"
                }]',
                'size' => "XL",
                'price' => "100",
            ],


            [
                'category_id' => 3,
                'discout_id' => 1,
                'inventory_id' => 1,
                'sku' => "20240328",
                'slug' => 'product-4',
                'name' => '[{
                    "en": "product-4",
                    "bn": "পণ্য-4"
                }]',

                'description' => '[{
                    "en": "product-4 description",
                    "bn": "পণ্য -4 বিবরণ"
                }]',
                'size' => "L",
                'price' => "100",
            ],

            [
                'category_id' => 4,
                'discout_id' => 3,
                'inventory_id' => 1,
                'sku' => "20240329",
                'slug' => 'product-5',
                'name' => '[{
                    "en": "product-5",
                    "bn": "পণ্য-5"
                }]',

                'description' => '[{
                    "en": "product-5 description",
                    "bn": "পণ্য -5 বিবরণ"
                }]',
                'size' => "S",
                'price' => "100",
            ],

            [
                'category_id' => 5,
                'discout_id' => 3,
                'inventory_id' => 1,
                'sku' => "20240330",
                'slug' => 'product-6',
                'name' => '[{
                    "en": "product-6",
                    "bn": "পণ্য-6"
                }]',

                'description' => '[{
                    "en": "product-6 description",
                    "bn": "পণ্য -6 বিবরণ"
                }]',
                'size' => "S",
                'price' => "100",
            ],

           
        ];
    
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
