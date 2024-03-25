<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $discounts = [
            ['amount' => 10, 'type' => 'percentage'],
            ['amount' => 100, 'type' => 'fixed'],
            ['amount' => 15, 'type' => 'percentage'],
            ['amount' => 200, 'type' => 'fixed'],
        ];
    
        foreach ($discounts as $discount) {
            Discount::create($discount);
        }
    }
}
