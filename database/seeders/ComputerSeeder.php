<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \App\Models\Computer::factory()->create([
            'brand' => 'Test Brand',
            'version' => 'Test Version',
            'price' => 230,
        ]);
    }
}
