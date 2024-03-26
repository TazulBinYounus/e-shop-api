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
            ['amount' => 10.00, 'type' => 'percentage'],
            ['amount' => 50.00, 'type' => 'fixed'],
            ['amount' => 5.00, 'type' => 'percentage'],
            ['amount' => 25.00, 'type' => 'fixed'],
        ];
    
        foreach ($discounts as $discount) {
            Discount::create($discount);
        }
    }
}
