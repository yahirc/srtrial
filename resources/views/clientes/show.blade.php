@extends('layouts.master')

@section('content')

    <h1>{{ $cliente->cedula }}</h1>

    <cliente>
        {{ $cliente->nombre }}
    </cliente>
        
@stop 