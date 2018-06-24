@extends('layouts.master')

@section('content')

    <h1>Clientes</h1>

    </hr>

    <form method="POST" action="{{url('/clientes')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="cedula">Identificacion: </label>
            <input class="form-control" type="text" name="cedula" id="cedula">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre: </label>
            <input class="form-control" type="text" name="nombre" id="nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido: </label>
            <input class="form-control" type="text" name="apellido" id="apellido">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Primary</button>
        </div>
        <div class="form-group">
            @include('layouts.errors')
        </div>
    </form>

@stop 