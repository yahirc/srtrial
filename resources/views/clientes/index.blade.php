@extends('layouts.master')

@section('content')

    <h1>Clientes</h1>

    @foreach ($clientes as $cliente)
        <cliente>
            <h2>
                <a href="{{ url('/clientes', $cliente->cedula) }}">{{ $cliente->cedula }}</a>
            </h2>
            <h3>{{ $cliente->nombre }}</h3>
        </cliente>
    @endforeach

@stop 