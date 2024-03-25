<?php

namespace Database\Seeders;

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
        Product::create([
            'cat_id' => 1,
            'name' => 'LED TV',
            'slug' => 'led tv',
            'buy_price' => 200,
            'price' => 250,
            'discount_price' => null,
            'qty' => 100,
            'sku' => 'ASD123',
            'short_description' => 'Hello this is from developer',
            'long_description' => 'Hello this is from developer Hello this is from developer',
            'image' => 'image',
        ]);
    }
}
