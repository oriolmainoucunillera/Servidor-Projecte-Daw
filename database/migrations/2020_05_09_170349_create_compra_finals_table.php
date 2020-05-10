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
            $table->foreignId('cistella_id');
            $table->double('preu_final');
            $table->string('direccio_entrega');
            $table->integer('numero_targeta');
            $table->timestamps();

            $table->foreign('cistella_id')->references('id')->on('cistells');
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
