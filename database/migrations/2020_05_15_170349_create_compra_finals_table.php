<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraFinalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_finals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('comanda_id')->unique(); // sera al meteix que cistella i comanda
            $table->double('preu_final');
            $table->string('direccio');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_finals');
    }
}
