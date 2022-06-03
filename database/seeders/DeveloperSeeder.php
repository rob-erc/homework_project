<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('developers')->insert(
            [
                [
                    'name' => 'BioWare',
                    'number_of_developers' => 200,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Square Enix',
                    'number_of_developers' => 300,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Bethesda Game Studios',
                    'number_of_developers' => 400,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
