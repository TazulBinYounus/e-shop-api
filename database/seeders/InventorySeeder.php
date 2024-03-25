<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventories = [
            ['quantity' => 10],
            ['quantity' => 5],
            ['quantity' => 15],
        ];
    
        foreach ($inventories as $inventory) {
            Inventory::create($inventory);
        }
    }
}
