<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//importiamo il faker
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {

            $newTrain = new Train();

            $newTrain->azienda = fake()->randomElement(['Trenitalia', 'Italo', 'treno regionale']);
            $newTrain->stazione_partenza = fake()->city();
            $newTrain->stazione_arrivo = fake()->city();
            $newTrain->orario_partenza = fake()->dateTimeBetween('now', '+1 day');
            $newTrain->orario_arrivo = fake()->dateTimeBetween('+1 day', '+2 days');
            $newTrain->codice_treno = fake()->bothify('??###');
            $newTrain->totale_carrozze = fake()->numberBetween(5, 15);
            $newTrain->in_orario = fake()->boolean(80);
            $newTrain->cancellato = fake()->boolean(10);

            $newTrain->save();
        }
    }
}
