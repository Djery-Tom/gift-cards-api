<?php

namespace Database\Seeders;

use App\Models\CardType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardsTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards_types')->truncate();

        DB::table('cards_types')->insert([
            [
                'name' => 'Type 1',
                'max_avail_value' => 93,
            ],
            [
                'name' => 'Type 2',
                'max_avail_value' => 70,
            ],
            [
                'name' => 'Type 3',
                'max_avail_value' => 32,
            ],
            [
                'name' => 'Type 4',
                'max_avail_value' => 35,
            ],
            [
                'name' => 'Type 5',
                'max_avail_value' => 45,
            ],
            [
                'name' => 'Type 6',
                'max_avail_value' => 100,
            ],
            [
                'name' => 'Type 7',
                'max_avail_value' => 50,
            ],
            [
                'name' => 'Type 8',
                'max_avail_value' => 40,
            ],
            [
                'name' => 'Type 9',
                'max_avail_value' => 30,
            ],
            [
                'name' => 'Type 10',
                'max_avail_value' => 20,
            ]
        ]);
    }
}
