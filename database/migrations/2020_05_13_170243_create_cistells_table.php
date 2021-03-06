<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCistellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cistells', function (Blueprint $table) {
            $table->id();
            $table->integer('cistella_id'); // serà un random
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
        Schema::dropIfExists('cistells');
    }
}
