<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DoctorSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(DrugSeeder::class);
        $this->call(PatientSeeder::class);
    }
}
