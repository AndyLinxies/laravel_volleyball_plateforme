<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $gender= $faker->randomElement(['male', 'female']);
        DB::table('joueurs')->insert([
            [
                'nom' => $faker->firstName(),
                'prenom' => $faker->lastName(),
                'age'=>$faker->numberBetween(18,30),
                'phone'=>$faker->phoneNumber(),
                'email'=>$faker->email(),
                'genre'=>$gender,
                'paysOrigine'=>$faker->country(),
                'roles_id'=>2,
                'equipes_id'=>2,
                'photos_id'=>1
            ]
        ]);
    }
}
