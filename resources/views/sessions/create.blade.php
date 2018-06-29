@extends('layouts.master')

@section('content')

    <h1>Ingreso</h1>
    <hr style="background-color: #5DADE2" />

    <form method="POST" action="{{url('/login')}}">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="alias" class="col-sm-1 col-form-label col-form-label-sm">Usuario</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" name="alias" id="alias" placeholder="Usuario" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-1 col-form-label col-form-label-sm">Clave</label>
            <div class="col-sm-4">
                <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Clave" required>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
        <div class="form-group">
            @include('layouts.errors')
        </div>
    </form>

@stop 