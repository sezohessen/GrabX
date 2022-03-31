<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker      = Faker::create();
        $image      = Image::where('base', Product::base)->get();
        $faker_ar   = Faker::create('ar_SA');
        for ($i = 0; $i < 15; $i++) {
            $id     = DB::table('categories')->insertGetId([
                'name'              => $faker->name,
                'name_ar'           => $faker_ar->country,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
            for ($j=0; $j < 7; $j++) {
                DB::table('products')->insert([
                    'name'              => $faker->name,
                    'name_ar'           => $faker_ar->name,
                    'desc'              => $faker->text,
                    'desc_ar'           => $faker_ar->text,
                    'price'             => $faker->numberBetween(1,50),
                    'qty'               => $faker->numberBetween(0,3),
                    'availabe_qty'      => $faker->numberBetween(5,20),
                    'active'            => 1,
                    'image_id'          => $image->random()->id,
                    'category_id'       => $id,
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ]);
            }

        }
    }
}
