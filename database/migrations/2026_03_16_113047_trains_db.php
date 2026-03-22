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
            //qui usero datatime per gestire data e ora insieme
            $table->dataTime('orario_partenza');
            $table->datatime('orario_arrivo');
            //qui usero uniche come codicde unico per evitare duplicati
            $table->string('codice_treno')->uniche();
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
        //
    }
};
