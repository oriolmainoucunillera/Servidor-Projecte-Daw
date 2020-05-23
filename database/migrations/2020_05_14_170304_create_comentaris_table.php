<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentaris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('producte_id');
            $table->string('comentari');
            $table->string('foto');
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
        Schema::dropIfExists('comentaris');
    }
}
