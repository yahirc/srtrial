<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sucursal',2);
            $table->integer('num_recca');
            $table->integer('num_clie');
            $table->integer('num_lote');
            $table->date('fec_recca');
            $table->date('fec_entreg');
            $table->string('tipo',2);
            $table->string('estado',2);
            $table->integer('valor');
            $table->integer('abono');
            $table->integer('descu');
            $table->integer('saldo');
            $table->string('anulado',1);
            $table->string('historico',1);
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
        Schema::dropIfExists('recibos');
    }
}
