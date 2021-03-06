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
        for ($i = 0; $i < 10; $i++) {
            $id     = DB::table('governorates')->insertGetId([
                'name'              => $faker->country,
                'name_ar'           => $faker_ar->country,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
            for ($j=0; $j < 5; $j++) {
                DB::table('cities')->insert([
                    'name'              => $faker->country,
                    'name_ar'           => $faker_ar->country,
                    'deliverly_cost'    => $faker->numberBetween(1,20),
                    'governorate_id'    => $id,
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ]);
            }
        }
    }
}
