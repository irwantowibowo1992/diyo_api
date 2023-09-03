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
            ['name' => 'Inventory 1', 'price' => 25000, 'amount' => 35, 'unit_id' => 2],
            ['name' => 'Inventory 2', 'price' => 45000, 'amount' => 30, 'unit_id' => 1],
            ['name' => 'Inventory 3', 'price' => 65000, 'amount' => 20, 'unit_id' => 3],
        ];

        foreach ($inventories as $data) {
            Inventory::create($data);
        }
    }
}
