<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = ['General', 'Entertainment', 'Sports', 'Movies', 'Politics', 'Cars'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
