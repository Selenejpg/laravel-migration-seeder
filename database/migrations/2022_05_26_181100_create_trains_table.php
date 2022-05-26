<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 45);
            $table->string('stazione_partenza', 45);
            $table->string('stazione_arrivo', 45);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->integer('codice_treno');
            $table->tinyInteger('n_carrozze');
            $table->boolean('on_time', 3);
            $table->boolean('cancelled', 3);
            $table->string('data_partenza', 10);
            $table->timestamps('');
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
}
