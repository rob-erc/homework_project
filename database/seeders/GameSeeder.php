<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('games')->insert(
            [
                [
                    'name' => 'Bioshock',
                    'description' => 'test',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'World of Warcraft',
                    'description' => 'test',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Elder scrolls: Skyrim',
                    'description' => 'test',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
