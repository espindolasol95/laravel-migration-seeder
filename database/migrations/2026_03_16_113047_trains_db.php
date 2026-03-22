<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {

            $table->id();
            $table->string('azienda');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            //qui usero datetime per gestire data e ora insieme
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            //qui usero uniqhe come codicde unico per evitare duplicati
            $table->string('codice_treno')->unique();
            //interger -> numero intero
            $table->integer('totale_carrozze');
            //booleano valore vero o falso
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
