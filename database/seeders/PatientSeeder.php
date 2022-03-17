<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Edi Caksono',
            'complaint' => 'Dental',
            'city' => 'Magelang'
            ],
            [
            'name' => 'Mukhtar Ari',
            'complaint' => 'Eye Sight',
            'city' => 'Solo'   
            ],
            [
            'name' => 'Deden Simajuntak',
            'complaint' => 'Sense of Nose',
            'city' => 'Pasuruan'   
            ]
        ];

        DB::table('patient')->insert($data);
    }
}
