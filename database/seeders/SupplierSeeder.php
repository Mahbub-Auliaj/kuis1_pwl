<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
            'name' => 'Polo Bag for men',
            'category' => 'Mens Bag',
            'price' => 'USD 150.0'
            ],
            [
            'name' => 'Gucci Minibag for women',
            'category' => 'Womens Bag',
            'price' => 'USD 250.0'   
            ],
            [
            'name' => 'Crocodile Shoes brown theme',
            'category' => 'Shoes',
            'price' => 'USD 200.0'   
            ]
        ];

        DB::table('product')->insert($data);
    }
}
