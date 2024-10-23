<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        $brands = Brand::all();
        
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Product::create([
                'pname' => $faker->word,
                'quantity' => $faker->numberBetween(1, 100),
                'buying_price' => $faker->randomFloat(2, 10, 500), // Between $10 and $500
                'price' => $faker->randomFloat(2, 20, 1000), // Between $20 and $1000
                'description' => $faker->sentence,
                'image' => $faker->imageUrl(640, 480, 'products', true),
                'Status' => $faker->randomElement(['Active', 'Inactive']),
                'category_id' => $categories->random()->id, // Get random category
                'brand_id' => $brands->random()->id, // Get random brand
            ]);
        }
    }
}

