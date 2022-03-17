<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->truncate();

        $category = Category::query()->where('id', 1)->first();
        if($category) {
            foreach (['Sous-Plat', 'Plateau', 'Tient-Livres', 'Sous-Plat Set', 'Bougies', 'Cache-Fruit'] as $product) {
                $category->products()->create([
                    'slug'   => Str::slug($product),
                    'name'   => $product,
                    'title'  => $product,
                    'description'  => 'La vente des produits assure un soutien à la vie de la communauté et au budget de prise en charge des enfants et des adolescents sourds de l’institut.',
                    'price'  => 140000,
                    'image'  => 'public/products/' . Str::slug($product) . '.jpg',
                ]);
            }
        }
    }
}
