<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'category_id' => '1',
            'name' => 'Pergi',
            'slug' => 'novel-pergi',
            'price' => '88000'
        ]);
        Product::create([
            'category_id' => '1',
            'name' => 'Pulang',
            'slug' => 'novel-pulang',
            'price' => '88000'
        ]);
        Product::create([
            'category_id' => '2',
            'name' => 'I Love You',
            'slug' => 'drama-ily',
            'price' => '50000'
        ]);
        Product::create([
            'category_id' => '2',
            'name' => 'Korean',
            'slug' => 'drama-korean',
            'price' => '35000'
        ]);
    }
}
