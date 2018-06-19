@extends('layouts.master')

@section('content')

    <h1>{{ $sucursal->codsuc }}</h1>

    <sucursal>
        {{ $sucursal->nomsuc }}
    </sucursal>
        
@stop 