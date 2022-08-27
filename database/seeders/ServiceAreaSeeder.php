<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_areas')->insert(
        [
        'address' => 'AAA Club Alliance Inc: Somerville Rd Annapolis 94088',
        'distance' => '23.5 miles',
        'created_at' => now()
        ]);
        DB::table('service_areas')->insert(
        [
        'address' => 'BBB Club Alliance Inc: Somerville Rd ',
        'distance' => '20.0 miles',
        'created_at' => now()
        ]);
    }
}
