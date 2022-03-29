<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(GovernorateSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CountryCodeSeeder::class);
        $this->call(PromoCodeSeeder::class);
        $this->call(ProductSelectOptionSeeder::class);
        $this->call([UserSeeder::class,]);
    }
}
