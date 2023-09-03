<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
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
            ['name' => 'Produk 1', 'description' => 'Ini descrisi produk 1', 'price' => 20000],
            ['name' => 'Produk 2', 'description' => 'Ini descrisi produk 2', 'price' => 30000],
            ['name' => 'Produk 3', 'description' => 'Ini descrisi produk 3', 'price' => 40000],
            ['name' => 'Produk 4', 'description' => 'Ini descrisi produk 4', 'price' => 50000],
        ];

        foreach ($products as $data) {
            Product::create($data);
        }
    }
}
