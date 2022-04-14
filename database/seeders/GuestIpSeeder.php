<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class GuestIpSeeder extends Seeder
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
            DB::table('guests_ip')->insert([
                'ip'                    => $faker->countryCode,
                'iso_code'              => $faker->numberBetween(5,50),
                'country'               => $faker->country(),
                'city'                  => $faker->city(),
                'state'                 => $faker->city(),
                'state_name'            => $faker->city(),
                'postal_code'           => $faker->postcode(),
                'lat'                   => $faker->longitude(),
                'lon'                   => $faker->longitude(),
                'timezone'              => $faker->timezone(),
                'continent'             => $faker->country(),
                'currency'              => $faker->currencyCode(),

            ]);
        }
    }
}
