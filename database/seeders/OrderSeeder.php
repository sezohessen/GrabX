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
    public function seedProductOption($table1,$table2,$column,$products,$OneSelect = NULL){
        $faker          = Faker::create();
        $faker_ar       = Faker::create('ar_SA');
        /* Make Select option For products */
        for ($i = 0; $i < 2; $i++) {
            $idOption     = DB::table($table1)->insertGetId([
                'name'          => $faker->name,
                'name_ar'       => $faker_ar->name,
                'product_id'    => $product = $products->random()->id,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
            $fixed = 2;
            if($OneSelect)$fixed = 1;
            for ($j = 0; $j < $fixed; $j++) {
                DB::table($table2)->insert([
                    'name'          => $faker->name,
                    'name_ar'       => $faker_ar->name,
                    'price'         => $faker->numberBetween(1,5),
                    'product_id'    => $product,
                    $column         => $idOption,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ]);
            }
        }
    }
    public function seedOrderProductOption($table,$orderID,$productID,$columnName,$optionIDs,$qty = NULL)
    {
        $faker          = Faker::create();
        if($qty){
            for ($j = 0; $j < 2; $j++) {
                DB::table($table)->insert([
                    'order_id'          => $orderID,
                    'product_id'        => $productID,
                    $columnName         => $optionIDs->random()->id,
                    'qty'               => $faker->numberBetween(1,4),
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ]);
            }
        }else{
            for ($j = 0; $j < 2; $j++) {
                DB::table($table)->insert([
                    'order_id'          => $orderID,
                    'product_id'        => $productID,
                    $columnName         => $optionIDs->random()->id,
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ]);
            }
        }

    }
    public function run()
    {
        $faker          = Faker::create();
        $faker_ar       = Faker::create('ar_SA');
        $governorates   = Governorate::all();
        $status         = Order::StatusType();
        $unit_type      = Order::UnitType();
        $products       = Product::all();

        /* Prepare for Orders */

        $this->seedProductOption(
            'product_select_options',
            'product_select_option_items',
            'product_select_option_id',
            $products,
            $OneSelect = 1
        );
        $this->seedProductOption(
            'product_multiple_selects',
            'product_multiple_select_items',
            'product_multiple_select_id',
            $products
        );
        $this->seedProductOption(
            'product_additional_options',
            'product_additional_option_items',
            'product_select_option_id',
            $products
        );
        $product_option     = ProductSelectOptionItem::all();
        $product_muloption  = ProductMultipleSelectItem::all();
        $product_addition   = ProductAdditionalOptionItem::all();

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
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ]);
                $rand = rand(0,3);
                if(!$rand){
                    $this->seedOrderProductOption(
                        'order_item_options',
                        $id,
                        $product,
                        'product_select_option_item_id',
                        $product_option
                    );
                }
                $rand = rand(0,2);
                if(!$rand){
                    $this->seedOrderProductOption(
                        'order_product_multiple_selects',
                        $id,
                        $product,
                        'product_item_id',
                        $product_muloption
                    );
                }
                $rand = rand(0,2);
                if(!$rand){
                    $this->seedOrderProductOption(
                        'order_product_additional_option_items',
                        $id,
                        $product,
                        'product_item_id',
                        $product_addition,
                        $qty = 1
                    );
                }
            }

        }
    }
}
