<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ProductSelectOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker      = Faker::create();
        $products   = Product::all();
        for ($i = 0; $i < 20; $i++) {
            $id     = DB::table('product_select_options')->insertGetId([
                'name'              => $faker->name,
                'name_ar'           => $faker->name,
                'product_id'        => $productID = $products->random()->id,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
            for ($j=0; $j < 3; $j++) {
                DB::table('product_select_option_items')->insert([
                    'name'              => $faker->name,
                    'name_ar'           => $faker->name,
                    'price'             => $faker->numberBetween(1,5),
                    'product_id'        => $productID,
                    'product_select_option_id'    => $id,
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ]);
            }
        }
    }
}
