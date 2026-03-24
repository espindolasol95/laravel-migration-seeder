<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //una volta creato il seeder qua dobbiamo mettere il nostro codice che esegua il nostro seeder 

        $this->call(TrainSeeder::class);
    }
}
