<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Brand;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     private $categories = [
        'Laptop',
        'Monitor',
        'Pinter',
        'Mouse',
    ];
     private $brands = [
        'HP',
        'Dell',
        'Lenovo',
        'Apple',
    ];


    public function run()
    {
        foreach ($this->categories as $category) {
            Category::create(['name' => $category]);
        };
        foreach ($this->brands as $brand) {
            Brand::create(['name' => $brand]);
        };

        $this->call(ProductSeeder::class);
    }
}
