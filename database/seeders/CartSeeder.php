<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carts = [
            [
                'cart_item' => json_encode(
                    [
                        'product_id' => 1,
                        'price' => 20000,
                        'variants' => [
                            'variants_name' => 'mushroom',
                            'price' => 10000
                        ]
                    ]
                )
            ],
            [
                'cart_item' => json_encode(
                    [
                        'product_id' => 2,
                        'price' => 30000
                    ]
                )
            ],
        ];

        foreach ($carts as $data) {
            Cart::create($data);
        }
    }
}
