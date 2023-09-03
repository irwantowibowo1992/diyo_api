<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use App\Models\PaymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            ['name' => 'OVO'],
            ['name' => 'DANA'],
            ['name' => 'Shopee Pay'],
            ['name' => 'Gopay'],
        ];

        foreach ($payments as $data) {
            PaymentMethod::create($data);
        }
    }
}
