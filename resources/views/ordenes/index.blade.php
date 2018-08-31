@extends('layouts.master')

@section('content')

    <h1>Ordenes</h1>

    <hr style="background-color: #5DADE2" />

    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </nav>

    <table class="table table-striped table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col"># Orden</th>
                <th scope="col">Cliente</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($ordenes as $orden)
            <tr>
                
            </tr>
        </tbody>
        @endforeach
    </table>

   
@stop 