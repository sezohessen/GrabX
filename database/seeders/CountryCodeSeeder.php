<?php

namespace Database\Seeders;

use App\Models\CountryCode;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CountryCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker      = Faker::create();
        $image      = Image::where('base', CountryCode::base)->get();
        $faker_ar   = Faker::create('ar_SA');
        for ($i = 0; $i < 6; $i++) {
            DB::table('country_codes')->insert([
                'name'              => $faker->country,
                'name_ar'           => $faker_ar->country,
                'flag_id'           => $image->random()->id,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}
