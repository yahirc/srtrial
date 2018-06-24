@extends('layouts.master')

@section('content')

    <h1>Registro</h1>

    </hr>

    <form method="POST" action="{{url('/register')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="alias">Usuario: </label>
            <input class="form-control" name="alias" type="text" id="alias" required>
        </div>
        <div class="form-group">
            <label for="sucursal">Sucursal: </label>
            <input class="form-control" name="sucursal" type="text" id="sucursal" required>
        </div>
        <div class="form-group">
            <label for="password">Clave: </label>
            <input class="form-control" name="password" type="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmar Clave: </label>
            <input class="form-control" name="password_confirmation" type="password" id="password_confirmation" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        <div class="form-group">
            @include('layouts.errors')
        </div>
    </form>

@stop 