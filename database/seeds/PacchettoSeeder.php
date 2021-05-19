<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Pacchetto;

class PacchettoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 25; $i++){
            $newPacchetto = new Pacchetto();
            $newPacchetto->nome = $faker->word();
            $newPacchetto->destinazione = $faker->city;
            $newPacchetto->prezzo = $faker->randomFloat(2, 1, 9999);
            $newPacchetto->estero = $faker->boolean;
            $newPacchetto->save();

        }
    }
}
