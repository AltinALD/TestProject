<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \App\Models\Book::factory()->create([
            'title' => 'Test User',
            'author' => 'Test Authoe',
            'price' => 90,
        ]);
    }
}