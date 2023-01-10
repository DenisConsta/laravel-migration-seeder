<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {

            /*
                Azienda
                Stazione di partenza
                Stazione di arrivo
                Orario di partenza
                Orario di arrivo
                Codice Treno
                Numero Carrozze
                In orario
                Cancellato
            */

            $table->id();
            $table->string('company', 150);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 10);
            $table->tinyInteger('n_carriages')->unsigned();
            $table->boolean('in_time')->default(1);
            $table->boolean('deleted')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
