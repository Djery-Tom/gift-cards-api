<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->truncate();

        DB::table('cards')->insert([
            [
                'name' => 'SaddleBrown',
                'value' => 100,
                'type_id' => 6,
            ],
            [
                'name' => 'Crimson',
                'value' => 80,
                'type_id' => 7,
            ],
            [
                'name' => 'Tomato',
                'value' => 60,
                'type_id' => 8,
            ],
            [
                'name' => 'LightCoral',
                'value' => 40,
                'type_id' => 9,
            ],
            [
                'name' => 'SeaShell',
                'value' => 20,
                'type_id' => 10,
            ]
        ]);
    }
}
