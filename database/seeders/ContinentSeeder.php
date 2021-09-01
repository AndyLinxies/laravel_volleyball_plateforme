<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            [
                'name' => 'Africa',

            ],
            [
                'name' => 'Asia',

            ],
            [
                'name' => 'Europe',

            ],
            [
                'name' => 'North america',

            ],
            [
                'name' => 'South America',

            ],
            [
                'name' => 'Oceania',

            ],
        ]);
    }
}
