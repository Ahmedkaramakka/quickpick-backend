<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Apples',
            'price' => 1.99,
            'description' => 'Fresh red apples'
        ]);
        Product::create([
            'name' => 'Bread',
            'price' => 2.49,
            'description' => 'Whole wheat bread loaf'
        ]);
        Product::create([
            'name' => 'Milk',
            'price' => 3.29,
            'description' => '1 litre full cream milk'
        ]);
    }
}
