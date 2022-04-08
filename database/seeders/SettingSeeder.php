<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker      = Faker::create();
        $logo       = Image::where('base', Setting::logo)->get();
        $bg         = Image::where('base', Setting::bg)->get();
        DB::table('settings')->insert([
            'company_name'      => $faker->name,
            'desc'              => $faker->text,
            'desc_ar'           => $faker->text,
            'logo_id'           => $logo->random()->id,
            'bg_id'             => $bg->random()->id,
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
