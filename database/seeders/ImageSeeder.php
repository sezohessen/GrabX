<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'name'              =>  "product1.jpg",
                'base'              =>  "/img/products/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "product2.jpg",
                'base'              =>  "/img/products/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "product3.jpg",
                'base'              =>  "/img/products/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "product4.jpg",
                'base'              =>  "/img/products/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "product5.jpg",
                'base'              =>  "/img/products/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "product6.jpg",
                'base'              =>  "/img/products/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "product7.jpg",
                'base'              =>  "/img/products/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],[
                'name'              =>  "product8.jpg",
                'base'              =>  "/img/products/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "product9.jpg",
                'base'              =>  "/img/products/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "product10.jpg",
                'base'              =>  "/img/products/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "EG.svg",
                'base'              =>  "/img/flag/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "KW.svg",
                'base'              =>  "/img/flag/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "BH.svg",
                'base'              =>  "/img/flag/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "logon.png",
                'base'              =>  "/img/logo/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
            [
                'name'              =>  "bg.png",
                'base'              =>  "/img/bg/",
                'updated_at'        =>  now(),
                'created_at'        =>  now()
            ],
        ];
        foreach ($array as $value){
            DB::table('images')->insert([
                'name'              =>  $value['name'],
                'base'              =>  $value['base'],
                'updated_at'        =>  $value['updated_at'],
                'created_at'        =>  $value['created_at'],
            ]);
        }
    }
}
