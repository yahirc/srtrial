@extends('layouts.master') @section('content')

<h1>Clientes</h1>

<hr style="background-color: #5DADE2" />

<form method="POST" action="{{url('/clientes/update',$cliente->id)}}">
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
                    <input class="form-control form-control-sm" type="text" name="cedula" id="cedula" placeholder="Cedula" value="{{$cliente->cedula}}">
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
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
    </div>
    <div class="form-group">
        @include('layouts.errors')
    </div>
</form>
@stop