<?php

namespace Database\Seeders;

use App\Models\Governorate;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductAdditionalOptionItem;
use App\Models\ProductMultipleSelectItem;
use App\Models\ProductSelectOptionItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker          = Faker::create();
        $faker_ar       = Faker::create('ar_SA');
        $governorates   = Governorate::all();
        $products       = Product::all();

        /* Prepare for Orders */

        /* Make Select option For products */
        for ($i = 0; $i < 20; $i++) {
            $idOption     = DB::table('product_select_options')->insertGetId([
                'name'          => $faker->name,
                'product_id'    => $product = $products->random()->id,
                'type'          => $type = $faker->numberBetween(1,3),
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
            $rand = rand(1,3);
            for ($j = 0; $j < $rand; $j++) {
                DB::table('product_select_option_items')->insert([
                    'name'          => $faker->name,
                    'price'         => $faker->numberBetween(1,5),
                    'max_count'     => ($type = ProductSelectOptionItem::MultipleSelect)? $faker->numberBetween(5,10) : NULL,
                    'product_id'    => $product,
                    'product_select_option_id'         => $idOption,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ]);
            }
        }
        $product_option     = ProductSelectOptionItem::all();

        /* Make Order Seeder with way of order(Pickup,Deliverly ) with it's information and order items details */
        for ($i = 0; $i < 40; $i++) {
            $id     = DB::table('orders')->insertGetId([
                'name'              => $faker->name,
                'phone'             => $faker->phoneNumber,
                'email'             => $faker->boolean ? $faker->email: NULL,
                'pickup'            => $existPickUP = ($faker->boolean) ? 1:0,
                'deliverly'         => $existPickUP ? 0 : 1,
                'discount'          => $faker->boolean ? $faker->numberBetween(5,80): 0,
                'subtotal'          => $price = $faker->numberBetween(5,150),
                'deliverly_cost'    => $existPickUP ? 0 : $faker->numberBetween(1,10),
                'total'             => $faker->numberBetween($price,151),
                'status'            => $existPickUP ? Order::Pending:$faker->numberBetween(1,4),
                'created_at'        => $faker->dateTimeBetween('-1 month', '+1 month'),
                'updated_at'        => now(),
            ]);
            if($existPickUP){
                DB::table('order_pickups')->insert([
                    'order_id'      => $id,
                    'make'          => $faker->countryCode,
                    'color'         => $faker->colorName,
                    'license'       => $faker->name,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ]);
            }else{
                $governorate = $governorates->random();
                DB::table('order_deliverlies')->insert([
                    'order_id'          => $id,
                    'governorate_id'    => $governorate->id,
                    'city_id'           => $governorate->cities->random()->id,
                    'unit_type'         => $faker->numberBetween(1,3),
                    'street'            => $faker->city,
                    'house_num'         => $faker->numberBetween(1,10),
                    'special_direction' => $faker->city,
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ]);
            }
            for ($j = 0; $j < 3; $j++) {
                DB::table('order_items')->insert([
                    'order_id'          => $id,
                    'product_id'        => $product = $products->random()->id,
                    'qty'               => $faker->numberBetween(1,4),
                    'price'             => $faker->numberBetween(1,50),
                    'subtotal'          => $faker->boolean ? NULL: $faker->numberBetween(1,50),
                    'created_at'        => $faker->dateTimeBetween('-2 week', 'now'),
                    'updated_at'        => now(),
                ]);
                $rand = rand(0,3);
                for ($j = 0; $j < $rand; $j++) {
                    DB::table('order_item_options')->insert([
                        'order_id'          => $id,
                        'product_id'        => $product,
                        'product_select_option_item_id'    => $product_option->random()->id,
                        'qty'               => $faker->numberBetween(1,4),
                        'created_at'        => now(),
                        'updated_at'        => now(),
                    ]);
                }
            }
        }
    }
}
