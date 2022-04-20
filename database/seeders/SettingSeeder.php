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
            'company_name'      => tenant('company'),
            'desc'              => '',
            'desc_ar'           => '',
            'updated_at'        => now(),
            'created_at'        => now()
        ]);
    }
}
