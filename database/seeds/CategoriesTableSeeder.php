<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Novel',
            'slug' => 'novel',
            'description' => 'kategori novel'
        ]);

        Category::create([
            'name' => 'Drama',
            'slug' => 'drama',
            'description' => 'kategori drama'
        ]);
    }
}
