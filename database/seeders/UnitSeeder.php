<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            ['name' => 'gram'],
            ['name' => 'liters'],
            ['name' => 'items'],
        ];

        foreach ($units as $data) {
            Unit::create($data);
        }
    }
}
