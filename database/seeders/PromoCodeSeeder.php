<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PromoCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker      = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('promo_codes')->insert([
                'code'                  => $faker->countryCode,
                'discount'              => $faker->numberBetween(5,100),
                'max_price_discount'    => $faker->numberBetween(50,500),
                'max_count'             => $num = $faker->numberBetween(500,1000),
                'usable'                => $faker->numberBetween(10,$num),
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}
