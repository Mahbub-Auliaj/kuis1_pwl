<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Alex Mahendra',
            'specialist' => 'Dental',
            'city' => 'Sumenep'
            ],
            [
            'name' => 'Amin Ammar',
            'specialist' => 'Skin',
            'city' => 'Jember'   
            ],
            [
            'name' => 'Febrian Ikhza',
            'specialist' => 'Eye',
            'city' => 'Kediri'   
            ]
        ];

        DB::table('doctor')->insert($data);
    }
}
