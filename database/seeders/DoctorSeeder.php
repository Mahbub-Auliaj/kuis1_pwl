<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
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
            'name' => 'Andika Yudha',
            'specialist' => 'Lung',
            'city' => 'Surabaya'
            ],
            [
            'name' => 'Sutejo jiwo',
            'specialist' => 'Heart',
            'city' => 'Malang'   
            ],
            [
            'name' => 'Ahlan Kurniawan',
            'specialist' => 'Eye',
            'city' => 'Mojokerto'   
            ]
        ];

        DB::table('doctor')->insert($data);
    }
}
