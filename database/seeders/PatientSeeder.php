<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
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
            'name' => 'Bambang Supratman',
            'complaint' => 'Lower Back Pain',
            'city' => 'Gresik'
            ],
            [
            'name' => 'Aditya Nugraha',
            'complaint' => 'Lower Back Pain',
            'city' => 'Malang'   
            ],
            [
            'name' => 'Bagas Seto',
            'complaint' => 'Lower Back Pain',
            'city' => 'Pasuruan'   
            ]
        ];

        DB::table('patient')->insert($data);
    }
}
