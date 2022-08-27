<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('jobs')->insert(
        [
        'title' => 'Web Developer',
        'service_id' => 1,
        'job_type' => 'Full Time',
        'job_location' => 'New York',
        'description' => 'We Need a Web Developer,Who has 3 years proven Working Experiences',
        'created_at' => now()
        ]);
        DB::table('jobs')->insert([
        'title' => 'Project Manager',
        'service_id' => 2,
        'job_type' => 'Full Time',
        'job_location' => 'Rawalpindi',
        'description' => 'We Need a Project Manager,Who has 3 years proven Working Experiences',
         'created_at' => now()]);
         DB::table('jobs')->insert([
        'title' => 'Business Analyst',
        'service_id' => 3,
        'job_type' => 'Part Time',
        'job_location' => 'Washington',
        'description' => 'We Need a business Analyst,Who has 3 years proven Working Experiences',
        'created_at' => now() ]);
    }
}
