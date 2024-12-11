<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          \App\Models\Student::factory()->create([
            'name' => 'Test User',
            'surname' => 'Test User Surname',
            'grade' => 1,
        ]);
    }
}
