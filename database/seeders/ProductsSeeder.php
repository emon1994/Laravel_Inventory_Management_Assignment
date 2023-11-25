<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Product 1', 'quantity' => 10, 'price' => 19.99],
            ['name' => 'Product 2', 'quantity' => 15, 'price' => 29.99],
            ['name' => 'Product 3', 'quantity' => 15, 'price' => 20.29],
            ['name' => 'Product 4', 'quantity' => 10, 'price' => 25],
            ['name' => 'Product 32', 'quantity' => 12, 'price' => 26],
            ['name' => 'Product 23', 'quantity' => 13, 'price' => 26],
            ['name' => 'Product 9', 'quantity' => 14, 'price' => 26],
            ['name' => 'Product 15', 'quantity' => 16, 'price' => 26],
        ];
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
