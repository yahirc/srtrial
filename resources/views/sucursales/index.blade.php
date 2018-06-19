@extends('layouts.master')

@section('content')

    <h1>Sucursales</h1>

    @foreach ($sucursales as $sucursal)
        <sucursal>
            <h2>
                <a href="{{ url('/sucursales', $sucursal->codsuc) }}">{{ $sucursal->codsuc }}</a>
            </h2>
            <h3>{{ $sucursal->nomsuc }}</h3>
        </sucursal>
        
    @endforeach

@stop 