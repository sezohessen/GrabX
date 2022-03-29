<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class GovernorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker      = Faker::create();
        $faker_ar   = Faker::create('ar_SA');
        for ($i = 0; $i < 15; $i++) {
            $id     = DB::table('governorates')->insertGetId([
                'name'              => $faker->country,
                'name_ar'           => $faker_ar->country,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
            for ($j=0; $j < 10; $j++) {
                DB::table('cities')->insert([
                    'name'              => $faker->country,
                    'name_ar'           => $faker_ar->country,
                    'governorate_id'    => $id,
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ]);
            }
        }
    }
}
