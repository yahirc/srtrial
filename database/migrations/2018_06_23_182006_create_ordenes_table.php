<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sucursal',2);
            $table->integer('num_orden');
            $table->integer('cns_orden');
            $table->integer('num_clie');
            $table->integer('num_lote');
            $table->string('tipo',2);
            $table->string('estado',2);
            $table->string('producto',3);
            $table->text('descri');
            $table->string('descricor',100);
            $table->string('referenc',10);
            $table->text('observa');
            $table->date('fec_orden');
            $table->date('fec_entreg');
            $table->smallInteger('pan_cant');
            $table->string('pan_tipo',2);
            $table->text('pan_obs');
            $table->string('pan_colo',20);
            $table->string('pan_entreg',2);
            $table->date('pan_fecent');
            $table->string('pan_preti',20);
            $table->decimal('pan_pretia',6,1);
            $table->smallInteger('pan_prens');
            $table->smallInteger('pan_pascnt');
            $table->decimal('pan_pascmt',6,1);
            $table->string('pan_bfren',10);
            $table->string('pan_btder',2);
            $table->string('pan_btizq',2);
            $table->string('pan_btdert',15);
            $table->string('pan_btizqt',15);
            $table->string('pan_bota',8);
            $table->string('pan_forro',2);
            $table->string('pan_molde',10);
            $table->smallInteger('chq_cant');
            $table->string('chq_tipo',2);
            $table->text('chq_obs');
            $table->string('chq_colo',20);
            $table->string('chq_prueba',2);
            $table->date('chq_fecpru');
            $table->string('chq_entreg',2);
            $table->date('chq_fecent');
            $table->string('chq_clase',10);
            $table->smallInteger('chq_boton');
            $table->smallInteger('chq_adorno');
            $table->string('chq_abert',2);
            $table->smallInteger('chq_abertc');
            $table->decimal('chq_abertl',6,1);
            $table->string('chq_pasap',10);
            $table->string('chq_bgolf',2);
            $table->string('chq_manga',15);
            $table->smallInteger('chq_mangac');
            $table->string('chq_vuelo',10);
            $table->string('chq_solapa',10);
            $table->string('chq_bfrent',10);
            $table->string('chq_bpecho',10);
            $table->string('chq_forro',10);
            $table->string('chq_molde',10);
            $table->string('chq_afina',10);
            $table->string('chq_inici',20);
            $table->decimal('chq_pasapa',6,1);
            $table->string('chq_pespu',10);
            $table->decimal('chq_pespua',6,1);
            $table->decimal('chq_solaan',6,1);
            $table->smallInteger('cam_cant');
            $table->string('cam_tipo',2);
            $table->string('cam_colo',20);
            $table->string('cam_cuello',20);
            $table->string('cam_cpresp',10);
            $table->string('cam_ctextu',10);
            $table->string('cam_espald',10);
            $table->string('cam_peche',10);
            $table->string('cam_inic',10);
            $table->string('cam_inict',10);
            $table->string('cam_inicd',10);
            $table->string('cam_inicn',10);
            $table->string('cam_puno',10);
            $table->string('cam_bolsi',10);
            $table->smallInteger('chl_cant');
            $table->string('chl_tipo',2);
            $table->string('chl_colo',20);
            $table->smallInteger('fal_cant');
            $table->string('fal_tipo',2);
            $table->string('fal_colo',20);
            $table->string('vendedor',20);
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
        Schema::dropIfExists('ordenes');
    }
}
