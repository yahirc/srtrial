@extends('layouts.master')

@section('content')

    <h1>Clientes</h1>

    </hr>

    <form method="POST" action="{{url('/clientes')}}">
        {{ csrf_field() }}
        <div class="card">
            <h5 class="card-header">Datos Personales</h5>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-sm-1">
                        <label for="sucursal">Sucursal</label>
                        <input type="number" class="form-control" id="sucursal">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="cedula">Identificacion: </label>
                        <input class="form-control" type="text" id="cedula" placeholder="Cedula" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="nombre">Nombre: </label>
                        <input class="form-control" type="text" id="nombre">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="apellido">Apellido: </label>
                        <input class="form-control" type="text"  id="apellido">
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
                        <input class="form-control" type="text"  id="nom_emp">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="ocupacion">Ocupacion: </label>
                        <input class="form-control" type="text" id="ocupacion">
                    </div>
                </div>
                <div class="form-row">
                     <div class="form-group col-sm-6">
                        <label for="dir_emp">Direccion: </label>
                        <input class="form-control" type="text"  id="dir_emp">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="tel_emp">Telefono: </label>
                        <input class="form-control" type="number" id="tel_emp">
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
                        <input type="text" class="form-control" id="tipo_clie">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="perf_clie">Perfil: </label>
                        <input class="form-control" type="text" id="perf_clie">
                    </div>
                </div>   
            </div>
        </div>
        <div class="form-group">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Medidas
                        </button>
                    </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Ajjj
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
             <button type="submit" class="btn btn-primary">Primary</button>
        </div>
        <div class="form-group">
             @include('layouts.errors')
        </div>      
    </form>
@stop 