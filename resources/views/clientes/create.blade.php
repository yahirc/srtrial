@extends('layouts.master') @section('content')

<h1>Clientes</h1>

<hr style="background-color: #5DADE2" />

<form method="POST" action="{{url('/clientes')}}">
    {{ csrf_field() }}
    <div class="card">
        <h5 class="card-header">Datos Personales</h5>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-sm-1">
                    <label for="sucursal" class="col-form-label-sm">Sucursal</label>
                    <input type="number" class="form-control form-control-sm" name="sucursal" id="sucursal">
                </div>
                <div class="form-group col-sm-3">
                    <label for="cedula" class="col-form-label-sm">Identificacion: </label>
                    <input class="form-control form-control-sm" type="text" name="cedula" id="cedula" placeholder="Cedula">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="nombre">Nombre: </label>
                    <input class="form-control form-control-sm" type="text" name="nombre" id="nombre">
                </div>
                <div class="form-group col-sm-6">
                    <label for="apellido">Apellido: </label>
                    <input class="form-control form-control-sm" type="text" name="apellido" id="apellido">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="dir_res">Direccion: </label>
                    <input class="form-control form-control-sm" type="text" name="dir_res" id="dir_res">
                </div>
                <div class="form-group col-sm-6">
                    <label for="tel_res">Telefono: </label>
                    <input class="form-control form-control-sm" type="number" name="tel_res" id="tel_res">
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Datos Empresa</h5>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="nom_emp">Nombre: </label>
                    <input class="form-control form-control-sm" type="text" name="nom_emp" id="nom_emp">
                </div>
                <div class="form-group col-sm-6">
                    <label for="ocupacion">Ocupacion: </label>
                    <input class="form-control form-control-sm" type="text" name="ocupacion" id="ocupacion">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="dir_emp">Direccion: </label>
                    <input class="form-control form-control-sm" type="text" name="dir_emp" id="dir_emp">
                </div>
                <div class="form-group col-sm-6">
                    <label for="tel_emp">Telefono: </label>
                    <input class="form-control form-control-sm" type="number" name="tel_emp" id="tel_emp">
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Caracteristicas Cliente</h5>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-sm-1">
                    <label for="tipo_clie">Tipo: </label>
                    <input type="text" class="form-control form-control-sm" name="tipo_clie" id="tipo_clie">
                </div>
                <div class="form-group col-sm-3">
                    <label for="perf_clie">Perfil: </label>
                    <input class="form-control form-control-sm" type="text" name="perf_clie" id="perf_clie">
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Medidas</h5>
        <div class="card-body">
                <div class="card-body" id="myGroup">
                    <p>
                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" data-parent="#myGroup" aria-expanded="false" aria-controls="collapseExample">
                            Cliente
                        </button>
                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample1" data-parent="#myGroup" aria-expanded="false" aria-controls="collapseExample1">
                            Pantalon
                        </button>
                        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample2" data-parent="#myGroup" aria-expanded="false" aria-controls="collapseExample2">
                            Chaqueta
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <form>
                                <div class="form-group">
                                    <label for="prf_comple">Complexion</label>
                                    <select class="form-control form-control-sm" name="prf_comple" id="prf_comple">
                                        <option>Delgado</option>
                                        <option>Normal</option>
                                        <option>Musculoso</option>
                                        <option>Muy Musculoso</option>
                                        <option>Corpulento</option>
                                        <option>Senior</option>
                                        <option>Otro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="prf_abdom">Abdomen</label>
                                    <select class="form-control form-control-sm" name="pef_abdom" id="prf_abdom">
                                        <option>Normal</option>
                                        <option>Plano</option>
                                        <option>Redondo</option>
                                        <option>Salido</option>
                                        <option>Otro</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-2">
                                        <label for="prf_peso">Peso</label>
                                        <input type="text" class="form-control form-control-sm" name="prfpeso" id="prf_peso">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="prf_altura">Altura </label>
                                        <input class="form-control form-control-sm" type="text" id="prf_altura">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-sm-2">
                                        <label for="pan_largo">Largo</label>
                                        <input type="number" class="form-control form-control-sm" name="pan_largo" id="pan_largo">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="pan_entrep">Entrepierna </label>
                                        <input class="form-control form-control-sm" type="number" name="pan_entrep" id="pan_entrep">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="pan_base">Base </label>
                                        <input class="form-control form-control-sm" type="number" name="pan_base" id="pan_base">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="pan_cintu">Cintura </label>
                                        <input class="form-control form-control-sm" type="number" name="pan_cintu" id="pan_cintu">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-2">
                                        <label for="pan_pierna">Pierna</label>
                                        <input type="number" class="form-control form-control-sm" name="pan_pierna" id="pan_pierna">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="pan_rodi">Rodilla</label>
                                        <input class="form-control form-control-sm" type="number" name="pan_rodi" id="pan_rodi">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="pan_bota">Bota </label>
                                        <input class="form-control form-control-sm" type="number" name="pan_bota" id="pan_bota">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="pan_tiro">Tiro</label>
                                        <input class="form-control form-control-sm" type="number" name="pan_tiro" id="pan_tiro">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-sm-2">
                                        <label for="chq_talle">Talle</label>
                                        <input type="number" class="form-control form-control-sm" name="chq_talle" id="chq_talle">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="chq_largo">Largo</label>
                                        <input class="form-control form-control-sm" type="number" name="chq_largo" id="chq_largo">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="chq_espal">Espalda</label>
                                        <input class="form-control form-control-sm" type="number" name="chq_espal" id="chq_espal">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="chq_hombro">Hombro</label>
                                        <input class="form-control form-control-sm" type="number" name="chq_hombro" id="chq_hombro">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-2">
                                        <label for="chq_manga">Manga</label>
                                        <input type="number" class="form-control form-control-sm" name="chq_manga" id="chq_manga">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="chq_pecho">Pecho</label>
                                        <input class="form-control form-control-sm" type="number" name="chq_pecho" id="chq_pecho">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="chq_cintu">Cintura</label>
                                        <input class="form-control form-control-sm" type="number" name="chq_cintu" id="chq_cintu">
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <label for="chq_talla">Talla</label>
                                        <input class="form-control form-control-sm" type="number" name="chq_talla" id="chq_talla">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
    </div>
    <div class="form-group">
        @include('layouts.errors')
    </div>
</form>
@stop