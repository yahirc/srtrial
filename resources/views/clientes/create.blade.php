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
                    <label for="nombre" class="col-form-label-sm">Nombre: </label>
                    <input class="form-control form-control-sm" type="text" name="nombre" id="nombre">
                </div>
                <div class="form-group col-sm-6">
                    <label for="apellido" class="col-form-label-sm">Apellido: </label>
                    <input class="form-control form-control-sm" type="text" name="apellido" id="apellido">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="dir_res" class="col-form-label-sm">Direccion: </label>
                    <input class="form-control form-control-sm" type="text" name="dir_res" id="dir_res">
                </div>
                <div class="form-group col-sm-6">
                    <label for="tel_res" class="col-form-label-sm">Telefono: </label>
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
                    <label for="nom_emp" class="col-form-label-sm">Nombre: </label>
                    <input class="form-control form-control-sm" type="text" name="nom_emp" id="nom_emp">
                </div>
                <div class="form-group col-sm-6">
                    <label for="ocupacion" class="col-form-label-sm">Ocupacion: </label>
                    <input class="form-control form-control-sm" type="text" name="ocupacion" id="ocupacion">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="dir_emp" class="col-form-label-sm">Direccion: </label>
                    <input class="form-control form-control-sm" type="text" name="dir_emp" id="dir_emp">
                </div>
                <div class="form-group col-sm-6">
                    <label for="tel_emp" class="col-form-label-sm">Telefono: </label>
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
                    <label for="tipo_clie" class="col-form-label-sm">Tipo: </label>
                    <input type="text" class="form-control form-control-sm" name="tipo_clie" id="tipo_clie">
                </div>
                <div class="form-group col-sm-3">
                    <label for="perf_clie" class="col-form-label-sm">Perfil: </label>
                    <input class="form-control form-control-sm" type="text" name="perf_clie" id="perf_clie">
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Medidas</h5>
        <div class="card-body">
            <div id="accordion">
                <p>
                    <a class="btn btn-sm btn-secondary collapsed" data-toggle="collapse" href="#collapsePrf" role="button" aria-expanded="false" aria-controls="collapsePrf">Perfil</a>
                    <a class="btn btn-sm btn-secondary collapsed" data-toggle="collapse" href="#collapseChq" role="button" aria-expanded="false" aria-controls="collapseChq">Chaqueta</a>
                    <a class="btn btn-sm btn-secondary collapsed" data-toggle="collapse" href="#collapsePan" role="button" aria-expanded="false" aria-controls="collapsePan">Pantalon</a>
                    <a class="btn btn-sm btn-secondary collapsed" data-toggle="collapse" href="#collapseCam" role="button" aria-expanded="false" aria-controls="collapseCam">Camisa</a>
                </p>
                <div id="collapsePrf" class="collapse" aria-labelledby="headingPrf" data-parent="#accordion">
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="pan_largo" class="col-form-label-sm">Edad</label>
                                    <input type="number" class="form-control form-control-sm" id="pan_largo">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="prf_peso" class="col-form-label-sm">Peso</label>
                                    <input class="form-control form-control-sm" type="number" id="prf_peso">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="prf_altura" class="col-form-label-sm">Altura</label>
                                    <input class="form-control form-control-sm" type="number" id="prf_altura">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                <label for="prf_comple" class="col-form-label-sm">Hombros</label>
                                    <select class="form-control form-control-sm" id="prf_comple">
                                        <option>Normal</option>
                                        <option>Altos</option>
                                        <option>Bajo</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="prf_comple" class="col-form-label-sm">Pecho</label>
                                    <select class="form-control form-control-sm" id="prf_comple">
                                        <option>Normal</option>
                                        <option>Fuerte</option>
                                        <option>Delgado</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="prf_comple" class="col-form-label-sm">Cintura</label>
                                    <select class="form-control form-control-sm" id="prf_comple">
                                        <option>Normal</option>
                                        <option>Salido</option>
                                        <option>Delgado</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="prf_comple" class="col-form-label-sm">Espalda</label>
                                    <select class="form-control form-control-sm" id="prf_comple">
                                        <option>Normal</option>
                                        <option>Curva</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="collapseChq" class="collapse" aria-labelledby="headingChq" data-parent="#accordion">
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="chq_pecho" class="col-form-label-sm">Pecho</label>
                                    <input type="number" class="form-control form-control-sm" id="chq_pecho">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="chq_cintu" class="col-form-label-sm">Cintura</label>
                                    <input class="form-control form-control-sm" type="number" id="chq_cintu">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="chq_largo" class="col-form-label-sm">Largo</label>
                                    <input type="number" class="form-control form-control-sm" id="chq_largo">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="chq_espal" class="col-form-label-sm">Espalda</label>
                                    <input class="form-control form-control-sm" type="number" id="chq_espal">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="chq_hombro" class="col-form-label-sm">Hombro</label>
                                    <input class="form-control form-control-sm" type="number" id="chq_hombro">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="chq_manga" class="col-form-label-sm">Manga</label>
                                    <input class="form-control form-control-sm" type="number" id="chq_manga">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="chq_cortam" class="col-form-label-sm">Corta 1</label>
                                    <input type="number" class="form-control form-control-sm" id="chq_cortam">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="chq_cortat" class="col-form-label-sm">Corta 2</label>
                                    <input class="form-control form-control-sm" type="number" id="chq_cortat">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="chq_hombro" class="col-form-label-sm">CT Total</label>
                                    <input class="form-control form-control-sm" type="number" id="chq_hombro">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="chq_talla" class="col-form-label-sm">Talla</label>
                                    <input class="form-control form-control-sm" type="number" id="chq_talla">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="collapsePan" class="collapse" aria-labelledby="headingPan" data-parent="#accordion">
                    <div class="card-body">
                        <form>
                        <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="pan_cintu" class="col-form-label-sm">Cintura</label>
                                    <input type="number" class="form-control form-control-sm" id="pan_cintu">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="pan_base" class="col-form-label-sm">Base</label>
                                    <input class="form-control form-control-sm" type="number" id="pan_base">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="pan_largo" class="col-form-label-sm">Largo</label>
                                    <input type="number" class="form-control form-control-sm" id="pan_largo">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="pan_cintu" class="col-form-label-sm">Cintura</label>
                                    <input class="form-control form-control-sm" type="number" id="pan_cintu">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="pan_pierna" class="col-form-label-sm">Pierna</label>
                                    <input class="form-control form-control-sm" type="number" id="pan_pierna">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="pan_rodi" class="col-form-label-sm">Rodilla</label>
                                    <input type="number" class="form-control form-control-sm" id="pan_rodi">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="pan_bota" class="col-form-label-sm">Bota</label>
                                    <input class="form-control form-control-sm" type="number" id="pan_bota">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="pan_tiro" class="col-form-label-sm">Tiro</label>
                                    <input class="form-control form-control-sm" type="number" id="pan_tiro">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="pan_talla" class="col-form-label-sm">Talla</label>
                                    <input class="form-control form-control-sm" type="number" id="pan_talla">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="collapseCam" class="collapse" aria-labelledby="headingCam" data-parent="#accordion">
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="chq_pecho" class="col-form-label-sm">Pecho</label>
                                    <input type="number" class="form-control form-control-sm" id="chq_pecho">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="cam_cintu" class="col-form-label-sm">Cintura</label>
                                    <input class="form-control form-control-sm" type="number" id="cam_cintu">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="cam_base" class="col-form-label-sm">Base</label>
                                    <input type="number" class="form-control form-control-sm" id="cam_base">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="chq_cintu" class="col-form-label-sm">Bicep</label>
                                    <input class="form-control form-control-sm" type="number" id="chq_cintu">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="chq_cintu" class="col-form-label-sm">Ant. B</label>
                                    <input class="form-control form-control-sm" type="number" id="chq_cintu">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-2">
                                    <label for="cam_cuello" class="col-form-label-sm">Cuello</label>
                                    <input type="number" class="form-control form-control-sm" id="cam_cuello">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="cam_espal" class="col-form-label-sm">Espalda</label>
                                    <input class="form-control form-control-sm" type="number" id="cam_espal">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="cam_puno" class="col-form-label-sm">Puño </label>
                                    <input class="form-control form-control-sm" type="number" id="cam_puno">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="cam_talla" class="col-form-label-sm">Talla</label>
                                    <input class="form-control form-control-sm" type="number" id="cam_talla">
                                </div>
                            </div>
                        </form>
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