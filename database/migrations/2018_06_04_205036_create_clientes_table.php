<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_clie')->nullable();
            $table->string('sucursal',2)->nullable();
            $table->string('cedula',15)->nullable();
            $table->string('nombre',20)->nullable();
            $table->string('apellido',20)->nullable();
            $table->date('fec_nac')->nullable();
            $table->string('dir_res',30)->nullable();
            $table->string('ciudadc',15)->nullable();
            $table->string('tel_res',20)->nullable();
            $table->string('tel_mov',20)->nullable();
            $table->string('sexo',10)->nullable();
            $table->string('email',40)->nullable();
            $table->string('nom_emp',20)->nullable();
            $table->string('ocupacion',20)->nullable();
            $table->string('dir_emp',30)->nullable();
            $table->string('tel_emp',20)->nullable();
            $table->string('ciudade',15)->nullable();
            $table->string('profesion',20)->nullable();
            $table->string('est_civil',10)->nullable();
            $table->string('estado',1)->nullable();
            $table->date('fec_crea')->nullable();
            $table->string('fec_actua')->nullable();
            $table->string('tipo_clie',10)->nullable();
            $table->string('perf_clie',10)->nullable();
            $table->string('vend_clie',2)->nullable();
            $table->string('colores',10)->nullable();
            $table->string('prf_comple',20)->nullable();
            $table->string('prf_abdom',10)->nullable();
            $table->decimal('prf_peso',6,1)->nullable();
            $table->decimal('prf_altura',5,2)->nullable();
            $table->decimal('pan_largo',6,1)->nullable();
            $table->decimal('pan_entrep',6,1)->nullable();
            $table->decimal('pan_base',6,1)->nullable();
            $table->decimal('pan_cintu',6,1)->nullable();
            $table->decimal('pan_pierna',6,1)->nullable();
            $table->decimal('pan_rodi',6,1)->nullable();
            $table->decimal('pan_bota',6,1)->nullable();
            $table->decimal('pan_tiro',6,1)->nullable();
            $table->smallInteger('pan_talla')->nullable();
            $table->string('pan_pds',20)->nullable();
            $table->text('pan_observ')->nullable();
            $table->decimal('chq_talle',6,1)->nullable();
            $table->decimal('chq_largo',6,1)->nullable();
            $table->decimal('chq_espal',6,1)->nullable();
            $table->decimal('chq_hombro',6,1)->nullable();
            $table->decimal('chq_manga',6,1)->nullable();
            $table->decimal('chq_pecho',6,1)->nullable();
            $table->decimal('chq_cintu',6,1)->nullable();
            $table->smallInteger('chq_talla')->nullable();
            $table->decimal('chq_cortam',6,1)->nullable();
            $table->decimal('chq_cortat',6,1)->nullable();
            $table->string('chq_pds',20)->nullable();
            $table->text('chq_observ')->nullable();
            $table->decimal('cam_cuello',6,1)->nullable();
            $table->decimal('cam_espal',6,1)->nullable();
            $table->decimal('cam_base',6,1)->nullable();
            $table->decimal('cam_cintu',6,1)->nullable();
            $table->decimal('cam_largo',6,1)->nullable();
            $table->decimal('cam_puno',6,1)->nullable();
            $table->decimal('cam_manga',6,1)->nullable();
            $table->smallInteger('cam_talla')->nullable();
            $table->string('cam_pds',20)->nullable();
            $table->text('cam_observ')->nullable();
            $table->decimal('chl_largo',6,1)->nullable();
            $table->decimal('chl_escot1',6,1)->nullable();
            $table->decimal('chl_escot2',6,1)->nullable();
            $table->decimal('chl_espal',6,1)->nullable();
            $table->smallInteger('chl_talla')->nullable();
            $table->text('chl_observ')->nullable();
            $table->decimal('fal_largo',6,1)->nullable();
            $table->decimal('fal_cintu',6,1)->nullable();
            $table->decimal('fal_base',6,1)->nullable();
            $table->smallInteger('fal_talla')->nullable();
            $table->text('fal_observ')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
