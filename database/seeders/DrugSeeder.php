<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrugSeeder extends Seeder
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
            'name' => 'Anflat 100cc',
            'category' => 'Prevents Maag',
            'image' => 'https://d2qjkwm11akmwu.cloudfront.net/products/615854_20-5-2019_9-11-8.jpg'
            ],
            [
            'name' => 'Omeprazole',
            'category' => 'Headchace Medicine',
            'image' => 'https://d2qjkwm11akmwu.cloudfront.net/products/825426_4-11-2020_10-29-21.jpeg'   
            ]            
        ];

        DB::table('drug')->insert($data);
    }
}
