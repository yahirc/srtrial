@extends('layouts.master')

@section('content')

    <h1>Ingreso</h1>

    </hr>

    <form method="POST" action="{{url('/login')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="alias">Usuario: </label>
            <input class="form-control" name="alias" type="text" id="alias" required>
        </div>
        <div class="form-group">
            <label for="password">Clave: </label>
            <input class="form-control" name="password" type="password" id="password" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
        <div class="form-group">
            @include('layouts.errors')
        </div>
    </form>

@stop 