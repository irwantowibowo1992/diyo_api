<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use App\Models\Sale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sales = [
            [
                'sale_number' => $this->createSalesNumber(),
                'user_id' => 1,
                'cart_id' => 1,
                'total_price' => 30000,
                'payment_method_id' => 4
            ],
            [
                'sale_number' => $this->createSalesNumber(),
                'user_id' => 1,
                'cart_id' => 2,
                'total_price' => 30000,
                'payment_method_id' => 1
            ]
        ];

        foreach ($sales as $data) {
            Sale::create($data);
        }
    }

    private function createSalesNumber() {
        $date = date('d');
        $month = date('m');
        $year = date('Y');
        $time = date('H:i:s');
        $timeWithoutColon = str_replace(':', '', $time);
        $milliseconds = round(microtime(true) * 1000);
        $prefix = 'S-';
        return $prefix.$date.$month.$year.'-'.$timeWithoutColon.'-'.rand(1, 100);
        ;
    }
}
