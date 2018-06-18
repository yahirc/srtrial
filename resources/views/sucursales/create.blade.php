@extends('app')

@section('content')

    <h1>Sucursales</h1>

    </hr>

    <form method="POST" action="{{url('/sucursales')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="codsuc">Codigo: </label>
            <input class="form-control" name="codsuc" type="text" id="codsuc">
        </div>
        <div class="form-group">
            <label for="nomsuc">Descripcion: </label>
            <input class="form-control" name="nomsuc" type="text" id="nomsuc">
        </div>
        <div class="form-group">
            <label for="nomsuc">asasasas: </label>
            <input class="form-control" name="nomsuc" type="text" id="nomsuc">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Primary</button>
        </div>
    </form>

@stop 