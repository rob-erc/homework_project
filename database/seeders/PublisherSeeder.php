<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('publishers')->insert(
            [
                [
                    'name' => 'Electronic Arts',
                    'description' => 'Publisher of a lot of sports games',
                    'is_european' => 0,
                    'number_of_employees' => 1001,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Ubisoft',
                    'description' => 'Global company, authors of many large titles',
                    'number_of_employees' => 2002,
                    'is_european' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Activision Blizzard',
                    'description' => 'Random description',
                    'number_of_employees' => 3003,
                    'is_european' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
