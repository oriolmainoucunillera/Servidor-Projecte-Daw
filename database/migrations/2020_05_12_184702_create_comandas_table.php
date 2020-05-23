<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comandas', function (Blueprint $table) {
            $table->id();
            $table->integer('cistella_id'); // serà el mateix que a la taula cistells
            $table->foreignId('user_id');
            $table->foreignId('producte_id');
            $table->double('preu');
            $table->integer('quantitat');
            $table->double('preu_final');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('producte_id')->references('id')->on('productes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comandas');
    }
}
