<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->truncate();

        foreach (['Artisanat', 'Surgelés', 'Pâtisserie'] as $category) {
            Category::query()->create([
               'slug'   => Str::slug($category),
               'name'   => $category,
            ]);
        }
    }
}
