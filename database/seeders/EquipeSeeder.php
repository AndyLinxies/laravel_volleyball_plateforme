<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            [
                'nom' => 'Volley Brussels',
                'ville' => 'Brussels',
                'pays' => 'Belgium',
                'maxPlayer' => 9,
                'continents_id' => 3,           
            ],
            [
                'nom' => 'Volley Compton',
                'ville' => 'Compton',
                'pays' => 'US',
                'maxPlayer' => 9,
                'continents_id' => 4,           
            ],
        ]);
    }
}
