<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create([
            'name' => 'T-Shirt'
        ]);

        ProductCategory::create([
            'name' => 'Pants'
        ]);

        ProductCategory::create([
            'name' => 'Shoes'
        ]);

        ProductCategory::create([
            'name' => 'Socks'
        ]);
    }
}
