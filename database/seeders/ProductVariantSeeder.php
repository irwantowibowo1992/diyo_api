<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productVariants = [
            ['product_id' => 1, 'name' => 'Mushroom', 'additional_price' => 10000],
            ['product_id' => 1, 'name' => 'Cone', 'additional_price' => 8000],
            ['product_id' => 3, 'name' => 'Mushroom', 'additional_price' => 10000],
            ['product_id' => 3, 'name' => 'Macroni', 'additional_price' => 12000],
        ];

        foreach ($productVariants as $data) {
            ProductVariant::create($data);
        }
    }
}
