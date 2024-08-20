<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 5, 100), // Random float between 5 and 100
                'category_id' => $faker->numberBetween(2, 5), // Adjust range according to your categories
                'image' => 'product_images/' . $faker->image('public/storage/product_images', 640, 480, null, false),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
