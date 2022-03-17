<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'company_name' => 'Sido Muncul',
            'item' => 'Energy Drink',
            'city' => 'Semarang'
            ],
            [
            'company_name' => 'Ambifore',
            'item' => 'Alcohol 70%',
            'city' => 'Tangerang'   
            ],
            [
            'company_name' => 'Danone',
            'item' => 'Mineral Water',
            'city' => 'Jogjakarta'   
            ]
        ];

        DB::table('supplier')->insert($data);
    }
}
