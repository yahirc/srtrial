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
            $table->integer('num_clie');
            $table->string('sucursal',2);
            $table->string('cedula',15);
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->date('fec_nac');
            $table->string('dir_res',30);
            $table->string('ciudadc',15);
            $table->string('tel_res',20);
            $table->string('tel_mov',20);
            $table->string('sexo',10);
            $table->string('email',40);
            $table->string('nom_emp',20);
            $table->string('ocupacion',20);
            $table->string('dir_emp',30);
            $table->string('tel_emp',20);
            $table->string('ciudade',15);
            $table->string('profesion',20);
            $table->string('est_civil',10);
            $table->string('estado',1);
            $table->date('fec_crea');
            $table->string('fec_actua');
            $table->string('tipo_clie',10);
            $table->string('perf_clie',10);
            $table->string('vend_clie',2);
            $table->string('colores',10);
            $table->string('prf_comple',20);
            $table->string('prf_abdom',10);
            $table->decimal('prf_peso',6,1);
            $table->decimal('prf_altura',5,2);
            $table->decimal('pan_largo',6,1);
            $table->decimal('pan_entrep',6,1);
            $table->decimal('pan_base',6,1);
            $table->decimal('pan_cintu',6,1);
            $table->decimal('pan_pierna',6,1);
            $table->decimal('pan_rodi',6,1);
            $table->decimal('pan_bota',6,1);
            $table->decimal('pan_tiro',6,1);
            $table->smallInteger('pan_talla');
            $table->string('pan_pds',20);
            $table->text('pan_observ');
            $table->decimal('chq_talle',6,1);
            $table->decimal('chq_largo',6,1);
            $table->decimal('chq_espal',6,1);
            $table->decimal('chq_hombro',6,1);
            $table->decimal('chq_manga',6,1);
            $table->decimal('chq_pecho',6,1);
            $table->decimal('chq_cintu',6,1);
            $table->smallInteger('chq_talla');
            $table->decimal('chq_cortam',6,1);
            $table->decimal('chq_cortat',6,1);
            $table->string('chq_pds',20);
            $table->text('chq_observ');
            $table->decimal('cam_cuello',6,1);
            $table->decimal('cam_espal',6,1);
            $table->decimal('cam_base',6,1);
            $table->decimal('cam_cintu',6,1);
            $table->decimal('cam_largo',6,1);
            $table->decimal('cam_puno',6,1);
            $table->decimal('cam_manga',6,1);
            $table->smallInteger('cam_talla');
            $table->string('cam_pds',20);
            $table->text('cam_observ');
            $table->decimal('chl_largo',6,1);
            $table->decimal('chl_escot1',6,1);
            $table->decimal('chl_escot2',6,1);
            $table->decimal('chl_espal',6,1);
            $table->smallInteger('chl_talla');
            $table->text('chl_observ');
            $table->decimal('fal_largo',6,1);
            $table->decimal('fal_cintu',6,1);
            $table->decimal('fal_base',6,1);
            $table->smallInteger('fal_talla');
            $table->text('fal_observ');
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
